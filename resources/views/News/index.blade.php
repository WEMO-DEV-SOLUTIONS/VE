<?php
if ( empty(auth()->user()->name)  ){
    $layout = 'gestion_participants.layout_admin_p';
}else{
    $layout = 'admin.include.layout_admin';
}
?>
@extends($layout)

@section('content')
      <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="subject">Sujet</label>
              <input type="text"  name="subject" class="form-control @error('subject') is-invalid @enderror" id="subject" aria-describedby="emailHelp" placeholder="Entre le sujet">
              @error('subject')
              <div class="invalid-feedback">
                  {{$errors->first('subject')}}
              </div>
              @enderror
          </div>
          <div class="form-group">
              <label for="content">Contenus</label>
              <textarea name="content" class="form-control @error('content') is-invalid @enderror"></textarea>
              @error('content')
              <div class="invalid-feedback">
                  {{$errors->first('content')}}
              </div>
              @enderror
          </div>
          <div class="form-group">
              <label for="content">Image</label>
              <input type="file" name="image" class="form-control">
          </div>
          <div class="form-group">
              <input type="hidden" value="{{ auth()->user()->name ?? session('comite_user.nom_comite')  }}" name="auteur" class="form-control @error('auteur') is-invalid @enderror">
              @error('auteur')
              <div class="invalid-feedback">
                  {{$errors->first('auteur')}}
              </div>
              @enderror
          </div>
          <button type="submit" class="btn btn-primary">Enregistre</button>
      </form>

      <div class="row">
          <table class="table table-bordered table-responsive-sm">
              <thead>
              <tr class="bg-dark text-white">
                  <th scope="col">Sujet</th>
                  <th scope="col">Contenu</th>
                  <th scope="col">Publication</th>
                  <th scope="col">Actions</th>
              </tr>
              </thead>
              <tbody>
              @foreach($news as $new)
              <tr>
                  <td>{{ $new->subject }}</td>
                  <td>{{ $new->content }}</td>
                  <td>{{ $new->created_at->format('d/m/y') }}</td>
                  <td width="200px">
                      <button type="submit" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#exampleModal{{$new->id}}">Modifier</button>
                      <form action="{{route('news.destroy', $new) }}" method="post" style="display: inline">
                       @csrf
                          @method('DELETE')
                          <button type="submit" onclick="return confirm('l\'element vas etre supprimer')" class="btn btn-danger btn-sm">
                              <i class="fa fa-exclamation-triangle"></i> Supprimer
                          </button>
                      </form>
                  </td>
              </tr>
                  @endforeach
              </tbody>
          </table>
          @foreach($news as $new)
              <div class="modal fade" id="exampleModal{{ $new->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modifier L'actualite {{ $new->subject }} </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form action="{{ route('news.update', $new) }}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')
                                  <div class="form-group">
                                      <label for="subject">Subject</label>
                                      <input type="text" value="{{ $new->subject }}"  name="subject" class="form-control @error('subject') is-invalid @enderror" id="subject" aria-describedby="emailHelp" placeholder="Entre le Sujet">
                                      @error('subject')
                                      <div class="invalid-feedback">
                                          {{$errors->first('subject')}}
                                      </div>
                                      @enderror
                                  </div>
                                  <div class="form-group">
                                      <label for="content">Contenus</label>
                                      <textarea name="content"  class="form-control @error('content') is-invalid @enderror">{{ $new->content }}</textarea>
                                      @error('content')
                                      <div class="invalid-feedback">
                                          {{$errors->first('content')}}
                                      </div>
                                      @enderror
                                  </div>
                                  <div class="form-group">
                                      <label for="content">Image</label>
                                      <input type="file" value="{{ $new->image }}" name="image" class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <input type="hidden" value="{{ auth()->user()->name ?? session('comite_user.nom_comite')  }}" name="auteur" class="form-control @error('auteur') is-invalid @enderror">
                                      @error('auteur')
                                      <div class="invalid-feedback">
                                          {{$errors->first('auteur')}}
                                      </div>
                                      @enderror
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Save changes</button>
                                  </div>
                              </form>

                          </div>
                      </div>
                  </div>
              </div>
          @endforeach

      </div>

      <!-- Modal -->
  @stop
