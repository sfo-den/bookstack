<?php

namespace BookStack\Util\CrossLinking;

use BookStack\Model;
use BookStack\Util\CrossLinking\ModelResolvers\BookLinkModelResolver;
use BookStack\Util\CrossLinking\ModelResolvers\BookshelfLinkModelResolver;
use BookStack\Util\CrossLinking\ModelResolvers\ChapterLinkModelResolver;
use BookStack\Util\CrossLinking\ModelResolvers\CrossLinkModelResolver;
use BookStack\Util\CrossLinking\ModelResolvers\PageLinkModelResolver;
use BookStack\Util\CrossLinking\ModelResolvers\PagePermalinkModelResolver;
use DOMDocument;
use DOMXPath;

class CrossLinkParser
{
    /**
     * @var CrossLinkModelResolver[]
     */
    protected array $modelResolvers;

    public function __construct(array $modelResolvers)
    {
        $this->modelResolvers = $modelResolvers;
    }

    /**
     * Extract any found models within the given HTML content.
     *
     * @returns Model[]
     */
    public function extractLinkedModels(string $html): array
    {
        $models = [];

        $links = $this->getLinksFromContent($html);

        foreach ($links as $link) {
            $model = $this->linkToModel($link);
            if (!is_null($model)) {
                $models[get_class($model) . ':' . $model->id] = $model;
            }
        }

        return array_values($models);
    }

    /**
     * Get a list of href values from the given document.
     *
     * @returns string[]
     */
    protected function getLinksFromContent(string $html): array
    {
        $links = [];

        $html = '<body>' . $html . '</body>';
        libxml_use_internal_errors(true);
        $doc = new DOMDocument();
        $doc->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));

        $xPath = new DOMXPath($doc);
        $anchors = $xPath->query('//a[@href]');

        /** @var \DOMElement $anchor */
        foreach ($anchors as $anchor) {
            $links[] = $anchor->getAttribute('href');
        }

        return $links;
    }

    /**
     * Attempt to resolve the given link to a model using the instance model resolvers.
     */
    protected function linkToModel(string $link): ?Model
    {
        foreach ($this->modelResolvers as $resolver) {
            $model = $resolver->resolve($link);
            if (!is_null($model)) {
                return $model;
            }
        }

        return null;
    }

    /**
     * Create a new instance with a pre-defined set of model resolvers, specifically for the
     * default set of entities within BookStack.
     */
    public static function createWithEntityResolvers(): self
    {
        return new static([
            new PagePermalinkModelResolver(),
            new PageLinkModelResolver(),
            new ChapterLinkModelResolver(),
            new BookLinkModelResolver(),
            new BookshelfLinkModelResolver(),
        ]);
    }

}