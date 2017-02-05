@extends('public')

@section('header-buttons')
    <a href="{{ baseUrl("/login") }}"><i class="zmdi zmdi-sign-in"></i>{{ trans('auth.log_in') }}</a>
@stop

@section('content')

    <div class="text-center">
        <div class="center-box">
            <h1>{{ title_case(trans('auth.sign_up')) }}</h1>

            <form action="{{ baseUrl("/register") }}" method="POST">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="email">{{ trans('auth.name') }}</label>
                    @include('form/text', ['name' => 'name'])
                </div>

                <div class="form-group">
                    <label for="email">{{ trans('auth.email') }}</label>
                    @include('form/text', ['name' => 'email'])
                </div>

                <div class="form-group">
                    <label for="password">{{ trans('auth.password') }}</label>
                    @include('form/password', ['name' => 'password', 'placeholder' => trans('auth.password_hint')])
                </div>

                <div class="from-group">
                    <button class="button block pos">{{ trans('auth.create_account') }}</button>
                </div>
            </form>

            @if(count($socialDrivers) > 0)
                <hr class="margin-top">
                <h3 class="text-muted">{{ trans('auth.social_registration') }}</h3>
                <p class="text-small">{{ trans('auth.social_registration_text') }}</p>
                @foreach($socialDrivers as $driver => $enabled)
                    <a href="{{ baseUrl("/register/service/" . $driver) }}">@icon($driver, ['width' => 56])</a>
                    &nbsp;
                @endforeach
            @endif
        </div>
    </div>


@stop
