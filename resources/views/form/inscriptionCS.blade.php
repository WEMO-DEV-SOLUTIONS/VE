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
                    
                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">
                            
                            @include('partials.error')
                        </div>
                    </div>
                   
                    <div class="col-lg-12">
                        <div class="quotes">

                                <div class="title-2" style="margin-top:11%">
                                        <center><h1 class="title-single">Inscription a un comite de soutien</h1></center>  
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
                                   
                                    <div class="form-row">
                                            <div class="form-group col-md-4">
                                                    <label for="inputState">Pays</label>
                                                    <select name="pays" class="form-control">
                                                      <option selected>Choose...</option>
                                                      <option>...</option>
                                                    </select>
                                                  </div>
                                      
                                    </div>
                                    <div id="infos-comite">
                                            ---****----
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
                      <h4>C’EST QUOI UN COMITE DE SOUTIEN ?</h4> <br>
                    
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
                         237 691 433 761
                         Whatsapp : 682 374 500
                         237 695 178 659
                     
                </aside>
                    </aside>
                    
                    
                   
                </div>
            </div>
        </div>
    </div>
</section>
  
  @endsection