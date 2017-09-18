@extends('templates.default')

@section('title', 'Profil de la personne')


@section('content')

    <div>
        <p>Prénom : </p>
        <p>Date de naissance : </p>
        <p>Description : </p>
        <p>Ville : </p>
    </div>
    <br/>
    @if(Auth::guest())
        <a href="{{ route('Home') }}">Retour</a>
    @else
        <a href="{{ route('Dashboard', ['id'=>Auth()->user()->id]) }}"
           class="button is-info">Retour</a>
    @endif


@endsection