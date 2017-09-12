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
                    <a class="navbar-item " href="{{ route('UserIndex') }}">
                        Liste
                    </a>
                    <a class="navbar-item ">
                        Commentaires
                    </a>
                </div>
            </div>
            <!-- BOUTON "A PROPOS" -->
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link is-active">
                    A propos
                </a>
                <div class="navbar-dropdown ">
                    <a class="navbar-item " href="{{ route('UserIndex') }}">
                        Notre histoire
                    </a>
                    <a class="navbar-item ">
                        Condition générale
                    </a>
                    <a class="navbar-item ">
                        Contactez-nous
                    </a>
                </div>
            </div>
        </div>



        <div class="navbar-end">
            <a class="navbar-item is-hidden-desktop-only" href="https://github.com/jgthms/bulma" target="_blank">
                <span class="icon" style="color: #333;">
                  <i class="fa fa-github"></i>
                </span>
            </a>
            <a class="navbar-item is-hidden-desktop-only" href="https://twitter.com/jgthms" target="_blank">
                <span class="icon" style="color: #55acee;">
                  <i class="fa fa-twitter"></i>
                </span>
            </a>
            <div class="navbar-item">
                <div class="field is-grouped">
                    <p class="control">
                        <a class="bd-tw-button button"
                           data-social-network="Twitter"
                           data-social-action="tweet"
                           data-social-target="http://bulma.io"
                           target="_blank"
                           href="{{ route('register') }}">
                            <span class="icon">
                              <i class="fa fa-twitter"></i>
                            </span>
                            <span>
                              Inscription
                            </span>
                        </a>
                    </p>
                    <p class="control">
                        <a class="button is-primary" href="{{ route('logout') }}">
                           <span class="icon">
                             <i class="fa fa-download"></i>
                           </span>
                           <span>Déconnexion
                           </span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
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

