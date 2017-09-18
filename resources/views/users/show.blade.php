@extends('templates.default')

@section('title', 'Vue publique du profil')


@section('content')

    <div>
        <p>Prénom : {{ Auth()->user()->firstname }}</p>
        <p>Date de naissance : {{ Auth()->user()->birthdate }}</p>
        <p>Description : {{ Auth()->user()->description }}</p>
        <p>Ville : {{ Auth()->user()->city }}</p>
    </div>
    <br/>
    <a href="{{ route('Dashboard', ['id'=>Auth()->user()->id]) }}"
       class="button is-info">Retour</a>


@endsection