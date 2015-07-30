@extends('base')

@section('content')


<div class="row faded-small">
    <div class="col-md-6"></div>
    <div class="col-md-6 faded">
        <div class="action-buttons">
            <a href="/books/create" class="text-pos"><i class="zmdi zmdi-plus"></i>Add new book</a>
        </div>
    </div>
</div>


<div class="page-content">
    <h1>Books</h1>
    @foreach($books as $book)
        <div class="book">
            <h3><a href="{{$book->getUrl()}}">{{$book->name}}</a></h3>
            <p class="text-muted">{{$book->description}}</p>
        </div>
        <hr>
    @endforeach
</div>





@stop