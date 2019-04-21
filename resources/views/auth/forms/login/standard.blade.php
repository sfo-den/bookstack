<div class="form-group">
    <label for="email">{{ trans('auth.email') }}</label>
    @include('form.text', ['name' => 'email', 'tabindex' => 1])
</div>

<div class="form-group">
    <label for="password">{{ trans('auth.password') }}</label>
    @include('form.password', ['name' => 'password', 'tabindex' => 1])
    <span class="block small mt-s">
        <a href="{{ baseUrl('/password/email') }}">{{ trans('auth.forgot_password') }}</a>
        @if(setting('registration-enabled', false))
            • <a href="{{ baseUrl('/register') }}">{{ trans('auth.sign_up') }}</a>
        @endif
    </span>
</div>
