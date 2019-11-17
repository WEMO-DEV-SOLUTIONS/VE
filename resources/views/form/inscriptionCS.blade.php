@extends('layout/appLayout')

@section('content')


  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <br>
  <br>
  <br>
  <br>  
  <br>  
  <br>
  <section class="blog_area single-post-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 posts-list">
                <div class="single-post row">

                        @include('partials.error')

                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">
                            
                           
                        </div>
                    </div>
                   
                    <div class="col-lg-12">
                        <div class="quotes">

                            <img src="img/coeur de soleil.jpg" alt="" height="" width="550">

                                <div class="title-2" style="margin-top:1%">
                                        <center><h1 class="title-single">Inscription dans un comite de soutien</h1></center>  
                            </div>

                            <p>
                                L'inscription dans un comite soutien a deux objectifs: <br>
                                le premier est de preparer spirituellement le participant a la ceremonie de consecration. <br>
                                le deuxieme est de permettre aux participants de contribuer a la preparation materiel et ou financiere
                                de la ceremonie car c'est lui qui est au centre de la ceremonie,par consequent c'est lui qui la prepare. <br>
                                 
                                pour cela il suffit de: <br>

                                <span class="fa fa-hand-o-right" style="color: green"></span>   Remplir le formulaire ci dessous et m'inscrire dans un comité <br>
                                <span class="fa fa-hand-o-right" style="color: green"></span>   Apres l'inscription dans le comité de soutien

                                <a href="#previsionForm" data-toggle="modal" data-target="#previsionForm">
                                       <strong>cliquez ici</strong>  </a>   pour indiquer la valeur de votre participation financiere.
                               
                                
                            </p>

                        <form  style="margin-top:5%" method="post" action="{{route('inscriptionComite')}}">
                            @csrf
                                    <div class="form-row">
                                      <div class="form-group col-md-8">
                                        <label for="inputPassword4"> <strong>Adresse Mail</strong> </label>
                                        <input type="email" class="form-control" name="email" placeholder="votre adresse mail">
                                      </div>
                                    </div>

                                    <div id="infos-comite" class="col-lg-8">
                                            <span class="fa fa-arrow-circle-right"></span>  
<a  href="#infosComite"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="infosComite">
                                          Consulter les Informtions sur les comités et Choisissez celui qui vous correspond le mieux
                                        </a>

                                           <div id="infosComite" class="collapse">
                                                <ul>
                                                    @foreach($comites as $comite)
                                                    <li> <strong>Nom du comite </strong> : {{$comite->nom_comite}}</li>
                                                    <li> <strong>Type de comite</strong>  : {{$comite->categorie}}</li>
                                                    <li> <strong>Lieu de rencontre </strong> :{{$comite->Lieu}}</li>
                                                    <li> <strong>Heure de rencontre</strong>  :{{$comite->Heure}}</li>
                                                    <li> <strong>Jour de rencontre</strong>  :{{$comite->Jour_rencontre}}</li>
                                                    <li> <strong>Date de debut</strong>  :{{$comite->Date_debut}}</li>
                                                    <br>
                                                    @endforeach
                                                </ul>
                                            </div>
                                      </div>
                                      <br>
                                   
                                    <div class="form-row">
                                            <div class="form-group col-md-8">
                                                    <label for="inputState"> <strong>Choisissez le comite de soutien que vous voulez rejoindre</strong> </label>
                                                    <select name="comite" class="form-control">
                                                    
                                                        @foreach($comites as $comite)
                                                            <option  value="{{$comite->nom_comite}}">{{$comite->nom_comite}}</option>
                                                        @endforeach
                                                     
                                                    </select>
                                                  </div>
                                                  <br>
                                                  
                                      
                                    </div>

                                   
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">S'inscrire </button>
                                  </form>

                        </div>
                        
                    </div>
                   
                </div>
              

                                            
            </div>


            <div class="col-lg-6">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        
                        <div class="br"></div>
                    </aside>
                   
                    <aside class="single_sidebar_widget popular_post_widget">

                        <h3></h3>

                      <center> <h3 style="margin-left: 50px">C’EST QUOI UN COMITE DE SOUTIEN ?</h3></center> <br>
                    
                      C’est un groupe de personnes qui se mettent ensemble au Cameroun ou bien à l’étranger, pour préparer
                       spirituellement… et soutenir financièrement la réussite de la cérémonie de consécration du Cameroun 
                       et des nations à l’Eternel prévue à Yaoundé, Cameroun en cette fin d’année 2019. <br>
                       <br>
                        
                        <h4>D’OÙ VIENNENT LES MEMBRES DES COMITES DE SOUTIEN ? QUI SONT-ILS ? </h4> Ils viennent de toutes les
                         familles, ils représentent tous les serviteurs de Dieu, tous les leaders, tous les jeunes et toutes 
                         les femmes, qui ont entendu « l’appel » que l’Eternel leur a lancé dans son MESSAGE AUX NATIONS. 
                        Ils sont tous ceux et celles, qui veulent être « consacrés » par l’esprit de Dieu dès cette année 2019,
                         en vue d’être capables de bâtir la nation éthique1. <br>
                        Les membres des comités de soutien sont des personnes, qui se sont jointes ou inscrites dans un des
                         comités de leur choix existant physiquement au sein de leur ville, de leur lieu de résidence 
                         (ou en ont créé un, là où celui-ci n’existe pas). Ceci, afin de rencontrer d’autres personnes avec
                          lesquelles se préparer spirituellement, par la repentance et la purification à la cérémonie de 
                          consécration à l’Eternel et afin de mettre en commun leurs efforts, pour participer financièrement 
                          à l’organisation de l’événement.<br>
                       
                        <br>
                          <h4>QUI PEUT CRÉER UN COMITE DE SOUTIEN ? </h4>
                          <br>
                      
                          Toute personne qui a le désir de servir Dieu dans le cadre de la préparation, de l’organisation 
                          et de la tenue de cette cérémonie de consécration, ou qui désire être établi comme leader dans 
                          l’une des cinq catégories déjà citées, en lesquelles l’éternel a appelé ses enfants. <br>
                          Si elle s’est inscrite au préalable sur la page Facebook de l’événement, au sein de l’un des 
                          cinq groupes/ 5 catégories énumérées ci-dessus, il ne lui reste plus qu’à remplir le formulaire 
                          ci apres ou bien prendre contact avec la coordination de l’organisation, pour recevoir toutes 
                          les informations complémentaires utiles à son travail. <br>
                         
                     
                        <h4>OU PEUT-ON CRÉER UN COMITE DE SOUTIEN ?</h4> 
                        Il n’y a pas de lieu exigé pour la création d’un comité de soutien. Il doit simplement s’agir
                         d’un lieu de rencontre entre tous ceux qui participent ensemble à la préparation et à 
                         l’organisation de la cérémonie de consécration à cause de leurs liens ou parce qu’ils 
                         sont proches. <br>
                        <br>
                         <strong>
                             Contacts Infos de la coordination :
                        </strong> <br>
                         237 691 433 761 <br>
                        <span class="fa fa-whatsapp" style="color:green"></span> Whatsapp : 682 374 500 /
                         237 695 178 659
                     
                </aside>
                    </aside>
                    
                    
                   
                </div>
            </div>
        </div>
    </div>
    <br>
</section>








<div class="modal fade" id="previsionForm" tabindex="-1" role="dialog" aria-labelledby="previsionForm" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <center><h5 class="modal-title" id="previsionForm">Contribuer à l'organisation de la Ceremonie</h5></center> 
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form action="">

                            <div class="form-row">

                            <p>Choisissez le montant de votre participation</p> 
                     
               
                                    <div class="form-group col-lg-10">
                                            <label for="inputPassword4">Montant</label>
                                            <input type="tel" class="form-control" name="amount2" placeholder="le montant de votre participation">
                                          </div>
                            </div> 

                            <div class="form-row">
                                
                                    <div class="form-group col-lg-10">
                                            <label for="inputPassword4">Date <em>(la date avant ou à laquelle vous comptez effectuer le versement)</em></label> <br>
                                            <input type="date" class="form-control" name="datePay" placeholder="date de versement au plus tard">
                                          </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg btn-block">Envoyer </button>
                            
                  </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>






  
  @endsection