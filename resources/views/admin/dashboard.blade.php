	@extends('layout/adminLayout')

	@section('content')

	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">

		<!-- begin #content -->
		<div id="content" class="content">
			
			<!-- begin page-header -->
			<h4 class="page-header"> Page administrateur</h4>
            <!-- end page-header -->

			<!-- begin row -->
			<div class="row">

				<!-- begin col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-gradient-blue">
						<div class="stats-icon"><i class="fa fa-male" style="color:aliceblue;"></i></div>
						<div class="stats-info">
							<h4>PARTICIPANTS</h4>
							<p>0</p>	
						</div>
						<div class="stats-link">
							<a href="participants.php">Voir les Détails <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->

				<!-- begin col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-gradient-green">
						<div class="stats-icon"><i class="fa fa-user" style="color:aliceblue;"></i></div>
						<div class="stats-info">
							<h4>COMITES DE SOUTIENS</h4>
							<p>0</p>	
						</div>
						<div class="stats-link">
							<a href="comites.php">Voir les Détails <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->

				<!-- begin col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-gradient-primary">
						<div class="stats-icon"><i class="fa fa-money-bill-alt" style="color:aliceblue;"></i></div>
						<div class="stats-info">
							<h4>PAIEMENT</h4>
							<p>0 Fr CFA</p>	
						</div>
						<div class="stats-link">
							<a href="">Voir les Détails <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->

				<!-- begin col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-gradient-dark">
						<div class="stats-icon"><i class="fa fa-search" style="color:aliceblue;"></i></div>
						<div class="stats-info">
							<h4>PREVISION DES DONS</h4>
							<p>0 Fr CFA</p>	
						</div>
						<div class="stats-link">
							<a href="">.<i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
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
	

