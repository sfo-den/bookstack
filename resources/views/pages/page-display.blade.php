<div ng-non-bindable>

    <h1 id="bkmrk-page-title" class="float left">{{$page->name}}</h1>

    @if(count($page->tags) > 0)
        <div class="tag-display float right">
            <div class="heading primary-background-light">Page Tags</div>
            <table>
                @foreach($page->tags as $tag)
                    <tr class="tag">
                        <td @if(!$tag->value) colspan="2" @endif> {{ $tag->name }}</td>
                        @if($tag->value) <td class="tag-value">{{$tag->value}}</td> @endif
                    </tr>
                @endforeach
            </table>
        </div>
    @endif

    <div style="clear:left;"></div>

    {!! $page->html !!}
</div>