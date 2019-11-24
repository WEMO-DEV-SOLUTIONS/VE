@extends('layout.forum')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <!-- Page Heading/Breadcrumbs -->
                <h1 class="mt-4 mb-3">
                    Liste des sujets
                    <a href="#new_topic" class="btn btn-primary" data-toggle="modal" >
                        nouveau sujet
                    </a>
                </h1>

            </div>

            <div class="col-lg-12">


                <table class="table table-hover col-lg-12">
                    <thead>
                    <tr>
                        <th>nom</th>
                        <th>description</th>
                        <th>Categorie</th>
                        <th>Utilisateur</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($topics as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->content}}</td>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->category->name}}</td>
                            <td>
                                <form action="{{route('topics.destroy',$item->id)}}" method="post">
                                    @csrf @method('DELETE')
                                    <a href="{{route('topics.show',$item->id)}}" class="btn btn-primary"  > Consulter </a>
                                    <a href="#edit_category{{$item->id}}" class="btn btn-primary" data-toggle="modal" >modifier</a>
                                    <button type="submit" class="btn btn-primary" onclick="return confirm('l\'element vas etre supprimer')" >Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

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
                                            <label for="">content</label>
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
                                        <button type="submit" class="btn btn-primary" >editer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

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
