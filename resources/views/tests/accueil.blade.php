@extends('tests.layout')
@section('content')
    <style>
        .white-container{
            background-color:#ffffff ;
            margin-top: 1rem !important;
        }
        .bold-button{
            font-weight: bolder;
        }
    </style>
    <!-- Container en block  -->
    <div class="container mt-4 white-container" >

        <!-- Zone 1 -->
        <div class="row">
            <div class="col-lg-3">
                <img src="img/logo-couper.png" alt="" height="200px" width="230px">
            </div>
            <div class="col-lg-9 text-center py-4">
                <h1 style="color: #31baf0ee;font-weight: bold">
                    Cérémonie de consécration des nations
                    <br> A  L'ETERNEL <br> <em style="font-size:18pt" >comme  nations éthiques - Cameroon 2019</em>
                </h1>
            </div>
        </div>

        <!-- Video -->
        <div class="row">
            <div class="col-lg-12 px-0" style="background-color:#b3a2a2;">
                <video src="video/video.mp4"  style="width: 100%"  controls ></video>
            </div>
            <div class="col-lg-12">
                <a href="https://nationspourleternel.com/home?status=www.valeurseternel.org VE"> <i class="fa fa-share"></i></a>
            </div>

        </div>


    </div>

    <!-- Container en block  -->
    <div class="container white-container   py-4">

        <div class="row">
            <div class="col-lg-6 text-center">
                <img src="img/icone colombe copie.png" alt=""  height="57" width="80">
                <br>
                <h4>L'APPEL DE L’ÉTERNEL</h4>
                <i><h6>Comprendre ce plan de Dieu</h6></i>
                <hr>
                <p class="text-left" style="font-size:13pt;margin-left:15px" >
                    La cérémonie de consécration des nations à l’Eternel comme nations éthiques,
                    est une requête du Dieu vivant, qui s’inscrit dans un plan global de l’Eternel
                    pour toutes les nations de la terre...
                    <a href="{{route('more-a-retenir2')}}"> <strong>Lire plus</strong></a>
                </p>
            </div>

            <div class="col-lg-6 text-center">
                <span class="fa fa-3x fa-file-text-o " style="color: #7cbeff;"></span>
                <br>
                <h4>CE QU'IL FAUT RETENIR</h4>
                <i><h6>Aide mémoire pour participer</h6></i>
                <hr>
                <p class="text-left" style="font-size:13pt;margin-right:15px">
                    L'Éternel appelle toutes les nations de la terre à s’établir dans sa
                    lumière afin de devenir des nations éthiques. Il appelle les femmes et
                    les hommes de toutes les nations...
                    <a href="{{route('more-a-retenir')}}"> <strong>Lire plus</strong></a>
                </p>
            </div>
        </div>

    </div>

    <!-- Container en block  -->
    <div class="container white-container   py-4">

        <div class="row">
            <div class="col-lg-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"style="margin-top:5px">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/compo de visuels.jpg" alt="First slide" height="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/FEMME DE FOI  DISF OK.jpg" alt="Second slide" height="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/jeunes et repentance.jpg" alt="Third slide" height="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/repentance familles fr.jpg" alt="Third slide" height="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/repentance jeunes nations.png" alt="Third slide" height="600">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/repentez vous leaders.jpg" alt="Third slide" height="600">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Container en block  -->
    <div class="container white-container  ">

        <div class="row">
            <div class="col-md-6 pt-3" >
                <div class="text-center">
                    <img src="img/icogroupe.png" alt=""  height="60" width="60">
                    <br>
                    <h2 style="font-size:17pt">LES COMMUNAUTÉS APPELÉES</h2>
                    <h6><i>Les groupes avec lesquels l’éternel bâtit des nations éthiques</i></h6>
                            <hr>
                            <div class="card-img">
                                <p style="text-align:left;margin-left:15px">
                                    Les femmes - Les serviteurs de Dieu - Les familles  - Les jeunes   - Les leaders
                                    <a href="{{route('more-a-retenir3')}}"> <strong>Lire plus</strong></a>
                                </p>
                            </div>
                </div>
            </div>

            <div class="col-md-6 p-0"  >
                <div class="card-img">
                    <img src="img/ethique.png" alt="kokoko" height="419" width="100%">
                </div>
            </div>
        </div>

    </div>

    <!-- Container en block  -->
    <div class="container white-container  ">

        <div class="row">
            <div class="col-md-12 p-0" >
                <img src="img/visuel DISF révisé.png" alt="" height="470" width="100%" >
            </div>
        </div>

    </div>

    <!-- Container en block  -->
    <div class="container white-container  ">

        <div class="row">
            <div class="col-md-12 pt-5 text-center" >
                <div style="margin-bottom:50px">
                    <img src="img/icone participation copie.png" alt="" >
                    <h2 style="margin-top:20px;font-size:18pt">PARTICIPER AU PLAN DE L’ÉTERNEL</h2>
                    <h6><i>Un ensemble d'informations pour faciliter votre implication</i></h6>
                    <br>
                    <i class="fa fa-arrow-circle-down fa-2x"></i>
                </div>
            </div>
        </div>

        <div class="row pt-3 pb-5 text-center px-4">
            <div class="col-lg-3 py-2">
                <a href="{{route('ceremoniSubscribe')}}">
                    <button class="btn btn-outline-info">Prendre part à la cérémonie</button>
                </a>
            </div>

            <div class="col-lg-3 py-2">
                <a href="{{route('comitySubscribe')}}">
                    <button class="btn btn-outline-info">Participer à la préparation</button>
                </a>
            </div>

            <div class="col-lg-3 py-2">
                <a href="{{route('createCommity')}}">
                    <button class="btn btn-outline-info">Organiser des activités</button>
                </a>
            </div>
            <div class="col-lg-3 py-2">
                <a href="{{ route('participer') }}" >
                    <button class="btn btn-outline-info">Participer au débat</button>
                </a>
            </div>
        </div>

    </div>


@endsection
