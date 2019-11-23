@extends('layout/appLayout')

@section('content')


  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
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

                            

                                <div class="title-2" style="margin-top:1%">
                                        <center><h1 class="title-single">Inscription dans un comite de soutien</h1></center>  
                            </div>

                            <p>
                                L'inscription dans un comite soutien a deux objectifs: <br>
                                1 -	La préparation spirituelle du participant à la cérémonie de consécration <br>
                                2 -	La participation de chaque personne s’engageant à se soumettre au plan de Dieu pour des nations éthiques , 
                                à la préparation matérielle et financière de la cérémonie. <br>

                                Celui/celle qui prend la décision de participer à un comité de soutien est appelé 
                                à compléter les informations ci-dessous pour son inscription.
<!--                                  
                                pour cela il suffit de: <br>

                                <span class="fa fa-hand-o-right" style="color: green"></span>   Remplir le formulaire ci dessous et s'inscrire dans un comité <br>
                                -->
                                 
                                Une fois cela fait, bien vouloir remplir le formulaire de soutien financier 
                                <a href="{{route('soutienFinancier')}}">
                                       <strong>en cliquant ici</strong>  </a>  
                               
                                
                            </p>

                        <form  style="margin-top:5%" method="post" action="{{route('inscriptionComite')}}">
                            @csrf
                                    <div class="form-row">
                                      <div class="form-group col-md-8">
                                        <label for="inputPassword4"> <strong>Adresse Mail</strong> </label>
                                        <input type="email" class="form-control" name="email" placeholder="votre adresse mail">
                                      </div>
                                    </div>
                                    
                                    <div>
                                        Consulter les Informtions sur les comités et Choisissez celui qui vous correspond le mieux
                                    </div>

                                    <div id="infos-comite" class="col-lg-8">
                                            <span class="fa fa-arrow-circle-right"></span>  
                                        <div>
                                            <li> <strong>Nom du comite </strong> : {{$comites[2]->nom_comite}}</li>
                                            <li> <strong>Type de comite</strong>  : {{$comites[2]->categorie}}</li>
                                            <li> <strong>Lieu de rencontre </strong> :{{$comites[2]->Lieu}}</li>
                                            <li> <strong>Heure de rencontre</strong>  :{{$comites[2]->Heure}}</li>
                                            <li> <strong>Jour de rencontre</strong>  :{{$comites[2]->Jour_rencontre}}</li>
                                            <li> <strong>Date de debut</strong>  :{{$comites[2]->Date_debut}}</li>
                                            <br>
                                        </div>

                                        <a  href="#infosComite"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="infosComite">
                                           Voir plus
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
                        
                            <div class="card" style="border: none;width: 39rem;">
                                    <div class="card-header"   style="background-color:#31baf0ee">
                                     <br>
                                    </div>
                                    <div class="card-body">
                                     <center>
                                        <p>CEREMONIE DE CONSECRATION  <br> DES NATIONS A L’ETERNEL <br>
                                          COMME NATIONS ETHIQUES</p>
                                     </center>
                                    </div>
                                  </div>
                    </aside>
                   
                    <aside class="single_sidebar_widget popular_post_widget">

                            <img src="img/comités de soutien.png" alt="" height="300" width="650">

                     
                        <a  href="#collapse1"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse1">
                            <strong> <center> <h3 style="margin-left: 50px">
                                C’EST QUOI UN COMITE DE SOUTIEN ?</h3></center> <br></strong> 
                        </a>
                    
                        <div id="collapse1" class="collapse">
                            C’est un groupe de personnes qui se mettent ensemble au Cameroun ou bien à l’étranger, pour préparer
                            spirituellement… et soutenir financièrement la réussite de la cérémonie de consécration du Cameroun 
                            et des nations à l’Eternel prévue à Yaoundé, Cameroun en cette fin d’année 2019. <br>
                            <br>
                             
                        </div>
                     
                        
                        <a  href="#collapse2"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse2">
                            <strong> <center> <h4>D’OÙ VIENNENT LES MEMBRES DES COMITES DE SOUTIEN ? QUI SONT-ILS ? </center></h4>
                                <br></strong> 
                        </a>

                        <div id="collapse2" class="collapse">
                            Ils viennent de toutes les familles, ils représentent tous les 
                            serviteurs de Dieu, tous les leaders, tous les jeunes et toutes
                             les femmes, qui ont entendu « l’appel » que l’Eternel  leur a 
                             lancé dans son MESSAGE AUX NATIONS. Ils sont tous ceux et celles,
                            qui  veulent être « consacrés » par l’esprit de Dieu dès cette 
                            année 2019, en vue d’être capables de bâtir la nation éthique .
                            ( remplacer la note de bas de page par un lin donnant la même 
                            information)
                            Les membres des comités de soutien sont des personnes, qui
                            se sont  jointes  ou inscrites dans un des comités de leur
                            choix existant  physiquement au sein de leur ville,  de leur
                            lieu de résidence (ou en  ont créé un, là où celui-ci n’existe pas).
                            Ceci, afin de rencontrer d’autres personnes avec lesquelles 
                            se préparer spirituellement, par la repentance et la purification,
                            à la  cérémonie de consécration à l’Eternel  et afin de mettre en
                            commun leurs efforts, pour participer financièrement à 
                            l’organisation de l’événement.
<br>
                        </div>
                         
                       
                        <br>
                          
                          <a  href="#collapse3"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse3">
                            <strong> <center> <h4>QUI PEUT CRÉER UN COMITE DE SOUTIEN ? </center> </h4>
                                <br></strong> 
                        </a>
                          
                          <div id="collapse3" class="collapse">
                            Toute personne qui  a le désir de servir Dieu dans le cadre de 
                            la préparation, de l’organisation et de la tenue de cette cérémonie
                            de consécration, ou qui désire être établi comme leader dans l’une
                            des cinq catégories déjà citées, en lesquelles l’Eternel a appelé 
                            ses enfants.  Cette personne créera un comité soit physique soit 
                            virtuel (mettre un lien expliquant la différence)
                            Elle  doit s’inscrire au préalable sur la page Facebook de l’événement, 
                            au sein de l’un des cinq groupes/ 5 catégories prévues (lien à mettre ),
                             pour participer à la discussion et communiquer avec les autres 
                             participants sur ses actions. Après, il ne lui reste plus qu’à  
                             actionner le bouton  « CREATION D’UN COMITE DE SOUTIEN »  
                             et à suivre les indications.
                                 <br>
                          </div>
                          
                                   <br>         
                        
                        <a  href="#collapse4"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse4">
                            <strong> <h4> <center> OU PEUT-ON CRÉER UN COMITE DE SOUTIEN ? </center></h4> 
                                <br></strong> 
                        </a>
                        <div id="collapse4" class="collapse">
                            Il n’y a pas de lieu exigé pour la création d’un comité de soutien. Il doit simplement s’agir
                         d’un lieu de rencontre entre tous ceux qui participent ensemble à la préparation et à 
                         l’organisation de la cérémonie de consécration à cause de leurs liens ou parce qu’ils 
                         sont proches. <br>
                        <br>
                        </div>
                        
                        <center>
                         <strong>
                             Contacts Infos de la coordination :
                        </strong> <br>
                         237 691 433 761 <br>
                        <span class="fa fa-whatsapp" style="color:green"></span> Whatsapp : 682 374 500 /
                         237 695 178 659
                        </center>
                     
                </aside>
                    </aside>
                    
                    
                   
                </div>
            </div>
        </div>
    </div>
    <br>
</section>











  
  @endsection