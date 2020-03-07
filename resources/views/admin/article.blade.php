@extends('admin.include.layout_admin')


@section('content')
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">


            <!-- begin page-header -->
            <h2 class="page-header">Enregistrer un article</h2>
            <!-- begin wizard-form -->
            <form action="" method="POST" class="form-control-with-bg">
                <!-- begin wizard -->
                <div id="">

                    <div>

                        <div id="step-1">
                            <!-- begin fieldset -->
                            <fieldset>
                                <!-- begin row -->
                                <div class="row">
                                    <!-- begin col-8 -->
                                    <div class="col-xl-8 offset-xl-2">

                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 text-lg-right col-form-label">Titre</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="text" name="titre" value="titre article" class="form-control" />
                                            </div>
                                        </div>
                                        <!-- end form-group row -->
                                        <!-- begin form-group row -->
                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 text-lg-right col-form-label">Contenu</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <textarea class="form-control" rows="3" name="contenu"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 text-lg-right col-form-label">Image</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="file" name="image"  class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 text-lg-right col-form-label">Auteur</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="" name="auteur" value="Nom auteur " class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-10 ">
                                            <div class="col-lg-9 col-xl-6">
                                                <button type="submit" style="margin-left:186px;width:345px;" class="btn btn-primary">Publier</button>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end col-8 -->
                                </div>
                                <!-- end row -->
                            </fieldset>
                            <!-- end fieldset -->
                        </div>
                    </div>

                </div>
                <!-- end wizard -->
            </form>
            <!-- end wizard-form -->
        </div>
        <!-- end #content -->
    <!-- end page container -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/js/theme/default.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="../assets/plugins/smartwizard/dist/js/jquery.smartWizard.js"></script>
    <script src="../assets/js/demo/form-wizards.demo.js"></script>
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
