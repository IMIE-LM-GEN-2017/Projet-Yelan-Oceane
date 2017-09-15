@extends('templates.default')

@section('title', 'Vue publique du profil')


@section('content')
 <a href="{{ route('Dashboard', ['id'=>Auth()->user()->id]) }}">Retour</a>

@endsection