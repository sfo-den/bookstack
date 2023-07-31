<form action="{{ $entity->getUrl('/') }}" method="GET">
{{--    {{ method_field('PUT') }}--}}
    {{ csrf_field() }}
    <input type="hidden" name="type" value="{{ get_class($entity) }}">
    <input type="hidden" name="id" value="{{ $entity->id }}">

    <ul refs="dropdown@menu" class="dropdown-menu xl-limited anchor-left pb-none">
        @foreach(\BookStack\Users\UserWatchOptions::getAvailableOptionNames() as $option)
        <li>
            <button name="level" value="{{ $option }}" class="icon-item">
                @if(request()->query('level') === $option)
                    <span class="text-pos pt-m" title="{{ trans('common.status_active') }}">@icon('check-circle')</span>
                @else
                    <span title="{{ trans('common.status_inactive') }}"></span>
                @endif
                <div class="break-text">
                    <div class="mb-xxs"><strong>{{ trans('entities.watch_title_' . $option) }}</strong></div>
                    <div class="text-muted text-small">
                        {{ trans('entities.watch_desc_' . $option) }}
                    </div>
                </div>
            </button>
        </li>
        <li><hr class="my-none"></li>
        @endforeach
        <li>
            <a href="{{ url('/preferences/notifications') }}"
               target="_blank"
               class="text-item text-muted text-small break-text">{{ trans('entities.watch_change_default') }}</a>
        </li>
    </ul>
</form>