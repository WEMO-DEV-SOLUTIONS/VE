@extends('gestion_participants.layout_admin_p')

@section('content')

	
		<!-- begin page-header -->
		
     <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">

                  @include('partials.error')

                    <center>
                    <div class="col-lg-12">
                        <div class="quotes" >
                       
                                <div class="title-2" class="card-header" style="margin-top:-2px; margin-left: 200px; margin-right: -300px; background-color: grey; height: 56px;
                                font-color:white">
                                        <center><h2 class="title-single"  style="color:white">Enregistrez un participant a la cérémonie de consécration</h3></center>
                            </div>

                            <form  class="card-header" style="margin-top:5%; background-color: white; margin-left: 200px; margin-right: -300px " method="post" action="{{route('inscriptionConsecration')}}" >
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

                                    <div class="form-row">
                                            <div class="col">
                                                    <label for="inputState"> Indicatif</label>
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


                                    <div class="col">
                                        <label for="inputZip">Pays</label>
                                        <input type="text" class="form-control" name="pays" placeholder="votre pays">
                                    </div>
                                    <div class="col">
                                        <label for="inputZip">ville</label>
                                        <input type="text" class="form-control" name="city" placeholder="votre ville">
                                    </div>


                                </div>

                                <div class="form-row">

                                  <div class="col">
                                          <label for="inputZip">Profession</label>
                                          <input type="text" class="form-control" name="profession" placeholder="votre profession">
                                  </div>
                                  <div class="col">
                                        <label for="">Choisissez  une categorie </label>
                                        <select name="categorie" class="form-control">
                                            <option selected>Choisir ...</option>
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

                                <div class="form-row">
                                    <div class="col">
                                        <label for="inputZip">Votre Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="votre Email">
                                    </div>
                                </div>
            <div class="form-row" >
                                <div class="form-group col-md-6">
                               </div>
                                <div class="form-group col-md-4">


                                    </div>
                                    <button type="submit" class="btn btn-primary btn-md btn-block" style="background-color: grey;">Valider </button>
                                  </form>
                                  <br>

                        </div>


                   
            </div>



        </div>
    </div>
</section>
		</div>
		<!-- end #content -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
		
	</div>
	<!-- end page container -->

	@endsection
	
	

