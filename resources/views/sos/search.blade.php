@extends('templates.default')

@section('title', 'Formulaire de recherche')

@section('content')

    <div class="container">
        {!! Form::open(['route' =>  'SosResult' ]) !!}
        <div class="form-group {!! $errors->has('region') ? 'has-error' : '' !!}">
        <!-- {!! Form::text('region', null, ['class' => 'form-control', 'placeholder' => 'Sélectionne une région' ]) !!}
        {!! $errors->first('region', '<small class="help-block">:message</small>') !!} -->
        </div>
        <br/>
        <div class="form-group">
            {!! Form::label('Région') !!}
            <br/>
            {!! Form::select('region', $regions) !!}
        </div>
        <br/>
        <div class="form-group">
            {!! Form::label('Département') !!}
            <br/>
            {!! Form::select('department', $departments) !!}
        </div>
        <br/>
        <div class="form-group {!! $errors->has('pc') ? 'has-error' : '' !!}">
            {!! Form::text ('pc', null, ['class' => 'control', 'placeholder' => 'Code postal']) !!}
            {!! $errors->first('pc', '<small class="help-block">:message</small>') !!}
        </div>
        <br/>
        <div class="form-group {!! $errors->has('city') ? 'has-error' : '' !!}">
            {!! Form::text ('city', null, ['class' => 'control', 'placeholder' => 'Ville']) !!}
            {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
        </div>
        <br/>
        {!! Form::submit('Lancer la recherche !', ['class' => 'btn btn-info pull-right']) !!}
        {!! Form::close() !!}
    </div>

@endsection