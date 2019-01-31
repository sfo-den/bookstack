@extends('simple-layout')

@section('body')

    <div class="container small">

        <div class="my-l">
            @include('partials.breadcrumbs', ['crumbs' => [
                $book,
                $chapter,
                $chapter->getUrl('/edit') => trans('entities.chapters_edit')
            ]])
        </div>

        <div class="content-wrap card">
            <h1 class="list-heading">{{ trans('entities.chapters_edit') }}</h1>
            <form action="{{  $chapter->getUrl() }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                @include('chapters/form', ['model' => $chapter])
            </form>
        </div>

    </div>

@stop