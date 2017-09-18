@extends('templates.default')
@section('title', 'Formulaire de Contactttttttttttttt')

@section('content')
    <!--
    <br>
    <div class="col-sm-offset-3 col-sm-6" >

        <div class="panel panel-info">
            <div class="panel-heading">Contactez-nous</div>
            <div class="panel-body">
                {!! Form::open(['route' => 'ContactPostForm']) !!}
            <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                    {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
    {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
                    {!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
    {!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
            </div>
{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
    {!! Form::close() !!}
            </div>
        </div>
    </div>
-->
    <!-- Formulaie de Manu-->
    <div class="container is-centered"
         style="display: flex;text-align: center;">
        <form action="{{ route('ContactPostForm') }}" method="post">
            <div>
                <input type="text" name="dest" placeholder="destinataire">
            </div>
            <br/>
            <div>
                <input type="text" name="subject" placeholder="Sujet">
            </div>
            <br/>
            <div>
                <textarea name="content" id="" cols="30" rows="10"></textarea>
            </div>
            <br/>
            <div><input type="submit" value="envoyer">
                {{csrf_field()}}
            </div>
        </form>

    </div>

@endsection