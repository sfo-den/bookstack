


<div class="page-editor flex-fill flex" ng-controller="PageEditController" page-id="{{ $model->id or 0 }}" page-draft="{{ $page->isDraft or 0 }}">

    {{ csrf_field() }}
    <div class="faded-small toolbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 faded">
                    <div class="action-buttons text-left">
                        <a href="{{ back()->getTargetUrl() }}" class="text-button text-primary"><i class="zmdi zmdi-arrow-left"></i>Back</a>
                        <a onclick="$('body>header').slideToggle();" class="text-button text-primary"><i class="zmdi zmdi-swap-vertical"></i>Toggle Header</a>
                    </div>
                </div>
                <div class="col-sm-4 faded text-center">
                    <span class="faded-text" ng-bind="draftText"></span>
                </div>
                <div class="col-sm-4 faded">
                    <div class="action-buttons" ng-cloak>
                        <button type="button" ng-if="isDraft" ng-click="discardDraft()" class="text-button text-neg"><i class="zmdi zmdi-close-circle"></i>Discard Draft</button>
                        <button type="submit" id="save-button" class="text-button  text-pos"><i class="zmdi zmdi-floppy"></i>Save Page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="title-input page-title clearfix" ng-non-bindable>
        <div class="input">
            @include('form/text', ['name' => 'name', 'placeholder' => 'Page Title'])
        </div>
    </div>
    <div class="edit-area flex-fill flex">
        <textarea id="html-editor" tinymce="editorOptions" mce-change="editorChange" mce-model="editorHtml"  name="html" rows="5"
                  @if($errors->has('html')) class="neg" @endif>@if(isset($model) || old('html')){{htmlspecialchars( old('html') ? old('html') : $model->html)}}@endif</textarea>
        @if($errors->has('html'))
            <div class="text-neg text-small">{{ $errors->first('html') }}</div>
        @endif
    </div>
</div>