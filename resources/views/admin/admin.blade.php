@extends('admin.include.layout_admin')
@section('content')

    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">

            <!-- begin page-header -->
            <h2 class="page-header">Enregistrer un administrateur</h2>
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
                                            <label class="col-lg-3 text-lg-right col-form-label">Nom et Prénom</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="row row-space-6">
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input type="text" name="nom" placeholder="Entrer le nom" class="form-control" />
                                                    </div>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input type="text" name="prenom" placeholder="Entrer le prénom" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 text-lg-right col-form-label">Email</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="email" name="mail" value="Adresse mail" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 text-lg-right col-form-label">Mot de passe</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="" name="password" value="Mot de passe" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 text-lg-right col-form-label">Confirmer mot de passe</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="" name="confirmpasswordd" value="Confirmer mot de passe" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-10">
                                            <label class="col-lg-3 text-lg-right col-form-label">Niveau de sécurité</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <select class="form-control" name="secutite">
                                                    <option>Niveau 1</option>
                                                    <option>Niveau 2</option>
                                                    <option>Niveau 3</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group row m-b-10 ">
                                            <div class="col-lg-9 col-xl-6">
                                                <button type="submit" style="margin-left:186px;width:345px;" class="btn btn-primary">Enregistrer</button>
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
<!-- begin #page-loader -->
