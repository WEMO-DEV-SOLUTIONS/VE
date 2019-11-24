@extends('layout.forum')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <!-- Page Heading/Breadcrumbs -->
                <h1 class="mt-4 mb-3">
                    Liste des categories
                    <a href="#new_category" class="btn btn-primary" data-toggle="modal" >
                        nouvelle categorie
                    </a>
                </h1>

            </div>

            <div class="col-lg-12">


                <table class="table table-hover col-lg-12">
                    <thead>
                        <tr>
                            <th>nom</th>
                            <th>description</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->description}}</td>
                            <td>
                                <form action="{{route('categories.destroy',$item)}}" method="post" >
                                    <a href="#edit_category{{$item->id}}" class="btn btn-primary" data-toggle="modal" >modifier</a>
                                    @method('DELETE') @csrf
                                    <button type="submit" class="btn btn-primary" onclick="return confirm('l\'element vas etre supprimer')" >Supprimer</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                @foreach($categories as $item)
                    <div class="modal fade " id="edit_category{{$item->id}}"  role="dialog" aria-labelledby="exampleModalLabel"  aria-modal="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Nouvelle categorie</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form action="{{route('categories.update',$item->id)}}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="nom">Nom</label>
                                            <input name="name" type="text" class="form-control" value="{{$item->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">description</label>
                                            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$item->description}}</textarea>
                                        </div>
                                        <button class="btn btn-primary" >editer</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>



    </div>
    <!-- /.container -->

    <div class="modal fade " id="new_category"  role="dialog" aria-labelledby="exampleModalLabel"  aria-modal="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nouvelle categorie</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

               <form method="post" action="{{ route('categories.store') }}">
                   @csrf
                   <div class="modal-body">
                       <div class="form-group">
                           <label for="nom">Nom</label>
                           <input name="name" type="text" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="">description</label>
                           <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                       </div>
                       <button class="btn btn-primary" >Ajouter</button>
                   </div>
               </form>


            </div>
        </div>
    </div>


@endsection
