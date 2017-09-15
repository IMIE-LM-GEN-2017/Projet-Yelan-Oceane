@extends('templates.default')

@section('title', 'WELCOME')
@section('content')
    <div class="container-fluid">
    <!-- ANCIENS LIENS TEST pour INSCRIPTION CONNEXION DECONNEXION
    <div id="contener-button" class="btn-group" role="group">
        <button type="button" class="btn btn-lg btn-primary"><a class="navbar-item" href="{{ route('register') }}">Inscription</a></button>
        <button type="button" class="btn btn-lg btn-primary"><a class="navbar-item" href="{{ route('login') }}">Connexion</a></button>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="fa fa-fw fa-power-off"></i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST"
              style="display: none;">{{ csrf_field() }}</form>
    </div>
-->
        <center><h1>SOSgalR</h1></center>
        {{ var_dump(auth()->user()) }}

    </div>
@endsection

