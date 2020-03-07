<<<<<<< HEAD
<?php
if ( empty(auth()->user()->name)  ){
    $layout = 'gestion_participants.layout_admin_p';
}else{
    $layout = 'admin.include.layout_admin';
}
?>
@extends($layout)
=======
 @extends('admin.include.layout_admin')

>>>>>>> 4900b5239fcd83105346cc0babab3df0bf430e1f
@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">


            <div class="col-lg-12 mt-4">
                <div class="card">

                    <div class="card-header" style="background-color: #20a5fd;">
                        <h3 class="text-white">
                            {{ $topic->name }}
                            @if($topic->close==0)
                                <span class="badge badge-dark">Sujet ouvert</span>
                            @else
                                <span class="badge badge-dark">Sujet fermer</span>
                            @endif
                        </h3>
                    </div>
                    <div class="card-header">
                        @if( auth()->user()->id ?? session('comite_user.nom_comite') )
                            @if($topic->close==0)
                                <a href="{{route('close_topic',$topic->id)}}" class="btn btn-dark">Fermer le sujet</a>
                            @else
                                <a href="{{route('open_topic',$topic->id)}}" class="btn btn-dark">Ouvrir le sujet</a>
                            @endif
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">    <p>{{ $topic->content }}</p> </div>
                        <div class="col-lg-12">
                            <p>
                                Auteur :
                                <span class="badge badge-primary">{{ $topic->user->name ?? session('comite_user.nom_comite') }}</span>
                                Categorie:
                                <span class="badge badge-primary">{{ $topic->category->name }}</span>
                            </p>
                        </div>
                    </div>

                </div>

                <h3 class="mt-4">Liste des messages :</h3>
                @foreach($messages as $message)
                <div class="card mt-4" >
                    <div class="card-body">
<<<<<<< HEAD
                        {!!   nl2br($message->content ) !!}
                        <br>
                        <br>
                        <span class="badge badge-primary">
                                @if( $message->author_type == "chef_comite" )
=======
                        {{ $message->content  }}
                        <span class="badge badge-primary">
                                @if( !empty(\Illuminate\Support\Facades\DB::table('comite_soutiens')->where('idComite_soutien',$message->user->id)->first()->chef_groupe ) )
>>>>>>> 4900b5239fcd83105346cc0babab3df0bf430e1f
                                  <b>Par {{ \Illuminate\Support\Facades\DB::table('comite_soutiens')->where('idComite_soutien',$message->user->id)->first()->chef_groupe   }} </b>
                                @else
                                 <b>Par {{ $message->user->name  }} </b>
                                @endif
                        </span>

                        <div class="mt-3">
                            <form action="{{ route('messages.destroy',$message->id)  }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('l\'element vas etre supprimer')"> <i class="fa fa-exclamation-triangle"></i> Supprimer</button>
                            </form>
                        </div>
                    </div>

                </div>
                @endforeach

                <div class="card mt-4" >
                    <div class="card-header">
                        <h3>Répondre au sujet :</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{route('messages.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="topic_id" VALUE="{{ $topic->id }}">
                                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Répondre
                                </button>
                            </div>
                        </form>

                    </div>

                </div>



            </div>

        </div>



    </div>
    <!-- /.container -->



@endsection
