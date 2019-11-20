<nav class="navbar navbar-default navbar-trans navbar-expand-lg ">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{'home'}}">Ceremonie de consecration</span></a>
     
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{'home'}}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'about'}}">A propos</a>
          </li>

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                La ceremonie
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{'subscribeToceremonie'}}">Inscription a la ceremonie</a>
                <a class="dropdown-item" href="{{'subscribeTocomity'}}">Inscription dans un comite de soutien</a>
                <a class="dropdown-item" href="{{'createCommity'}}">Creer un comité de soutien</a>
                <a class="dropdown-item" href="{{'funds'}}">Soutien financier</a>
              </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{'contact'}}">Forum</a>
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
        </ul>
      </div>
    </div>
    <a href="{{route('connexion')}}">
        <button type="button" class="pull-right btn btn-outline-dark">
         <span class="fa fa-user" aria-hidden="true"></span> Se connecter
        </button>
      </a>
  </nav>