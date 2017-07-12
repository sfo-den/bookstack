<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"  data-entity-type="book" data-entity-id="{{$book->id}}">
    <div class="gallery-item">
    <h4>
        <a class="text-book entity-list-item-link" href="{{$book->getUrl()}}"><i class="zmdi zmdi-book"></i><span class="entity-list-item-name">{{$book->name}}</span>
        <br>
        </a>
    </h4>
    <div class="gallery-image">
        <a class="text-book entity-list-item-link" href="{{$book->getUrl()}}">
        <img src="{{$book->getBookCover()}}" alt="{{$book->name}}">
        </a>
    </div>
    @if(isset($book->searchSnippet))
        <p class="text-muted">{!! $book->searchSnippet !!}</p>
    @else
        <p class="text-muted">{{ $book->getExcerpt(80) }}</p>
    @endif
</div>
</div>