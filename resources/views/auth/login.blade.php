@extends('templates.default')

@section('title', 'Connexion')

@section('content')
    <div class="container is-centered"
         style="text-align: center;
                margin-left: 8.5em; margin-right: 8.5em; margin-bottom: 10em;
                padding: 2em;
                background-color: 9BA5CC;">

        {!! Form::open(['route'=>'login']) !!}

        {!! Form::label('email', 'Adresse email', ['class'=>'label']) !!}
        {!! Form::email('email', old('email'), ['required', 'autofocus', 'class'=>'input']) !!}
        @if ($errors->has('email'))
            <strong>{{ $errors->first('email') }}</strong>
        @endif

        {!! Form::label('password', 'Mot de passe', ['class'=>'label']) !!}
        {!! Form::password('password', ['required', 'autofocus', 'class'=>'input']) !!}
        @if ($errors->has('password'))
            <strong>{{ $errors->first('password') }}</strong>
        @endif

        <label for="remember" class="label">
            {!! Form::checkbox('remember', old('remember'), ['id'=>'remember', 'class'=>'checkbox']) !!} Se souvenir de
            moi
        </label>

        {!! Form::submit('Login', ['class'=>'button is-primary']) !!}

        {!! Form::close() !!}

        <a href="{{ route('password.request') }}">J'ai oublié mon mot de passe</a>
    </div>

@endsection