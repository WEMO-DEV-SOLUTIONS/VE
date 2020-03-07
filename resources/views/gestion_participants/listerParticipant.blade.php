@extends('gestion_participants.layout_admin_p')

@section('content')

	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade in page-sidebar-fixed page-header-fixed">
			<div class="offset-lg-6">
                  Cotisation Total:
                <small class="badge badge-secondary" style="font-size: 16px">{{ number_format($souscription) }}FCFA</small> Cotisation Attendus
                <small class="badge badge-primary" style="font-size: 16px">40 Millions</small>

            </div>
			<!-- begin page-header -->
			<h2 class="page-header">Liste des participants</h2>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-10 -->
				<div class="col-xl-12">
					<!-- begin panel -->
					<div class="panel panel-inverse">
						<!-- begin panel-heading -->
						<div class="panel-heading">
							<h4 class="panel-title">Liste de tous les Participants</h4>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<!-- end panel-heading -->
						<!-- begin alert -->

						<!-- end alert -->
						<!-- begin panel-body -->
						<div class="panel-body">
							<table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">

								<thead>
									<tr>
										<th width="1%"></th>
										<th class="text-nowrap">NOM</th>
										<th class="text-nowrap">PRENOM</th>
                                        <th class="text-nowrap">EMAIL</th>
                                        <th class="text-nowrap">PAYS</th>
                                        <th class="text-nowrap">VILLE</th>
                                        <th class="text-nowrap">TEL</th>
                                        <th class="text-nowrap">PROFESSION</th>
										<th class="text-nowrap">CATEGORIE</th>
										<th class="text-nowrap">Date d'inscription</th>
										<th class="text-nowrap"></th>

									</tr>
								</thead>


								<tbody>

							@foreach ($comite ?? '' as $key => $participant)



									<tr class="gradeA">
										<td width="1%" class="f-s-600 text-inverse">{{$key + 1}}</td>
										<td>{{$participant->nom}}</td>
										<td>{{$participant->prenom}}</td>
										<td>{{$participant->email}}</td>
										<td>{{$participant->pays}}</td>
										<td>{{$participant->ville}}</td>
										<td>{{$participant->telephone}}</td>
										<td>{{$participant->profession}}</td>
										<td>{{$participant->categorie}}</td>
										<td>{{$participant->created_at}}</td>
                                        <td>
                                                <a href="#modal-alert" class="btn btn-sm btn-danger" data-toggle="modal"><i class="fa fa-trash"></i></a>
                                            </td>
                                        <form method="post" action="">
                                        <div class="modal fade" id="modal-alert">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Alert </h4>
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													</div>
													<div class="modal-body" style="text-align:center;">
														<div class="alert alert-danger m-b-0">
															<i class="fa fa-exclamation-circle fa-7x"></i>
															<h3>Etes-vous sûr?</h3>
															<h5>Vous allez supprimer cet élément!</h5>
														</div>
													</div>
													<div class="modal-footer">
														<a href="javascript:;" class="btn btn-white" data-dismiss="modal">NON</a>
														<button type="submit" class="btn btn-danger" data-dismiss="modal">OK</button>
													</div>
												</div>
											</div>
										</div>
                                        </form>
                                    </tr>
									@endforeach


								</tbody>
							</table>
						</div>
						<!-- end panel-body -->
					</div>
					<!-- end panel -->
				</div>
				<!-- end col-10 -->
			</div>
			<div class="row">
				<!-- begin col-10 -->
				<div class="col-xl-12">
					<!-- begin panel -->
					<div class="panel panel-inverse">
						<!-- begin panel-heading -->
						<div class="panel-heading">
							<h4 class="panel-title">Liste de tous les Participants ayant fait un paiemeent</h4>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<!-- end panel-heading -->
						<!-- begin alert -->

						<!-- end alert -->
						<!-- begin panel-body -->
						<div class="panel-body">
							<table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">

								<thead>
									<tr>
										<th class="text-nowrap">NOM</th>
										<th class="text-nowrap">PRENOM</th>
                                        <th class="text-nowrap">EMAIL</th>
                                        <th class="text-nowrap">REFERENCE DE PAIEMENT</th>
                                        <th class="text-nowrap">MONTANT</th>
                                        <th class="text-nowrap">DATE DE PAIEMENT</th>
                                        <th class="text-nowrap">MODE DE PAIEMENT</th>
										<th class="text-nowrap"></th>

									</tr>
								</thead>


								<tbody>

							@foreach ($paiement ?? '' as $key => $participant)

<<<<<<< HEAD
=======


>>>>>>> 4900b5239fcd83105346cc0babab3df0bf430e1f
									<tr class="gradeA">
										<td>{{$participant->nom}}</td>
										<td>{{$participant->prenom}}</td>
										<td>{{$participant->email}}</td>
										<td>{{$participant->numero}}</td>
<<<<<<< HEAD
										<td>{{$participant->montant}}</td>
=======
										<td>{{$participant->Montant}}</td>
>>>>>>> 4900b5239fcd83105346cc0babab3df0bf430e1f
                                        <td>{{$participant->Date_paiement}}</td>
                                        <td>{{$participant->t_versement}}</td>
                                        <td>
											<a href="#modal-alert" class="btn btn-sm btn-danger" data-toggle="modal"><i class="fa fa-trash"></i></a>
										</td>



										<div class="modal fade" id="modal-alert">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Alert </h4>
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													</div>
													<div class="modal-body" style="text-align:center;">
														<div class="alert alert-danger m-b-0">
															<i class="fa fa-exclamation-circle fa-7x"></i>
															<h3>Etes-vous sûr?</h3>
															<h5>Vous allez supprimer cet élément!</h5>
														</div>
													</div>
													<div class="modal-footer">
														<a href="javascript:;" class="btn btn-white" data-dismiss="modal">NON</a>
														<button type="submit" class="btn btn-danger" data-dismiss="modal">OK</button>
													</div>
												</div>
											</div>
										</div>
                                    </tr>

									@endforeach
                            <tr>
                                <td>TOTAL</td>
<<<<<<< HEAD
                                <td><b>{{ $total }} </b>FCFA</td>
=======
                                <td><b>{{ $total }}</b></td>
>>>>>>> 4900b5239fcd83105346cc0babab3df0bf430e1f
                            </tr>

								</tbody>
							</table>
						</div>
						<!-- end panel-body -->
					</div>
					<!-- end panel -->
				</div>
				<!-- end col-10 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	<!-- end page container -->

	@endsection



