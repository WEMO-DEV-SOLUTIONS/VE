{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ----------> --}}

@extends('layout/appLayout')

@section('content') 

<div class="">
  <div class="container">
      <br>
      <br>
   <center><h2>L'APPEL DE L’ÉTERNEL</h2></center> 
   <br>
    <!--first section-->
    <div class="row align-items-center how-it-works d-flex">
      <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">1</div>
      </div>
      <div class="col-6">
        <h3>Comprendre ce plan de l’Éternel</h3>
                <p>La cérémonie de consécration des nations à l’Eternel comme nations éthiques, 
                            est une requête du Dieu vivant, qui s’inscrit dans un plan global de l’Eternel 
                            pour toutes les nations de la terre. 
                            <a  href="#collapse1"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse1">
                                   <strong>Lire plus</strong> 
                                 </a>
                            <div class="collapse" id="collapse1">
                                   Ce plan a commencé à être exécuté de diverses
                                   manières en différents lieux du globe. Il a été mis en œuvre,
                                  en plusieurs étapes précédentes successives au Cameroun, depuis de nombreuses années.
                                  <a  href="#collapse1"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse1">
                       Lire plus
                    </a>
                            </div>
                     </p>
      </div>
    </div>
    <!--path between 1-2-->
    <div class="row timeline">
      <div class="col-2">
        <div class="corner top-right"></div>
      </div>
      <div class="col-8">
        <hr/>
      </div>
      <div class="col-2">
        <div class="corner left-bottom"></div>
      </div>
    </div>
    <!--second section-->
    <div class="row align-items-center justify-content-end how-it-works d-flex">
      <div class="col-6 text-right">
        <h5>Using Bootstrap</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
      </div>
      <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">2</div>
      </div>
    </div>
    <!--path between 2-3-->
    <div class="row timeline">
      <div class="col-2">
        <div class="corner right-bottom"></div>
      </div>
      <div class="col-8">
        <hr/>
      </div>
      <div class="col-2">
        <div class="corner top-left"></div>
      </div>
    </div>
    <!--third section-->
    <div class="row align-items-center how-it-works d-flex">
      <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">3</div>
      </div>
      <div class="col-6">
        <h5>Now with Pug and Sass</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
      </div>
    </div>

    <div class="row timeline">
            <div class="col-2">
              <div class="corner top-right"></div>
            </div>
            <div class="col-8">
              <hr/>
            </div>
            <div class="col-2">
              <div class="corner left-bottom"></div>
            </div>
          </div>

          <div class="row align-items-center justify-content-end how-it-works d-flex">
                <div class="col-6 text-right">
                  <h5>Using Bootstrap</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
                </div>
                <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                  <div class="circle font-weight-bold">4</div>
                </div>
              </div>


    
  </div>
</div>




@endsection