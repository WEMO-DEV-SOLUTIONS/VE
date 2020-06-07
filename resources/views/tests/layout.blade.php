<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nations pour l'Eternel</title>
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/scrollreveal/scrollreveal.min.js"></script>
    <!-- Contact Form JavaScript File -->


    <!-- Template Main Javascript File -->
    <script src="main.js"></script>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo.png')}}" />



</head>

<body>

<!-- Navbar Header -->
<nav class="navbar navbar-default navbar-trans navbar-expand-xl " style="margin-right: 103px;margin-left: 104px;">
    <div class="container">

        <a class="navbar-brand text-brand" href="{{'home'}}">Cérémonie de consécration</span></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

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
                    <div class="dropdown-menu hide" aria-labelledby="navbarDropdown">
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

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{route('connexion')}}">
                        <button type="button" class="btn btn-outline-dark">
                            <span class="fa fa-user" aria-hidden="true"></span> Se connecter
                        </button>
                    </a>
                </li>

            </ul>



        </div>
    </div>

</nav>



@yield('content')


<!-- Footer -->
<footer class="container" style="width:1140px;background-image: linear-gradient(white,#b0d2f2);margin-top: 69px;padding-bottom: 1px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 my-auto" >

                <div class="socials-a">
                    <ul class="list-inline">
                        Suivez-nous sur :

                        <li class="list-inline-item">

                            <a href="https://valeurseternele.org">

                                <span> <b> valeurseternelles.org</b></span>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=www.valeurseternel.org">
                                <i class="fa fa-facebook " aria-hidden="true"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://twitter.com/home?status=www.valeurseternel.org VE">
                                <i class="fa fa-twitter " aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://whatsapp.com/home?status=www.valeurseternel.org VE">
                                <span class="fa fa-whatsapp"></span>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://youtube.com/home?status=www.valeurseternel.org VE">
                                <i class="fa fa-youtube " aria-hidden="true"></i>
                            </a>
                        </li>

                    </ul>
                </div>


            </div>
            <div class="col-md-4" style="border-left: 3px solid #2c8bea;;border-right: 3px solid #2c8bea;">

                <p class ="px-3" style="font-size: 17px;text-align: justify; color:#868a8c; font-weight: bold;">Poussés par l’Esprit de Dieu, des femmes et
                    des hommes se sont levés pour bâtir des nations éthiques,
                    qui sont des nations selon le cœur de Dieu.
                    2019 a été une année déterminante, pour réaliser l’étape de
                    préparation devant aboutir à la consécration de toutes les nations à sa lumière.
                    L’Eternel vous appelle à devenir un instrument pour ces nations.
                    Rejoignez le mouvement ! </p>

            </div>
            <div class="col-md-4 my-auto">
                <span> <b> www.nationspourleternel.org</b></span>
                <p class="copyright color-text-a">
                    &copy; Copyright
                    <span class="color-a">   Nations pour l'Éternel</span> - Tous droits réservés. <br>

                </p>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

