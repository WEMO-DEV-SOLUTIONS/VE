<?php
if ( empty(auth()->user()->name)  ){
    $layout = 'gestion_participants.layout_admin_p';
}else{
    $layout = 'admin.include.layout_admin';
}

@extends($layout)

@section('content')



    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <!-- Page Heading/Breadcrumbs -->
                <h1 class="mt-4 mb-3">Liste des sujets</h1>
            </div>

            <div class="col-lg-6">
                <span class="badge badge-primary">Auteur : </span>
                <span class="badge badge-primary">Categorie : </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium beatae deserunt
                    dicta earum eligendi explicabo facilis illo impedit ipsam, maxime nisi odit,
                    officia optio quasi, reprehenderit temporibus vero voluptatem!</p>
            </div>

        </div>



    </div>
    <!-- /.container -->


@endsection
