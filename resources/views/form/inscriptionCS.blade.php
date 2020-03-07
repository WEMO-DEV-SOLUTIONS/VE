 @extends('layout/appLayout')

@section('content')
  <br>
   <section class="blog_area single-post-area section_gap" style="background-color:#d8dbdd;margin-top:10px">
    <div class="container" style="background-color:#bec3c665  ;">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">

                        @include('partials.error')

                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">


                        </div>
                    </div>

                    <div class="col-lg-12" style="padding-left: 0px; padding-right: 18px;">
                        <div class="quotes">
                            <div class="title-2" style=" margin-left: -1px; background-color:#2c8bea; height: 40px; font-color:white">
                                <center><h2 class="title-single" style="color:white">Inscrivez-vous dans un comité de soutien</h2></center>
                            </div>
                        <form class="card container" style="margin-top: 2%" method="post" action="{{route('inscriptionComite')}}">
                            @csrf
                                    <div class="form-row" style="margin-top: 2%;">
                                      <div class="form-group col-md-8">
                                        <label for="inputPassword4" style="margin-top: 5px;"> <strong>Adresse Mail</strong> </label>
                                        <input type="email" class="form-control" name="email" placeholder="Email d'inscription à la céremonie">
                                      </div>
                                    </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="inputState"> <strong>Choisissez le comité de soutien que vous voulez rejoindre</strong> </label>
                                    <select name="comite" class="form-control">

                                        @foreach($comites as $comite)
                                            <option  value="{{$comite->nom_comite}}">{{$comite->nom_comite}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <br>


                            </div>
                                    <div class="font-weight-bold " style="color: #31baf0ee">
                                        Consultez les informations suivantes sur les comités de soutien disponibles et choisissez le vôtre :
                                    </div>

                                    <div id="infos-comite" class="col-lg-8">
                                            <span class="fa fa-arrow-circle-right"></span>  
                                        <div>
                                            <li> <strong>Nom du comite </strong> : {{$comites[1]->nom_comite}}</li>
                                            <li> <strong>Type de comite</strong>  : {{$comites[1]->categorie}}</li>
                                            <li> <strong>Lieu de rencontre </strong> :{{$comites[1]->lieu}}</li>
                                            <li> <strong>Heure de rencontre</strong>  :{{$comites[1]->heure}}</li>
                                            <li> <strong>Jour de rencontre</strong>  :{{$comites[1]->rencontre}}</li>
                                            <li> <strong>Date de debut</strong>  :{{$comites[1]->date_debut}}</li>
                                            <br>
                                        </div>

                                        <a  href="#infosComite"  class="text-primary" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="infosComite">
                                           Voir plus
                                          </a>

                                           <div id="infosComite" class="collapse">
                                                <ul class="justify-content-around">
                                                    @foreach($comites as $comite)
                                                    <li> <strong>Nom du comite </strong> : {{$comite->nom_comite}}</li>
                                                    <li> <strong>Type de comite</strong>  : {{$comite->categorie}}</li>
                                                    <li> <strong>Lieu de rencontre </strong> :{{$comite->lieu}}</li>
                                                    <li> <strong>Heure de rencontre</strong>  :{{$comite->heure}}</li>
                                                    <li> <strong>Jour de rencontre</strong>  :{{$comite->rencontre}}</li>
                                                    <li> <strong>Date de debut</strong>  :{{$comite->date_debut}}</li>
                                                    <br>
                                                    @endforeach
                                                </ul>
                                            </div>
                                      </div>
                                      <br>
                                    <br>
                                    <button type="submit" style="font-size: 14pt; height: 41px;" class="btn btn-primary btn-md mb-2">S'inscrire </button>
                                  </form>

                        </div>
                        
                    </div>
                   
                </div>
              

                                            
            </div>
          <div  class="col-lg-2">
              <div class="row col-lg-2  container "  style="padding-left: 8px;">
                 <aside class="single_sidebar_widget search_widget">

                     <div class="card" style="border: none;width: 23.5rem;">
                         <div class="card-header"   style="background-color:#2c8bea; height: 39px">
                             <br>
                         </div>
                         <div style="text-align: center;">
                             <center>
                                 <img src="{{ asset('img/logo.png') }}" alt="" width="50" height="50">
                                 <p><b class="text-primary">Cérémonie de  Consécration  des nations <br><spam class="h4"><b>A L’ETERNEL</b></spam> <br>
                                         comme nations éthiques</b></p>
                             </center>
                         </div>

                     </div>
                 </aside>
              </div>
               <div class="row col-lg-2 mt-4  container"  style="padding-left: 5px;">
                  <div class="blog_right_sidebar bg-white">

                      <aside class="single_sidebar_widget popular_post_widget " style="font-size: 14px">

                          <img src="{{ asset('img/comités de soutien.png') }}" alt="" height="200" width="380" style="margin-left: -1px;">
                          <a  href="#collapse1"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse1">
                              <strong> <center> <h5 class="mt-4" style="padding-left: auto;">
                        <b>INFORMATIONS D'INSCRIPTION DANS UN COMITE DE SOUTIEN</b></h5></center> </strong>
                          </a>
                          <div id="collapse1" class="collapse container">
                              C’est un groupe de personnes qui se mettent ensemble au Cameroun ou bien à l’étranger,
                              pour préparer spirituellement… et soutenir financièrement la réussite de la cérémonie de
                              consécration du Cameroun et des nations à l’Éternel prévue à Yaoundé <br>

                          </div>
                          <div style="padding-left: 12px; padding-right: 12px;">
                          <a  href="#collapse2"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse2">
                              <strong>  <h4 style="font-size: 14pt; ">Pourquoi s’inscrire dans un comité de soutien ? </h4>
                                  </strong>
                          </a>

                          <div id="collapse2" class="collapse container">
                              Pour se  préparer spirituellement  à la cérémonie de consécration par la repentance et la purification avec d’autres personnes de son choix.
                              Pour  participer à la préparation matérielle et financière de la cérémonie de consécration des nations à l’Eternel comme nations éthiques .

                              <br>
                          </div>
                          <a  href="#collapse3"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse3">
                              <strong>  <h4 style="font-size: 14pt; ">En quoi consiste la préparation spirituelle ? </h4>
                                  </strong>
                          </a>

                          <div id="collapse3" class="collapse container">
                              Elle consiste à se préparer  spirituellement à entrer dans l’accomplissement du plan
                              de l’Eternel pour des nations selon son cœur, selon la catégorie dans laquelle on a choisi
                              d’y participer. Cette préparation se fera, sous la direction de la coordination de la cérémonie
                              et de tous les leaders spirituels participant à cette organisation , attachés à l’enseignement du chemin vers
                              L’Eternel, par la repentance, la purification, la conversion et la consécration.
                              <br>
                          </div>
                          <a  href="#collapse4"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse4">
                              <strong> <h4 style="font-size: 14pt; ">  Où peut-on créer un comité de soutien ? </h4>
                                  </strong>
                          </a>
                          <div id="collapse4" class="collapse container">
                              Il n’y a pas de lieu exigé pour la création d’un comité de soutien. Il doit simplement s’agir
                              d’un lieu de rencontre entre tous ceux qui participent ensemble à la préparation et à
                              l’organisation de la cérémonie de consécration à cause de leurs liens ou parce qu’ils
                              sont proches. <br>
                          </div>
                          <a  href="#collapse5"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse4">
                              <strong> <h4 style="font-size: 14pt; "> En quoi consiste le soutien financier ?</h4>
                                  </strong>
                          </a>
                          <div id="collapse5" class="collapse container">
                              Les femmes et les hommes,  assemblés au sein de comités, sont appelés à unir leurs
                              forces pour offrir  comme sacrifice  à Dieu,  une célébration digne de sa  splendeur
                              et de sa gloire. Ceci  à travers  leurs ressources et leurs biens qu’ils apporteront
                              en offrande, pour  l’organisation de la cérémonie de leur consécration à l’Eternel.
                              Bien vouloir consulter la feuille de soutien financier(<a href="{{ route('soutien') }}" class="font-weight-bold text-primary">soutien financier</a>),
                              puis choisir un type de soutien financier pour valider son inscription dans un comité de soutien.
                              <br>
                          </div>
                          <a  href="#collapse6"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse4">
                              <strong> <h4 style="font-size: 14pt; "> D’où viennent les membres des comités de soutien ? Qui sont-ils ? </h4>
                                  </strong>
                          </a>
                          <div id="collapse6" class="collapse container">
                              Ils viennent de toutes les familles, ils représentent tous les serviteurs de Dieu,
                              tous les leaders, tous les jeunes et toutes les femmes, qui ont entendu « l’appel » que
                              l’Eternel  leur a lancé dans son MESSAGE AUX NATIONS. Ils sont tous ceux et celles, qui
                              veulent être « consacrés » par l’esprit de Dieu  au cours de la cérémonie de consécration,
                              en vue d’être capables de bâtir la nation éthique.
                              <br>
                          </div>
                          <a  href="#collapse7"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse4">
                              <strong> <h4 style="font-size: 14pt; "> Qui peut créer un comité de soutien ? </h4>
                                  </strong>
                          </a>
                          <div id="collapse7" class="collapse container">
                              Toute personne qui  a le désir de servir Dieu dans le cadre de la préparation,
                              de l’organisation et de la tenue de cette cérémonie de consécration,
                              ou qui désire être établi comme leader dans l’une des cinq catégories déjà citées,
                              en lesquelles l’Eternel a appelé ses enfants.
                              Cette personne créera un comité soit <span title="Un comité  de soutien physique est un lieu physique au sein duquel  ceux qui veulent participer à cet appel de l’Eternel  se rassemblent pour se préparer spirituellement  et participer ensemble à l’organisation matérielle et financière de la  cérémonie de consécration."><b class="text-primary">physique</b></span>
                              soit <span title="Un comité de soutien virtuel est un lieu immatériel (groupe watsapp, internet) mis en place par un leader qui l’a créé, ou par l’administration de la cérémonie, afin de  rassembler tous ceux et celles qui ont facilement accès à internet  en vue de préparer spirituellement   et de participer ensemble à l’organisation matérielle et financière de la  cérémonie de consécration. ">
                                  <b class="text-primary">virtuel</b></span> .
                              Un forum est disponible pour des échanges entre les  leaders  de comités et  la coordination de la cérémonie
                              ;ainsi que des informations  et une assistance complémentaires après la création du comité.
                              <br>
                          </div>
                          </div>
                      </aside>
                  </div>
              </div>
          </div>

            <div class="col-lg-6 card container">


            </div>
        </div>
    </div>
    <br>
</section>
  @endsection
