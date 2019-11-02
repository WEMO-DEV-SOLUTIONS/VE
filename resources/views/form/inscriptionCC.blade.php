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
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    
                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">
                            
                            @include('partials.error')
                        </div>
                    </div>
                   
                    <div class="col-lg-12">
                        <div class="quotes">
                           
                                <div class="title-2" style="margin-top:11%">
                                        <center><h1 class="title-single">Inscrivez vous a la ceremonie de consecration</h1></center>  
                            </div>

                            <form  style="margin-top:5%">
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputEmail4">Nom</label>
                                        <input type="email" class="form-control" name="nom" placeholder="votre nom">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Prenom</label>
                                        <input type="password" class="form-control" name="prenom" placeholder="votre prenom">
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
                                            <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" name="categorie" value=" Un Jeune" checked>
                                                    <label class="form-check-label" for="gridRadios1">
                                                      Jeune consacrées à l'Eternel
                                                    </label>
                                            </div>
        
                                            <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" name="categorie" value=" Un Serviteur de Dieu" checked>
                                                    <label class="form-check-label" for="gridRadios1">
                                                      Serviteurs de Dieu pour des Nations consacrées
                                                    </label>
                                                  </div>
        
                                                  <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" name="categorie" value=" Une Famille" checked>
                                                        <label class="form-check-label" for="gridRadios1">
                                                          Familles consacrées à l'Eternel
                                                        </label>
                                                      </div>
        
                                                      <div class="form-group col-md-10">
                                                            <label for="inputZip">Combien de membre de votre famille prendront part </label>
                                                            <input type="number" class="form-control" name="familyNumber">
                                                          </div>
        
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gridRadios" name="categorie" value="  Un Leader " checked>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                Leaders consacrés à l'Eternel
                                                            </label>
                                                          </div>
        
                                                          <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="gridRadios" name="categrie" value="Une Femme" checked>
                                                                <label class="form-check-label" for="gridRadios1">
                                                                Décennie d'impact spirituel des femmes 
                                                                </label>
                                                              </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">S'inscrire </button>
                                  </form>

                        </div>
                        
                    </div>

                    <div class="col-lg-12">
                      <div class="quotes">
                        <br>

                        <div class="title-2" style="margin-top:11%">
                                <center><h1 class="title-single">Inscrivez vous dans un comité de soutien afin de mieu vous 
                                    preparer a la ceremonie de consecration.
                                </h1></center>  
                    </div>
                          <br>

                         ******
                        </div>
                      </div>


                </div>
                
               
                
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        
                        <div class="br"></div>
                    </aside>
                   
                    <aside class="single_sidebar_widget popular_post_widget">
                      <h4>CE QU’IL FAUT RETENIR :</h4> <br>
                    
                        <strong>Quelle en est la finalité?</strong> <br> Faciliter la naissance de la nation éthique au Cameroun et dans toutes les
                         nations du monde, selon l’étape actuelle du plan de l’Eternel. <br>
                        
                        <strong>Par quel moyen cette finalité sera-t-elle réalisée par la cérémonie ? </strong> En donnant aux familles,
                         aux communautés et aux peuples, qui s’engagent à vivre une vie fondée sur les valeurs morales
                          enseignées par toutes les religions venant de l’Eternel, le revêtement spirituel de l’Alliance 
                          de miséricorde de l’Eternel. <br>
                       
                        <strong>Quelles en seront les conséquences ? </strong>Les familles, les communautés, les peuples et les personnes,
                         deviendront capables de sortir des ténèbres responsables de la destruction spirituelle, morale et
                          sociale actuelle et pourront amener à la vie la nation éthique. <br>
                     
                        <strong>Qui est concerné (e) ? </strong> Les personnes ayant adhéré aux mouvements et groupes associés à ce plan 
                        de l’Eternel en tant que : « Serviteurs et Servantes de Dieu pour nations consacrées », Femmes 
                        mobilisées au sein de « La Décennie d’impact spirituel des femmes », « Jeunes consacrés à l’Eternel »
                         pour la paix et le progrès des nations , « Familles consacrées à l’Eternel », ou « Leaders consacrés
                          à L’Eternel » pour des nations éthiques. <br>
                        
                        <strong>Au final qui en profitera ? :</strong>Toutes les nations ; des hommes et femmes du Cameroun, de tous les
                         pays et de toutes les nations ; des jeunes filles et des jeunes gens, qui auront entendu cet appel
                          de l’Eternel <br>
                       
                        <strong>Dans le cadre de cet événement,</strong>  des groupes Facebook ont été crées. Nous vous invitons à les
                         consulter ou consulter .  Une fois que vous vous enregistrerez  dans l'un des groupes selon votre 
                         ..., vous aurez la possibilité de créer un comité de soutien. <br><strong></strong>
                </aside>
                    </aside>
                    
                    
                   
                </div>
            </div>
        </div>
    </div>
</section>
  
  @endsection