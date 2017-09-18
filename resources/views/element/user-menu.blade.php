@if(Auth::guest())


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
                    <a class="button is-primary" href="{{ route('login') }}">
                        <span class="icon">
                            <i class="fa fa-download"></i>
                        </span>
                        <span>Connexion</span>
                    </a>
                </p>
            </div>
        </div>
    </div>
    </div>


@else


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
                       href="">
                       <span class="icon">
                         <i class="fa fa-twitter"></i>
                       </span>
                       <span>
                        Bouton d'essai
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

@endif