@extends('layout/appLayout')

@section('content')


  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <br>
  <br>
 
  <section class="blog_area single-post-area section_gap">
    <div class="container" style="background-color:#bec3c665  ;">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">

                  @include('partials.error')

                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">
                            
                           
                        </div>
                    </div>
                   
                    <div class="col-lg-12">
                        <div class="quotes" >
                           
                                <div class="title-2" style="margin-top:-2px">
                                        <center><h1 class="title-single">Inscrivez vous a la ceremonie de consecration</h1></center>  
                            </div>

                            <form  style="margin-top:5%" method="post" action="{{route('inscriptionConsecration')}}" >
                              @csrf
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputEmail4">Nom</label>
                                        <input type="text" class="form-control" name="nom" placeholder="votre nom">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Prenom</label>
                                        <input type="tect" class="form-control" name="prenom" placeholder="votre prenom">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputAddress">E-mail</label>
                                      <input type="text" class="form-control" name="email" placeholder="votre adresse mail">
                                    </div>
                                    
                                    <div class="form-row">
                                            <div class="col">
                                                    <label for="inputState"></label>
                                                    <select name="indicatif" class="form-control">
                                                      <option selected>+237</option>
                                                      <option>+1</option>
                                                    </select>
                                                  </div>
                                            <div class="col">
                                                    <label for="inputState">Numero de telephone</label>
                                              <input type="text" class="form-control" placeholder="votre numero de telephone" name="phone">
                                            </div>
                                          </div>
                                    <div class="form-row">
                                            <div class="form-group col-md-4">
                                                    <label for="inputState">Pays</label>
                                                    <select name="pays" class="form-control">
                                                      <option selected>Choose...</option>
                                                      <option>...</option>
                                                    </select>
                                                  </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputCity">Ville</label>
                                        <input type="text" class="form-control" name="city" placeholder="votre ville de residence">
                                      </div>
                                      
                                      <div class="form-group col-md-8">
                                        <label for="inputZip">Profession</label>
                                        <input type="text" class="form-control" name="profession" placeholder="votre profession">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Choisissez  une categorie </label>
                                        <div class="form-group col-md-4">
                                            <select name="categorie" class="form-control">
                                              <option selected>Choose...</option>
                                              <option value="Jeune consacrées à l'Eternel" data-toggle="tooltip" data-placement="top" title="Le groupe Jeunes consacrés à l’Éternel, rassemble des jeunes gens et jeunes filles de toutes communautés et nations, qui entendent l'appel de l’Éternel et veulent se consacrer à lui,
                                               en vue de bâtir ensemble la nation éthique, par leurs valeurs morales et leur créativité, et contribuer ainsi à la paix et au progrès pour tous.">
                                                Jeune consacrées à l'Eternel</option>

                                              <option value="Serviteurs de Dieu pour des Nations consacrées" data-toggle="tooltip" data-placement="top" title="Le groupe » serviteurs de Dieu consacrés «  réunit des hommes et des femmes de toutes les nationalités, déjà consacrés au service de Dieu, qui veulent travailler ensemble pour préparer la consécration du Cameroun  et de toutes les nations
                                               à l’Éternel, comme nations éthiques. ">
                                                 Serviteurs de Dieu pour des Nations consacrées</option>

                                              <option value="Familles consacrées à l'Eterne" data-toggle="tooltip" data-placement="top" title=" Familles consacrées
                                              Le groupe  « familles consacrées »rassemble des hommes, des femmes, des jeunes, qui veulent 
                                               participer au plan de l’Eternel  visant à bâtir des nations éthiques, à travers la consécration de leurs  familles à son nom. Ils vont travailler à rendre celles-ci  capables de manifester avec l’aide de Dieu les valeurs morales  et affectives favorisant  l’amour, la paix et  le progrès.
                                              "> 
                                                Familles consacrées à l'Eternel</option>

                                              <option value="Leaders consacrés à l'Eternel" data-toggle="tooltip" data-placement="top" title="Le groupe Leaders consacrés à l’Éternel, rassemble des hommes et des femmes de toutes les nations, des leaders au sein de divers types  de communautés (culturelles, sociologiques, professionnelles,...) qui veulent bâtir la nation éthique avec l’Éternel, dans leurs différents milieux d’appartenance, leur pays, au-delà.">
                                                Leaders consacrés à l'Eternel</option>

                                              <option value="Décennie d'impact spirituel des femmes" data-toggle="tooltip" data-placement="top" title="La Décennie d’impact spirituel des femmes est un mouvement constitué de femmes de toutes communautés et nations, qui s’engagent à servir Dieu au cours de la décennie, pour engendrer la nation éthique dans leurs familles et dans toutes leurs communautés 
                                              d’appartenance sociale, par leurs valeurs morales et leur comportement.">
                                                Décennie d'impact spirituel des femmes </option>
                                            </select>
                                          </div>
                                            
                
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-md btn-block">S'inscrire </button>
                                  </form>
                                  <br>

                        </div>
                        
                    </div>

                    <div class="col-lg-12">
                      <div class="quotes">
                        <br>
                        <br>
                        <br>
                        <div class="title-2" style="margin-top:-5px">
                                <center><em class="title-single" style="font-size: 14pt">Afin de mieux vous preparer à la cerémonie de 
                                  consécration  </em></center>
                                  <center> <h1 styl="margin-top:-10px">inscrivez vous dans un comité de soutien</h1></center> 
                                
                                <center>
                                      <a href="{{route('comitySubscribe')}}">
                                            <button   class="btn btn-primary btn-md btn-block">
                                                    S'inscrire
                                                </button> 
                                      </a>  
                                  </center>
                                  <br>
                                      <center><h2>OU</h2></center>
                                </center>
                                <br>
                                <br>
                               <center>
                                  <h1>Creez votre comité de soutien </h1>
                                  <em style="font-size:14pt">et preparez vous à la cerémonie de connsécration avec d'autres participants</em> 
                                  <a href="{{route('createCommity')}}">
                                        <button   class="btn btn-primary btn-md btn-block">
                                                Creer un comité
                                            </button> 
                                  </a>  
                            </center>
                    </div>
                          <br>

                        </div>
                      </div>


                </div>
                
                
                
            </div>


            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">


                        <div class="card" style="border: none;width: 23rem;">
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
                        
                    

                        <img src="img/visuel ce qu'il ft retenir.png" alt="" height="250" width="366">
                    </aside>
                   
                    <aside class="single_sidebar_widget popular_post_widget">

                      <br>
                      <center><h3 style="margin-left:83px">
                        CE QU’IL FAUT RETENIR </h3></center>   <br>
                    
                        <a  href="#collapse1"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse1">
                            <strong>Quelle en est la finalité?</strong> 
                        </a>
                        <br>
                        <br>
                        <div id="collapse1" class="collapse">
                            Faciliter la naissance de la nation éthique au Cameroun et dans toutes les
                            nations du monde, selon l’étape actuelle du plan de l’Eternel. <br>
                        </div>

                        
                        <a  href="#collapse2"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse2">
                            <strong>Par quel moyen cette finalité sera-t-elle réalisée par la cérémonie ? </strong>
                        </a>
                        <br>
                        <br>
                        <div id="collapse2" class="collapse"> 
                            En donnant aux familles,
                            aux communautés et aux peuples, qui s’engagent à vivre une vie fondée sur les valeurs morales
                             enseignées par toutes les religions venant de l’Eternel, le revêtement spirituel de l’Alliance 
                             de miséricorde de l’Eternel. <br>
                        </div>

                        <a  href="#collapse3"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse3">
                            <strong>Quelles en seront les conséquences ? </strong>
                        </a>
                        <br>
                        <br>
                        <div id="collapse3" class="collapse">
                        Les familles, les communautés, les peuples et les personnes,
                        deviendront capables de sortir des ténèbres responsables de la destruction spirituelle, morale et
                         sociale actuelle et pourront amener à la vie la nation éthique. <br>
                         <br> 
                        </div>

                        
                        <a  href="#collapse4"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse4">
                            <strong>Qui est concerné (e) ? </strong>
                        </a>
                        <br>
                        <br>
                        <div id="collapse4" class="collapse">
                            <br> Les personnes ayant adhéré aux mouvements et groupes associés à ce plan 
                            de l’Eternel en tant que : « Serviteurs et Servantes de Dieu pour nations consacrées », Femmes 
                            mobilisées au sein de « La Décennie d’impact spirituel des femmes », « Jeunes consacrés à l’Eternel »
                             pour la paix et le progrès des nations , « Familles consacrées à l’Eternel », ou « Leaders consacrés
                              à L’Eternel » pour des nations éthiques.
                        </div>


                  
                        <a  href="#collapse5"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse5">
                            <strong>Au final qui en profitera ? </strong>
                        </a>
                        <br>
                        <br>
                        <div id="collapse5" class="collapse"> 
                            Toutes les nations ; des hommes et femmes du Cameroun, de tous les
                            pays et de toutes les nations ; des jeunes filles et des jeunes gens, qui auront entendu cet appel
                             de l’Eternel <br>
                        </div>
                        
                          <img src="img/visuel ce qu'il ft retenir.png" alt="" height="250" width="366">
                          <br>
                          <br>
                </aside>
                    </aside>
                    
                    
                   
                </div>
            </div>

            

        </div>
    </div>
</section>
  
  @endsection