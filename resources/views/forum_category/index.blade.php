@extends('admin.include.layout_admin')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <!-- Page Heading/Breadcrumbs -->


            </div>

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header" style="background-color: #20a5fd;" >
                       <div class="row">
                           <div class="col-lg-6"> <h2 class="text-white m-0">Liste des categories</h2> </div>
                          <div class="col-lg-6 text-right">
                              <a href="#new_category" class="btn btn-primary" data-toggle="modal" >
                                  Ajouter une categorie
                              </a>
                          </div>
                       </div>
                    </div>
                    <div class="list-group">
                        @foreach($categories as $item)
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <h3>{{$item->name}}</h3>
                                        <p>{{$item->description}}</p>
                                    </div>
                                    <div class="col-lg-3 text-right">
                                        <p>
                                        <form action="{{route('categories.destroy',$item)}}" method="post" >
                                            @if( auth()->check())
                                                <a href="#edit_category{{$item->id}}" class="btn btn-primary" data-toggle="modal" >modifier</a>
                                                @method('DELETE') @csrf
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('l\'element vas etre supprimer')" > <i class="fa fa-exclamation-triangle"></i> Supprimer</button>
                                            @endif
                                        </form>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>

            <div class="col-lg-12">{{$categories->links()}}</div>

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
                           <label for="">Description</label>
                           <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                       </div>
                       <button class="btn btn-primary" >Ajouter</button>
                   </div>
               </form>


            </div>
        </div>
    </div>

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
                            <button class="btn btn-primary" >Editer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endforeach


@endsection
