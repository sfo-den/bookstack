<?php

namespace BookStack\Entities\Tools;

use BookStack\Actions\Tag;
use BookStack\Entities\Models\Entity;
use Illuminate\Support\HtmlString;

class SearchResultsFormatter
{

    /**
     * For the given array of entities, Prepare the models to be shown in search result
     * output. This sets a series of additional attributes.
     * @param Entity[] $results
     */
    public function format(array $results, SearchOptions $options): void
    {
        foreach ($results as $result) {
            $this->setSearchPreview($result, $options);
        }
    }

    /**
     * Update the given entity model to set attributes used for previews of the item
     * primarily within search result lists.
     */
    protected function setSearchPreview(Entity $entity, SearchOptions $options)
    {
        $textProperty = $entity->textField;
        $textContent = $entity->$textProperty;
        $terms = array_merge($options->exacts, $options->searches);

        $originalContentByNewAttribute = [
            'preview_name' => $entity->name,
            'preview_content' => $textContent,
        ];

        foreach ($originalContentByNewAttribute as $attributeName => $content) {
            $matchRefs = $this->getMatchPositions($content, $terms);
            $mergedRefs = $this->sortAndMergeMatchPositions($matchRefs);
            $formatted = $this->formatTextUsingMatchPositions($mergedRefs, $content);
            $entity->setAttribute($attributeName, new HtmlString($formatted));
        }

        $tags = $entity->relationLoaded('tags') ? $entity->tags->all() : [];
        $this->highlightTagsContainingTerms($tags, $terms);
    }

    /**
     * Highlight tags which match the given terms.
     * @param Tag[] $tags
     * @param string[] $terms
     */
    protected function highlightTagsContainingTerms(array $tags, array $terms): void
    {
        foreach ($tags as $tag) {
            $tagName = strtolower($tag->name);
            $tagValue = strtolower($tag->value);

            foreach ($terms as $term) {
                $termLower = strtolower($term);

                if (strpos($tagName, $termLower) !== false) {
                    $tag->setAttribute('highlight_name', true);
                }

                if (strpos($tagValue, $termLower) !== false) {
                    $tag->setAttribute('highlight_value', true);
                }
            }
        }
    }

    /**
     * Get positions of the given terms within the given text.
     * Is in the array format of [int $startIndex => int $endIndex] where the indexes
     * are positions within the provided text.
     *
     * @return array<int, int>
     */
    protected function getMatchPositions(string $text, array $terms): array
    {
        $matchRefs = [];
        $text = strtolower($text);

        foreach ($terms as $term) {
            $offset = 0;
            $term = strtolower($term);
            $pos = strpos($text, $term, $offset);
            while ($pos !== false) {
                $end = $pos + strlen($term);
                $matchRefs[$pos] = $end;
                $offset = $end;
                $pos = strpos($text, $term, $offset);
            }
        }

        return $matchRefs;
    }

    /**
     * Sort the given match positions before merging them where they're
     * adjacent or where they overlap.
     *
     * @param array<int, int> $matchPositions
     * @return array<int, int>
     */
    protected function sortAndMergeMatchPositions(array $matchPositions): array
    {
        ksort($matchPositions);
        $mergedRefs = [];
        $lastStart = 0;
        $lastEnd = 0;

        foreach ($matchPositions as $start => $end) {
            if ($start > $lastEnd) {
                $mergedRefs[$start] = $end;
                $lastStart = $start;
                $lastEnd = $end;
            } else if ($end > $lastEnd) {
                $mergedRefs[$lastStart] = $end;
                $lastEnd = $end;
            }
        }

        return $mergedRefs;
    }

    /**
     * Format the given original text, returning a version where terms are highlighted within.
     * Returned content is in HTML text format.
     */
    protected function formatTextUsingMatchPositions(array $matchPositions, string $originalText): string
    {
        $contextRange = 32;
        $targetLength = 260;
        $maxEnd = strlen($originalText);
        $lastEnd = 0;
        $firstStart = null;
        $content = '';

        foreach ($matchPositions as $start => $end) {
            // Get our outer text ranges for the added context we want to show upon the result.
            $contextStart = max($start - $contextRange, 0, $lastEnd);
            $contextEnd = min($end + $contextRange, $maxEnd);

            // Adjust the start if we're going to be touching the previous match.
            $startDiff = $start - $lastEnd;
            if ($startDiff < 0) {
                $contextStart = $start;
                $content = substr($content, 0, strlen($content) + $startDiff);
            }

            // Add ellipsis between results
            if ($contextStart !== 0 && $contextStart !== $start) {
                $content .= ' ...';
            }

            // Add our content including the bolded matching text
            $content .= e(substr($originalText, $contextStart, $start - $contextStart));
            $content .= '<strong>' . e(substr($originalText, $start, $end - $start)) . '</strong>';
            $content .= e(substr($originalText, $end, $contextEnd - $end));

            // Update our last end position
            $lastEnd = $contextEnd;

            // Update the first start position if it's not already been set
            if (is_null($firstStart)) {
                $firstStart = $contextStart;
            }

            // Stop if we're near our target
            if (strlen($content) >= $targetLength - 10) {
                break;
            }
        }

        // Just copy out the content if we haven't moved along anywhere.
        if ($lastEnd === 0) {
            $content = e(substr($originalText, 0, $targetLength));
            $lastEnd = $targetLength;
        }

        // Pad out the end if we're low
        $remainder = $targetLength - strlen($content);
        if ($remainder > 10) {
            $content .= e(substr($originalText, $lastEnd, $remainder));
            $lastEnd += $remainder;
        }

        // Pad out the start if we're still low
        $remainder = $targetLength - strlen($content);
        $firstStart = $firstStart ?: 0;
        if ($remainder > 10 && $firstStart !== 0) {
            $padStart = max(0, $firstStart - $remainder);
            $content = ($padStart === 0 ? '' : '...') . e(substr($originalText, $padStart,  $firstStart - $padStart)) . substr($content, 4);
        }

        // Add ellipsis if we're not at the end
        if ($lastEnd < $maxEnd) {
            $content .= '...';
        }

        return $content;
    }

}