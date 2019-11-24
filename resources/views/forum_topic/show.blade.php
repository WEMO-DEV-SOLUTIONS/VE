 @extends('layout.forum')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">


            <div class="col-lg-12 mt-4">
                <div class="card">

                    <div class="card-header">
                        <h3>
                            {{ $topic->name }}
                            @if($topic->close==0)
                                <span class="badge badge-dark">sujet ouvert</span>
                            @else
                                <span class="badge badge-dark">sujet fermer</span>
                            @endif
                        </h3>
                    </div>
                    <div class="card-header">
                        @if(  1 /*auth()->user()->id*/ == $topic->user_id )
                            @if($topic->close==0)
                                <a href="{{route('close_topic',$topic->id)}}" class="btn btn-dark">fermer le sujet</a>
                            @else
                                <a href="{{route('open_topic',$topic->id)}}" class="btn btn-dark">ouvrir le sujet</a>
                            @endif
                        @endif
                    </div>
                    <div class="card-body">
                        <p>{{ $topic->content }}</p>
                    </div>
                    <div class="card-footer">
                        autheur :
                        <span class="badge badge-primary">
                            {{ $topic->user->name }}
                        </span>
                        category:
                        <span class="badge badge-primary">
                             {{ $topic->category->name }}
                        </span>
                    </div>

                </div>

                <h3 class="mt-4">Liste de messages :</h3>
                @foreach($messages as $message)
                <div class="card mt-4" >
                    <div class="card-header">
                        <form action="{{ route('messages.destroy',$message->id)  }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary" onclick="return confirm('l\'element vas etre supprimer')">Supprimer</button>
                        </form>
                    </div>
                    <div class="card-body">{{ $message->content  }} </div>
                    <div class="card-footer">
                        autheur :
                        <span class="badge badge-primary">
                            {{ $message->user->name  }} - ( {{ $message->user->email  }} )
                        </span>
                    </div>
                </div>
                @endforeach

                <div class="card mt-4" >
                    <div class="card-header">
                        <h3>repondre au sujet :</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{route('messages.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    repondre
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
