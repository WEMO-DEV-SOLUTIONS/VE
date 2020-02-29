@extends('admin.include.layout_admin')
@section('content')
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade in page-sidebar-fixed page-header-fixed">



            <!-- begin page-header -->
            <h2 class="page-header">Liste des administrateur</h2>
            <!-- end page-header -->
            <!-- begin row -->
            <div class="row">
                <!-- begin col-10 -->
                <div class="col-xl-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">Liste de tous les administrateur</h4>
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
                                    <th class="text-nowrap"></th>

                                </tr>
                                </thead>


                                <tbody>

                                <?php for($i=1;$i<=5;$i++) { ?>

                                <tr class="gradeA">
                                    <td width="1%" class="f-s-600 text-inverse"><?php echo $i; ?></td>
                                    <td>KAMZOK</td>
                                    <td>Joseph Junior</td>
                                    <td>kamzokjunior17@gmail.com</td>
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

                                <?php } ?>


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

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/theme/default.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/plugins/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/plugins/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/plugins/jszip/dist/jszip.min.js"></script>
    <script src="assets/js/demo/table-manage-buttons.demo.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="assets/plugins/gritter/js/jquery.gritter.js"></script>
    <script src="assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/demo/ui-modal-notification.demo.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-53034621-1', 'auto');
        ga('send', 'pageview');

    </script>

@stop

