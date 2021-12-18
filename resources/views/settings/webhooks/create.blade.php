@extends('layouts.simple')

@section('body')

    <div class="container small">

        <div class="py-m">
            @include('settings.parts.navbar', ['selected' => 'webhooks'])
        </div>

        <form action="{{ url("/settings/webhooks/create") }}" method="POST">
            @include('settings.webhooks.parts.form', ['title' => trans('settings.webhooks_create')])
        </form>

        @include('settings.webhooks.parts.format-example')
    </div>

@stop
