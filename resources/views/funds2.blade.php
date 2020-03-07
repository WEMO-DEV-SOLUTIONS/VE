@extends('layout/appLayout')

@section('content')


  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <br>
  <br>
  <br>
  <section class="blog_area single-post-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                        <h2>Enregistrer Une souscription</h2>

                        <form method="get" action="{{route('verifyPayment')}}">
                        @include('partials.error')
                        <div class="form-row">
                         
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Nom</label>
                                  <input type="text" class="form-control" name="nom" placeholder="le code de votre comite de soutien">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Prenom</label>
                                  <input type="text" class="form-control" name="prenom" placeholder="le montant de votre contribution">
                                </div>
                              </div>



                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Code comite</label>
                                  <input type="text" class="form-control" name="code_comite" placeholder="le code de votre comite de soutien">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Montant</label>
                                  <input type="text" class="form-control" name="amount" placeholder="le montant de votre contribution">
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Date de la trasaction</label>
                                  <input type="date" class="form-control" name="date" placeholder="le code de votre comite">
                                </div>
                                 <div class="form-group col-md-6">
                                  <label for="inputPassword4">Numero de transaction</label>
                                  <input type="text" class="form-control" name="numero" placeholder="le numero de la transaction">
                                </div>
                              </div>

                                <br>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Enregistrer</button>
                          </form>

                    </div>



                </div>



            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">

                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget">


                        <iframe src="http://127.0.0.8/M3EEHNK%20TECH/site/" frameborder="0" width="400"
                        height="1000"></iframe>
                    </aside>

                </div>
            </div>
        </div>
    </div>
</section>

  @endsection
