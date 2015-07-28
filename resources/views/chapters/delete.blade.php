@extends('base')

@section('content')

    <div class="page-content">
        <h1>Delete Chapter</h1>
        <p>This will delete the chapter with the name '{{$chapter->name}}', All pages will be removed
        and added directly to the book.</p>
        <p class="text-neg">Are you sure you want to delete this chapter?</p>

        <form action="{{$chapter->getUrl()}}" method="POST">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="button neg">Confirm</button>
            <a href="{{$chapter->getUrl()}}" class="button">Cancel</a>
        </form>
    </div>

@stop

@section('bottom')
    @include('pages/image-manager')
@stop