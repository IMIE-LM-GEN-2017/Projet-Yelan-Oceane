@extends('templates.default')

@section('title', 'Edition du compte admin de l\'user')


@section('content')

    <div class="container is-centered"
         style="text-align: center;
         background-color: A6D4FF;
         margin-left: 10em; margin-right: 10em; margin-bottom: 10em;
         padding: 2em;">
        <h1><strong>Mes informations</strong></h1>
        <div>
            {!! Form::model($user, ['route'=>['AdminUserUpdate', $user->id]]) !!}
        </div>
        <div class="field">
            {!! Form::label('pseudo') !!}
            <br/>
            <input id="pseudo"
                   class="control"
                   type="text"
                   name="pseudo"
                   value="{{ old('pseudo') }}"
                   placeholder="Dark Babor"
                   required autofocus>

            @if ($errors->has('pseudo'))
                <strong>{{ $errors->first('pseudo') }}</strong>
            @endif

            <br/>
        </div>
        <br/>

        <div class="field">
            {!! Form::label('Mail') !!}
            <br/>
            {!! Form::text('email') !!}
        </div>
        <br/>
        <div class="field">
            {!! Form::label('Mot de passe') !!}
            <br/>
            {!! Form::text('password') !!}
        </div>
        <br/>
        <div class="field">
            {!! Form::label('Nom') !!}
            <br/>
            {!! Form::text('lastname') !!}

        </div>
        <br/>
        <div class="field">
            {!! Form::label('Prénom') !!}
            <br/>
            {!! Form::text('firstname') !!}

        </div>
        <br/>
        <div class="field">
            {!! Form::label('Date de naissance') !!}
            <br/>
            {!! Form::text('birthdate') !!}

        </div>
        <br/>
        <div class="field">
            {!! Form::label('Description') !!}
            <br/>
            {!! Form::text('description') !!}

        </div>
        <br/>
        <div class="field">
            {!! Form::label('Nom et N° de voie') !!}
            <br/>
            {!! Form::text('adressname') !!}

        </div>
        <br/>
        <div class="field">
            {!! Form::label('Code postal') !!}
            <br/>
            {!! Form::text('pc', Auth()->user()->city) !!}

        </div>
        <br/>
        <div class="field">
            {!! Form::label('Ville') !!}
            <br/>
            {!! Form::text('city', Auth()->user()->city) !!}

        </div>
        <br/>
        <div class="field">
            {!! Form::label('Département') !!}
            <br/>
            {!! Form::select('department', $departments) !!}
        </div>
        <br/>
        <div class="field">
            {!! Form::label('Région') !!}
            <br/>
            {!! Form::select('region', $regions) !!}
        </div>
        <br/>
        <div class="field">
            <input type="submit"
                   value="Enregistrer les modifications"
                   class="button is-primary is-focused>
            {!! Form::submit('Enregistrer les modifications')!!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection