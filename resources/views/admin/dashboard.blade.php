@extends('admin.include.layout_admin')
	@section('content')

	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">


			
			<!-- begin page-header -->
			<h4 class="page-header"> Administration</h4>
            <!-- end page-header -->

			<!-- begin row -->
			<div class="row">

				<!-- begin col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-gradient-blue">
						<div class="stats-icon"><i class="fa fa-male" style="color:aliceblue;"></i></div>
						<div class="stats-info">
							<h4>PARTICIPANTS</h4>
							<p>{{ $Nparticipants }}</p>	
						</div>
						<div class="stats-link">
							<a href="{{route('participants')}}">Voir les Détails <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->

				<!-- begin col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-gradient-green">
						<div class="stats-icon"><i class="fa fa-building" style="color:aliceblue;"></i></div>
						<div class="stats-info">
							<h4>COMITES DE SOUTIENS</h4>
							<p>{{ $NcomiteSoutien }}</p>	
						</div>
						<div class="stats-link">
							<a href="{{route('comiteSoutien')}}">Voir les Détails <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->

				<!-- begin col-3 -->
				<!-- end col-3 -->

				<!-- begin col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-gradient-dark">
						<div class="stats-icon"><i class="fa fa-chart-bar" style="color:aliceblue;"></i></div>
						<div class="stats-info">
							<h4>MONTANT CONTRIBUTION</h4>
							<p>{{ number_format($montant)}}</p>
                            <span>Attendus 40 Millions</span>
                        </div>

						<div class="stats-link">
							<a href="{{route('contribution')}}">Voir les Détails <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-gradient-red">
						<div class="stats-icon"><i class="fa fa-chart-bar" style="color:aliceblue;"></i></div>
						<div class="stats-info">
							<h4>MONTANT SOUSCRIPTION</h4>
							<p>{{ number_format($Previsions)}} </p>
						</div>
						<div class="stats-link">
							<a href="{{route('souscription')}}">Voir les Détails <i class="fa fa-arrow-alt-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->

				<!-- begin col-3 -->
				<div class="col-xl-3 col-md-6">
						<div class="widget widget-stats bg-gradient-info">
							<div class="stats-icon"><i class="fa fa-search" style="color:aliceblue;"></i></div>
							<div class="stats-info">
								<h4>PARTICIPANTS SANS COMITE</h4>
								<p>{{$listePwc}}</p>	
							</div>
							<div class="stats-link">
								<a ><i class="fa fa-arrow-alt-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- end col-3 -->




			</div>
			<!-- end row -->
		<!-- end #content -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	

	@endsection
	

