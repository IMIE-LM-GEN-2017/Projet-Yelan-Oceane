<nav class="navbar ">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('Home') }}">
            <img src="https://images.duckduckgo.com/iu/?u=http%3A%2F%2Ffc06.deviantart.net%2Ffs70%2Ff%2F2010%2F237%2F5%2Fd%2FDock_Icon_Home_Button_by_Moa_isa_JediKnight.png&f=1"
                 alt="Bulma: a modern CSS framework based on Flexbox"
                 width="50" height="70">
        </a>
        <div class="navbar-burger burger" data-target="navMenubd-example">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- BOUTON "MEMBRES" -->
    <div id="navMenubd-example" class="navbar-menu">
        <div class="navbar-start">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link  is-active">
                    Membres
                </a>
                <div class="navbar-dropdown ">
                    <a class="navbar-item" target="_blank" href="{{ route('UserIndex') }}" title="Découvrez notre communauté">
                        <i class="fa fa-users" aria-hidden="true"></i>
                         | Liste
                    </a>
                    <a class="navbar-item " target="_blank" href="{{ route('Comments') }}" title="Les avis des utilisateurs sur l'application">

                        <i class="fa fa-commenting" aria-hidden="true"></i>
                         | Commentaires
                    </a>
                </div>
            </div>
            <!-- BOUTON "A PROPOS" -->
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link is-active">
                    A propos
                </a>
                <div class="navbar-dropdown ">
                    <a class="navbar-item" target="_blank" href="{{ route('Story') }}">
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                         | Notre histoire
                    </a>
                    <a class="navbar-item " target="_blank" href="{{ route('Conditions') }}" title="Cliquez sur ce lien pour accéder à nos conditions générales d'utilisation">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                         | Conditions générales
                    </a>
                    <a class="navbar-item " target="_blank" href="{{ route('ContactGetForm') }}" title="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                         | Contactez-nous
                    </a>
                </div>
            </div>
        </div>


        <div class="navbar-end">
            @if(Auth::guest())
                <a class="navbar-item" href="{{ route('register') }}">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                    Inscription
                </a>
                <a class="navbar-item" href="{{ route('login') }}">
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    Connexion
                </a>
            @else
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

                <a class="navbar-item is-danger" href="{{ route('Dashboard') }}">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    Tableau de bord
                </a>
                <a class="navbar-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off" aria-hidden="true"></i>
                    Déconnexion
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">{{ csrf_field() }}</form>
            @endif
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // Get all "navbar-burger" elements
            var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any nav burgers
            if ($navbarBurgers.length > 0) {

                // Add a click event on each of them
                $navbarBurgers.forEach(function ($el) {
                    $el.addEventListener('click', function () {

                        // Get the target from the "data-target" attribute
                        var target = $el.dataset.target;
                        var $target = document.getElementById(target);

                        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                        $el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');

                    });
                });
            }

        });
    </script>
</nav>
<!--
<a class="navbar-item" href="{{ route('login') }}">Login</a>
<a class="navbar-item" href="{{ route('register') }}">Inscription</a>
-->
