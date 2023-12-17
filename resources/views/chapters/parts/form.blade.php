@push('head')
    <script src="{{ versioned_asset('libs/tinymce/tinymce.min.js') }}" nonce="{{ $cspNonce }}"></script>
@endpush

{{ csrf_field() }}
<div class="form-group title-input">
    <label for="name">{{ trans('common.name') }}</label>
    @include('form.text', ['name' => 'name', 'autofocus' => true])
</div>

<div class="form-group description-input">
    <label for="description_html">{{ trans('common.description') }}</label>
    @include('form.description-html-input')
</div>

<div class="form-group collapsible" component="collapsible" id="logo-control">
    <button refs="collapsible@trigger" type="button" class="collapse-title text-link" aria-expanded="false">
        <label for="tags">{{ trans('entities.chapter_tags') }}</label>
    </button>
    <div refs="collapsible@content" class="collapse-content">
        @include('entities.tag-manager', ['entity' => $chapter ?? null])
    </div>
</div>

<div class="form-group text-right">
    <a href="{{ isset($chapter) ? $chapter->getUrl() : $book->getUrl() }}" class="button outline">{{ trans('common.cancel') }}</a>
    <button type="submit" class="button">{{ trans('entities.chapters_save') }}</button>
</div>

@include('entities.selector-popup', ['entityTypes' => 'page', 'selectorEndpoint' => '/search/entity-selector-templates'])
@include('form.editor-translations')