<div class="comment-editor" ng-controller="CommentReplyController as vm" ng-cloak>
    <form novalidate>
        <textarea name="markdown" rows="3" ng-model="comment.text" placeholder="{{ trans('entities.comment_placeholder') }}"
                  @if($errors->has('markdown')) class="neg" @endif>@if(isset($model) ||
                  old('markdown')){{htmlspecialchars( old('markdown') ? old('markdown') : ($model->markdown === '' ? $model->html : $model->markdown))}}@endif</textarea>
        <input type="hidden" ng-model="comment.pageId" name="comment.pageId" value="{{$pageId}}" ng-init="comment.pageId = {{$pageId }}">
        <button type="submit" class="button pos" ng-click="vm.saveComment(isReply)">Save</button>
    </form>
</div>

@if($errors->has('markdown'))
    <div class="text-neg text-small">{{ $errors->first('markdown') }}</div>
@endif