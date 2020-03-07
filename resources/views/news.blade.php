@extends('layout/appLayout')

@section('content')
    <section class="property-single nav-arrow-b" >
    <div class="container card mt-4 bg-white" style="margin-left: auto">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8  mt-4 mb-4 ">
                            @foreach($news as $new)
                            <img src="{{ asset('img/logo.png') }}" class="rounded-circle ml-3 "  width="50" height="50" alt="">
                            <h2 class="ml-4" style="display: inline-block;" >{{ $new->subject }}</h2>
                                <p class="fa-1x ml-4">{{ $new->content }}</p>
                        <div class="offset-1">
                            <img src="data:image/jpg;base64,{{ $new->image }}"  width="400" height="300" alt=""><br>
                        </div>
                               <div class="mt-2" style="margin-left: 26px;">
                                   <small class="badge badge-primary ml-5">Posté le : {{ $new->created_at->format('d/m/y à H:m') }}</small>
                                   <small class="badge badge-primary ml-5">Posté par: {{ $new->auteur }}</small>
                               </div>
                            <br>
                            <br>
                            @endforeach
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class="card" style="border: none; width: 20.9rem;">
                            <div class="card-header bg-primary" style=" height: 50px;">
                                <br>
                            </div>
                            <div style="text-align: center;">
                                <center>
                                    <img src="{{ asset('img/logo.png') }}" alt="" width="50" height="50">
                                    <p><b class="text-primary">Cérémonie de  Consécration  des nations <br><spam class="h4"><b>A L’ETERNEL</b></spam> <br>
                                            comme nations éthiques</b></p>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
  @endsection
