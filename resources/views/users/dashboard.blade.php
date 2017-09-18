@extends('templates.default')

@section('title', 'Mon Tableau de bord')

@section('content')


<div class="container"
     style="display:flex; justify-content: center; margin: 1em;">
    <a class="button is-danger is-large"
        href="{{route('SosSearch')}}">
        SOS
    </a>
</div>

    <!-- BOUTON "Mes paramètres" -->
<div style="display: flex;
            justify-content: center">
    <div class="navbar-item has-dropdown is-hoverable"
         style="background-color: FFBBF6">
        <a class="navbar-link is-active">
            Mes Paramètres
        </a>
        <div class="navbar-dropdown ">
            <a class="navbar-item" href="{{ route('UserShow', ['id'=>Auth()->user()->id]) }}">
                <i class="fa fa-eye" aria-hidden="true"></i>
                | Voir mon profil public
            </a>
            <a class="navbar-item " href="{{ route('UserEdit', ['id'=>Auth()->user()->id]) }}">
                <i class="fa fa-cog" aria-hidden="true"></i>
                | Editer mes informations
            </a>
            <a class="navbar-item " href="{{ route('ConfirmDelete') }}">
                <i class="fa fa-trash" aria-hidden="true"></i>
                | Supprimer mon compte
            </a>
        </div>
    </div>
</div>
@endsection