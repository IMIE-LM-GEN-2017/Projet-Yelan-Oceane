@extends('templates.default')

@section('title', 'Edition du compte admin de l\user')


@section('content')

    <div class="container">
        <div>
            {!! Form::model($user, ['route'=>['AdminUserUpdate', $user->id]]) !!}
        </div>
        <div>
            {!! Form::label('email') !!}
            {!! Form::text('email') !!}
        </div>
        Note: Pas de modif du mdp pour le moment, je vois ça plus tard dans le weekend
        <div>
            {!! Form::submit('Enregistrer les modifications') !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection