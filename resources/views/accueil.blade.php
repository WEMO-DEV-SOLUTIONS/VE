@extends('layout/appLayout')
@section('content')
    <br>
  <div class="click-closed"></div>

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b" >
    <div class="container" >
        <div class="sharethis-inline-share-buttons"></div>
      <div class="row"  >
        <div class="col-sm-12" >
            <br >
                <div class="col-sm-12" style="margin-left:-15px" >
                  <br>
                  <br>
                  <br>
                  <br>



                  <div   class="bg-video"  style="background-color:#ffffff;width: 1140px;margin-top:10px">
                    <h1 class="title" >

                      <div class="pull-left" ><img src="img/logo.png" alt="" height="200px" width="230px"
                         style="margin-top:7px">
                      </div>

                    <strong >
                        <center style="margin-top:-149px;padding-top:20px;padding-bottom:8px;"> Cérémonie de consécration des nations
                            <br> A  L'ETERNEL <br> <em style="font-size:18pt" >comme  nations éthiques - Cameroon 2019</em>  </center>
                          </h1>
                    </strong>
                  </div>
                </div>
              </div>
              <br>
        </div>



        <div class="bg-video" style="background-color:#b3a2a2;">
          <video src="video/video.mp4" height="450" width="1000" style="margin-left: 80px;"  controls ></video>
        </div>
      <a href="https://nationspourleternel.com/home?status=www.valeurseternel.org VE"> <i class="fa fa-share"></i></a>

        <div class="row" style="background-color:#ffffff;margin-top:5px;height:420px">
          <div class="col-lg-6"  style="padding-top:40px">
            <center><img src="img/icone colombe copie.png" alt=""  height="57" width="80"></center>
            <br>
            <center><h4>L'APPEL DE L’ÉTERNEL</h4></center>
            <center><i><h6>Comprendre ce plan de Dieu</h6></i></center>
            <hr>
            <p style="font-size:13pt;margin-left:15px" >
              La cérémonie de consécration des nations à l’Eternel comme nations éthiques,
                est une requête du Dieu vivant, qui s’inscrit dans un plan global de l’Eternel
                pour toutes les nations de la terre...
                <a href="{{route('more-a-retenir2')}}"> <strong>Lire plus</strong></a>
            </p>
          </div>

          <div class="col-lg-6 " style="padding-top:40px;">
            <center><span class="fa fa-3x fa-file-text-o " style="color: #7cbeff;"></span></center>
            <br>
            <center ><h4>CE QU'IL FAUT RETENIR</h4></center>
            <center><i><h6>Aide mémoire pour participer</h6></i></center>
            <hr>
            <p style="font-size:13pt;margin-right:15px">
                L'Éternel appelle toutes les nations de la terre à s’établir dans sa
                lumière afin de devenir des nations éthiques. Il appelle les femmes et
                  les hommes de toutes les nations...
                  <a href="{{route('more-a-retenir')}}"> <strong>Lire plus</strong></a>
                </p>
          </div>

        </div>

      <div class="row" style="margin-top:-55px">
        <div class="card-img" >
            <br>
            <br>
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


  <section class="section-agents section-t8" style="background-color:white;margin-top:5px; width:1140px;margin-left:-15px;height:420px">
    <div class="container">
      <div class="row" >
        <div class="col-md-6" style="margin-top:-80px">
          <div>
            <center><img src="img/icogroupe.png" alt=""  height="60" width="60"></center>
            <br>
            <center > <h2 style="font-size:17pt">LES COMMUNAUTÉS APPELÉES</h2></center>
            <center> <h6><i>Les groupes avec lesquels l’éternel bâtit des nations éthiques</i></h6><center>
            <hr>
            <div class="card-img">
              <p style="text-align:left;margin-left:15px">
              Les femmes - Les serviteurs de Dieu - Les familles  - Les jeunes   - Les leaders
                <a href="{{route('more-a-retenir3')}}"> <strong>Lire plus</strong></a>
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-6"  style="margin-top:-127px">
            <div class="card-img">
              <img src="img/qu'est ce nation éthique.png" alt="" height="419" width="553">
            </div>
        </div>

      </div>
    </div>
  </section>


  <div class="card-img" style="background-color:#ffffff; width:1136px;margin-left:-15px; margin-top:5px;margin-bottom:5px">

    <img src="img/visuel DISF révisé.png" alt="" height="470" width="1138" style="margin-top:10px">



  </div>

  <div  style="background-color:#ffffff;padding-left:50px;height:420px; width:1138px;padding-top:50px;margin-left:-15px;">

    <div style="margin-bottom:50px">
        <center><img src="img/icone participation copie.png" alt="" ></center>
          <center>
            <h2 style="margin-top:20px;font-size:18pt">PARTICIPER AU PLAN DE L’ÉTERNEL</h2>
            <h6><i>Un ensemble d'informations pour faciliter votre implication</i></h6>
          <br>
          <i class="fa fa-arrow-circle-down fa-2x"></i>
          </center>
    </div>

      <strong style=""><a href="{{route('ceremoniSubscribe')}}"><button class="btn btn-outline-info">Prendre part à la cérémonie</button></a></strong>

      <strong style="margin-left:100px"><a href="{{route('comitySubscribe')}}"><button class="btn btn-outline-info">Participer à la préparation</button></a></strong>

      <strong style="margin-left:100px"><a href="{{route('createCommity')}}"><button class="btn btn-outline-info">Organiser des activités</button></a></strong>

      <strong style="margin-left:100px">
        <a href="{{ route('participer') }}" style="margin-right:-110px"><button class="btn btn-outline-info">Participer au débat</button>   </a>
      </strong>

  </div>
    </div>

  </section>
  @endsection
