@extends('base')


@section('content')

    <div class="faded-small">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 faded">
                    <div class="action-buttons">
                        <a href="/users/{{$user->id}}/delete" class="text-neg text-button"><i class="zmdi zmdi-delete"></i>Delete User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container small">

        <div class="row">
            <div class="col-md-6">
                <h1>Edit {{ $user->id === $currentUser->id ? 'Profile' : 'User' }}</h1>
                <form action="/users/{{$user->id}}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="put">
                    @include('users/form', ['model' => $user])
                </form>
            </div>
            <div class="col-md-6">
                <h1>&nbsp;</h1>
                <div class="shaded padded margin-top">
                    <p>
                        <img class="avatar" src="{{ $user->getAvatar(80) }}" alt="{{ $user->name }}">
                    </p>
                    <p class="text-muted">You can change your profile picture at <a href="http://en.gravatar.com/">Gravatar</a>.</p>
                </div>
            </div>
        </div>

        <hr class="margin-top large">

        <div class="row">
            <div class="col-md-12">
                <h3>Permissions</h3>
                <p>User Role: <strong>{{$user->role->display_name}}</strong>.</p>
                <ul class="text-muted">
                    @foreach($user->role->permissions as $permission)
                        <li>
                            {{ $permission->display_name }}
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

    </div>


@stop
