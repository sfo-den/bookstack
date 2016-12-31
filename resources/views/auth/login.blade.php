@extends('public')

@section('header-buttons')
    @if(setting('registration-enabled', false))
        <a href="{{ baseUrl("/register") }}"><i class="zmdi zmdi-account-add"></i>{{ trans('auth.sign_up') }}</a>
    @endif
@stop

@section('content')

    <div class="text-center">
        <div class="center-box">
            <h1>{{ title_case(trans('auth.log_in')) }}</h1>

            <form action="{{ baseUrl("/login") }}" method="POST" id="login-form">
                {!! csrf_field() !!}


                @include('auth/forms/login/' . $authMethod)

                <div class="form-group">
                    <label for="remember" class="inline">{{ trans('auth.remember_me') }}</label>
                    <input type="checkbox" id="remember" name="remember"  class="toggle-switch-checkbox">
                    <label for="remember" class="toggle-switch"></label>
                </div>


                <div class="from-group">
                    <button class="button block pos" tabindex="3"><i class="zmdi zmdi-sign-in"></i> {{ title_case(trans('auth.log_in')) }}</button>
                </div>
            </form>

            @if(count($socialDrivers) > 0)
                <hr class="margin-top">
                <h3 class="text-muted">{{ trans('auth.social_login') }}</h3>
                @if(isset($socialDrivers['google']))
                    <a href="{{ baseUrl("/login/service/google") }}" style="color: #DC4E41;"><i class="zmdi zmdi-google-plus-box zmdi-hc-4x"></i></a>
                @endif
                @if(isset($socialDrivers['github']))
                    <a href="{{ baseUrl("/login/service/github") }}" style="color:#444;"><i class="zmdi zmdi-github zmdi-hc-4x"></i></a>
                @endif
            @endif
        </div>
    </div>

@stop