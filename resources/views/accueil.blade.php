@extends('layout/appLayout')
@section('content')

  <div class="click-closed"></div>

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container" style="background-color:#bec3c665  ;">
      <div class="row">
        <div class="col-sm-12">
            <br>
                <div class="col-sm-12">
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>



                  <div   class="bg-video">
                    <h1 class="title" >

                      <div class="pull-left" ><img src="img/logo.png" alt="" height="200px" width="230px"
                         style="margin-top:-10px
                        "> </div>

                    <strong>
                        <center style="background-color:#6969692d;margin-left: -15px;margin-right: -15px;margin-top:-149px">Cérémonie de consécration des nations
                            <br> A  L'ETERNEL <br> <em style="font-size:20pt">comme  nations éthiques - Cameroon 2019</em>  </center>  </h1>
                    </strong>
                  </div>
                </div>
              </div>
              <br>
        </div>



        <div class="bg-video" style="background-color:black;">
          <video src="video/video.mp4" height="450" width="1000" style="margin-left: 80px;"  controls ></video>
        </div>


        <div class="row" style="margin-top: 50px">
          <div class="col-lg-6">
            <center><img src="img/icone colombe copie.png" alt=""></span></center>
            <br>
            <center><h2>L'APPEL DE L’ÉTERNEL</h2></center>
            <center><i><h5>Comprendre ce plan de Dieu</h5></i></center>
            <hr>
            <p>
                La cérémonie de consécration des nations à l’Eternel comme nations éthiques,
                 est une requête du Dieu vivant, qui s’inscrit dans un plan global de l’Eternel
                 pour toutes les nations de la terre...
                 <a href="{{route('more-a-retenir2')}}"> <strong>Lire plus</strong></a>
              </p>
          </div>

          <div class="col-lg-6 pull-right" style="margin-top:-5px">
              <center><span class="fa fa-file-text-o fa-2x"  style="color:skyblue"></span></center>
              <br>
              <br>
              <center><h2>CE QU'IL FAUT RETENIR</h2></center>
              <center><i><h5>Aide mémoire pour participer</h5></i></center>
              <hr>
              <p>
                  L'Éternel appelle toutes les nations de la terre à s’établir dans sa
                  lumière afin de devenir des nations éthiques. Il appelle les femmes et
                   les hommes de toutes les nations...
                   <a href="{{route('more-a-retenir')}}"> <strong>Lire plus</strong></a>
                 </p>
            </div>

            <div class="card-img">
                <br>
                <br>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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


  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div>
              <center><img src="img/icogroupe.png" alt=""></center>
              <br>
              <center > <h2 >LES COMMUNAUTÉS APPELÉES</h2></center>
              <center> <h6><i>Les groupes avec lesquels l’éternel bâtit des nations éthiques</i></h6><center>
            <hr>
            <div class="card-img">
              <p>
                  Les familles  - Les jeunes   - Les leaders  - Les femmes
                  (dans LA DÉCENNIE D'IMPACT SPIRITUEL DES FEMMES)  - Les serviteurs de Dieu...
                 <a href=""> <strong>Lire plus</strong></a>
                </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
            <div class="card-img">
              <img src="img/qu'est ce nation éthique.png" alt="" height="430" width="553">
            </div>
        </div>

      </div>
  </section>
  <br>
  <br>
   <br>
  <div class="card-img">
    <br>
      <img src="img/visuel décennie.jpg" alt="" height="470" width="1140" style="margin-left:-15px">
    </div>
    <br>

              <center><img src="img/icone participation copie.png" alt=""></center>
              <center><h2 style="margin-top:70px">PARTICIPER AU PLAN DE L’ÉTERNEL</h2>
              <h6><i>Un ensemble d'informations pour faciliter votre implication</i></h6>
              <hr>
              <span class="fa fa-arrow-circle-down fa-3x"></span>
            </center>


</div>


    <section class="section-agents section-t8" style="margin-top:-60px;margin-left:70px">

      <div class="row" style="margin-right: -58px; margin-left: 18px;">

        <div class="col-sm-3 " style="margin-bottom:25px">
            <div class="card-img-d">
               <strong><a href="{{route('ceremoniSubscribe')}}"><button class="btn btn-outline-dark">Prendre part à la cérémonie </button></a></strong>
            </div>
      </div>

        <div class="col-sm-3" style="margin-bottom:25px">
          <div class="card-img-d">
              <strong><a href="{{route('comitySubscribe')}}"><button class="btn btn-outline-dark">Participer à la préparation </button></a></strong>
            </div>
          </div>

        <div class="col-sm-3">
            <div class="card-img-d">
             <strong><a href="{{route('createCommity')}}"><button class="btn btn-outline-dark">Organiser des activités de soutien </button></a></strong>
            </div>
        </div>

        <div class="col-sm-3" style="margin-bottom:25px;">
            <div class="card-img-d">
            <strong><a href="#" style="margin-right:-110px"><button class="btn btn-outline-dark">Participer au débat</button>   </a>
             </strong>
          </div>
        </div>

      </div>

  </section>

  @endsection
