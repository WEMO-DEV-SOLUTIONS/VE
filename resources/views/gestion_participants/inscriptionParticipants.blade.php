@extends('gestion_participants.layout_admin_p')

@section('content')

	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade in page-sidebar-fixed page-header-fixed">

		<!-- begin #content -->
		<div id="content" class="content">
			
			<!-- begin page-header -->
			<form  style="margin-top:5%" method="post" action="{{route('add')}}">
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
                                        <label for="inputState"> <strong>Choisissez le comite de soutien que vous voulez rejoindre</strong> </label>
                                   <input type="text"  name="comite" value="{{ session('comite_user.nom_comite') }}">

                                    <br>
<<<<<<< HEAD
                                    <button type="submit" class="btn btn-primary">Inscrire </button>
=======
                                    <button type="submit" class="btn btn-primary">S'inscrire </button>
>>>>>>> 4900b5239fcd83105346cc0babab3df0bf430e1f
                                  </form>

                        </div>

                        
				</div>
				<!-- end col-10 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
		
	</div>
	<!-- end page container -->

	@endsection
	
	

