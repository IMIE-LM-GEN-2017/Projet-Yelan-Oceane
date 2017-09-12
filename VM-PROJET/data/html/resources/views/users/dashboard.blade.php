@extends('templates.default')

@section('title', 'Mon Tableau de bord')

@section('content')


<div class="container" style="display:flex; justify-content: center">
    <a class="button is-danger is-large"
        href="{{route('SosSearch')}}">
        SOS
    </a>
</div>

    <!-- BOUTON "Mes paramètres" -->
    <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link is-active">
            Mes Paramètres
        </a>
        <div class="navbar-dropdown ">
            <a class="navbar-item" href="{{ route('AdminUserShow', ['id']) }}">
                <i class="fa fa-eye" aria-hidden="true"></i>
                | Voir mon profil public
            </a>
            <a class="navbar-item " href="{{ route('AdminUserEdit', ['id']) }}">
                <i class="fa fa-cog" aria-hidden="true"></i>
                | Editer mes informations

            </a>
            <a class="navbar-item " href="{{route('AdminUserDelete', ['id'])}}">
                <i class="fa fa-trash" aria-hidden="true"></i>
                | Supprimer mon compte

            </a>
        </div>
    </div>
<!--
<div class="dropdown is-active">
    <div class="dropdown-trigger">
        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
            <span>Mes paramètres</span>
            <span class="icon is-small">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
      </span>
        </button>
    </div>
    <div class="dropdown-menu" id="dropdown-menu" role="menu">
        <div class="dropdown-content is-active">
            <a href="#" class="dropdown-item is-active">
                Voir mon profil public
            </a>
            <a class="dropdown-item">
                Modifier mes informations
            </a>

            <a href="#" class="dropdown-item">
                Supprimer mon compte
            </a>
            <hr class="dropdown-divider">
            <a href="#" class="dropdown-item">
                With a divider
            </a>
        </div>
    </div>
</div>
-->

@endsection