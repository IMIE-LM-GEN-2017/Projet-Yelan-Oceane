@extends('templates.default')

@section('title', 'Supprimer mon compteé')

@section('content')
<div class="container is-centered"
     style="text-align: center;">
    <h1>Es-tu certain(e) de vouloir supprimer définitivement ton compte ?</h1>
    <br/>
    <div>
        <a class="button is-info is-focused"
           href="{{ route('Dashboard', ['id'=>Auth()->user()->id]) }}">
            <strong>Non</strong>, je veux le garder
        </a>
    </div>
    <br>
    <div>
        <a class="button is-warning is-focused"
           href="{{route('UserDelete', ['id'=>Auth()->user()->id]) }}">
            <strong>Oui</strong>, je veux le supprimer
        </a>
    </div>
</div>


@endsection