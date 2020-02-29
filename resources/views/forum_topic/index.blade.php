@extends('admin.include.layout_admin')

@section('content')

    <!-- Page Content -->
    <div class="container-fluid">

        <div class="row">


            <div class="col-lg-6">
                <h2>Forum</h2>
                <p>Bienvenue dans le forum</p>
            </div>

            <div class="col-lg-6 text-right">
                <a href="#new_topic" class="btn btn-primary" data-toggle="modal" >
                    Ajouter un sujet
                </a>
            </div>

            <div class="col-lg-12">

                @foreach($categories as $category)
                    <div class="card mb-4">
                        <div class="card-header " style="background-color: #20a5fd;">
                            <h2 class="text-white m-0"><?= $category->name ?></h2>
                        </div>
                        <div class="list-group">
                            @foreach($category->topics as $item)
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h3><a href="{{route('topics.show',$item->id)}}">{{$item->name}}</a></h3>
                                            <p>{{$item->content}}</p>
                                        </div>
                                        <div class="col-lg-3 text-right">
                                            <div>
                                                <form action="{{route('topics.destroy',$item->id)}}" method="post">
                                                    @csrf @method('DELETE')
                                                    @if(auth()->check()  OR
                                                    !empty(\Illuminate\Support\Facades\DB::table('comite_soutiens')
                                                                                ->where('idComite_soutien',$item->user_id)
                                                                                ->where('idComite_soutien',session('comite_user.idComite_soutien') )
                                                                                ->count()))
                                                        <a href="#edit_category{{$item->id}}" class="btn btn-primary" data-toggle="modal" >Modifier </a>
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('l\'element vas etre supprimer')" > <i class="fa fa-exclamation-triangle"></i> Supprimer</button>
                                                    @endif
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach


                @foreach($topics as $item)
                    <div class="modal fade " id="edit_category{{$item->id}}"  role="dialog" aria-labelledby="exampleModalLabel"  aria-modal="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">editer le sujet</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('topics.update',$item->id)}}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label for="nom">Nom</label>
                                            <input name="name" type="text" class="form-control" value="{{$item->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">contenu</label>
                                            <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$item->content}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Categorie</label>
                                            <select class="form-control custom-select" name="forum_category_id" id="">
                                                <option value="{{$item->category->id}}">{{$item->category->name}}</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary" >Editer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="col-lg-12">
                {{$categories->links()}}
            </div>

        </div>



    </div>
    <!-- /.container -->

    <div class="modal fade " id="new_topic"  role="dialog" aria-labelledby="exampleModalLabel"  aria-modal="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">editer le sujet sujet</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{route('topics.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input name="name" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">content</label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Categorie</label>
                        <select class="form-control custom-select" name="forum_category_id" id="">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" >enregistrer</button>
                    </form>

                </div>

            </div>
        </div>
    </div>


@endsection
