<nav class="navbar navbar-default navbar-trans navbar-expand-lg " style="height:50px;margin-right: 103px;margin-left: 104px;>
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{'home'}}">Cérémonie de consécration</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{'home'}}">Accueil</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                La cérémonie
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{'subscribeToceremonie'}}">Inscription à la cérémonie</a>
                <a class="dropdown-item" href="{{'subscribeTocomity'}}">Inscription dans un comité de soutien</a>
                <a class="dropdown-item" href="{{'createCommity'}}">Créer un comité de soutien</a>
                <a class="dropdown-item" href="{{ route('soutien') }}">Soutien financier</a>
                <a class="dropdown-item" href="{{'funds'}}">Vérifier son paiement</a>
              </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{'forum'}}">Forum</a>
              </li>

          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Autres
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{'solidarity'}}">Solidaires</a>
              <a class="dropdown-item" href="{{'don'}}">Faire un don</a>
            </div>
          </li> --}}


          <li class="nav-item">
            <a class="nav-link" href="{{'contact'}}">Contact</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="{{'newslater'}}">Actualité</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="{{'about'}}">A propos</a>
            </li>
        </ul>
      </div>
    </div>
    <a href="{{route('connexion')}}">
        <button type="button" class="pull-right btn btn-outline-dark">
         <span class="fa fa-user" aria-hidden="true"></span> Se connecter
        </button>
      </a>
  </nav>
