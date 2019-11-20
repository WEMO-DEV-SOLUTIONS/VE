@extends('layout/appLayout')
@section('content')

  <div class="click-closed"></div>
  
  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
            <br>
                <div class="col-sm-12">
                  <br>
                  <br>
                  <br>
                
                  <div class="title-box-d">
                    <h3 class="title"> 

                      <div class="pull-left"><img src="img/logo.png" alt="" height="210px" width="210px"
                         style="margin-top:-30px"> </div>

                    <center>Cérémonie de consécration des nations 
                      A  L'ETERNEL <br> comme  nations éthiques -  <em style="font-size:20pt"> Cameroon 2019</em>  </center>  </h3>
                  </div>
                </div>
              </div>
        </div>
        
        <div class="bg-video">
          <video src="video/video.mp4" height="450" width="1300"  style="margin-left: -80px"  controls autoplay></video>
        </div>
    
        
        <div class="row" style="margin-top: 50px">
          <div class="col-lg-6">
            <center><span class="fa fa-twitter fa-4x" style="color:skyblue"></span></center>
            <center><h1>L'APPEL DE L’ÉTERNEL</h1></center> 
            <center><i><h5>Comprendre ce plan de Dieu</h5></i></center> 
            <hr>
            <p>
                La cérémonie de consécration des nations à l’Eternel comme nations éthiques, 
                 est une requête du Dieu vivant, qui s’inscrit dans un plan global de l’Eternel 
                 pour toutes les nations de la terre...
                 <a href=""> <strong>Lire plus</strong></a>
              </p>
          </div>

          <div class="col-lg-6 pull-right">
              <center><span class="fa fa-file-text-o fa-4x"  style="color:skyblue"></span></center>
              <center><h1>CE QU'IL FAUT RETENIR</h1></center> 
              <center><i><h5>Aide mémoire pour participer</h5></i></center>
              <hr>
              <p>
                  L'Éternel appelle toutes les nations de la terre à s’établir dans sa 
                  lumière afin de devenir des nations éthiques. Il appelle les femmes et
                   les hommes de toutes les nations...
                   <a href=""> <strong>Lire plus</strong></a>
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
                        <img class="d-block w-100" src="img/slide1.jpg" alt="First slide" height="400">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide" height="400">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/jeunes.jpg" alt="Third slide" height="400">
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
              <center><span class="fa fa-users fa-3x"  style="color:skyblue"></span></center>
              <br>
            <h1>LES COMMUNAUTÉS APPELÉES</h1>
            <h5><i>Les groupes avec lesquels l’éternel bâtit des nations éthiques</i></h5>
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
              <img src="img/repentance jeunes nations.png" alt="" height="400">
            </div>
        </div>
       
      </div>
  </section> 

  <div class="card-img">
    <br>
      <img src="img/visuel décennie.jpg" alt="" height="450" width="1140">
    </div>


              <center><h1 style="margin-top:70px">PARTICIPER AU PLAN DE L’ÉTERNEL</h1>
              <h5><i>Un ensemble d'informations pour faciliter votre implication</i></h5>
              <hr>
              <span class="fa fa-arrow-circle-down fa-4x"></span>
            </center>
        
      
</div>
    
    
    <section class="section-agents section-t8" style="margin-top:-50px">
   
      <div class="row">
      
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
            <strong><a href="" style="margin-right:-110px"><button class="btn btn-outline-dark">Participer au débat</button>   </a>
             </strong> 
          </div>
        </div>
       
      </div>
     
  </section>

  @endsection