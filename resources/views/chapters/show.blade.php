@extends('base')

@section('content')

    <div class="faded-small toolbar" ng-non-bindable>
        <div class="container">
            <div class="row">
                <div class="col-md-4 faded">
                    <div class="breadcrumbs">
                        <a href="{{$book->getUrl()}}" class="text-book text-button"><i class="zmdi zmdi-book"></i>{{ $book->name }}</a>
                    </div>
                </div>
                <div class="col-md-8 faded">
                    <div class="action-buttons">
                        @if(userCan('page-create', $chapter))
                            <a href="{{$chapter->getUrl() . '/create-page'}}" class="text-pos text-button"><i class="zmdi zmdi-plus"></i>New Page</a>
                        @endif
                        @if(userCan('chapter-update', $chapter))
                            <a href="{{$chapter->getUrl() . '/edit'}}" class="text-primary text-button"><i class="zmdi zmdi-edit"></i>Edit</a>
                        @endif
                        @if(userCan('chapter-delete', $chapter))
                            <a href="{{$chapter->getUrl() . '/delete'}}" class="text-neg text-button"><i class="zmdi zmdi-delete"></i>Delete</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container" ng-non-bindable>
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $chapter->name }}</h1>
                <p class="text-muted">{{ $chapter->description }}</p>

                @if(count($chapter->pages) > 0)
                    <div class="page-list">
                        <hr>
                        @foreach($chapter->pages as $page)
                            @include('pages/list-item', ['page' => $page])
                            <hr>
                        @endforeach
                    </div>
                @else
                    <hr>
                    <p class="text-muted">No pages are currently in this chapter.</p>
                    <p>
                        <a href="{{$chapter->getUrl() . '/create-page'}}" class="text-page"><i class="zmdi zmdi-file-text"></i>Create a new page</a>
                        &nbsp;&nbsp;<em class="text-muted">-or-</em>&nbsp;&nbsp;&nbsp;
                        <a href="{{$book->getUrl() . '/sort'}}" class="text-book"><i class="zmdi zmdi-book"></i>Sort the current book</a>
                    </p>
                    <hr>
                @endif

                <p class="text-muted small">
                    Created {{$chapter->created_at->diffForHumans()}} @if($chapter->createdBy) by {{$chapter->createdBy->name}} @endif
                    <br>
                    Last Updated {{$chapter->updated_at->diffForHumans()}} @if($chapter->updatedBy) by {{$chapter->updatedBy->name}} @endif
                </p>
            </div>
            <div class="col-md-3 col-md-offset-1">
                @include('pages/sidebar-tree-list', ['book' => $book, 'sidebarTree' => $sidebarTree])
            </div>
        </div>
    </div>




@stop
