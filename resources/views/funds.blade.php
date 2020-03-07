@extends('layout/appLayout')

@section('content')


  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <br>
  <br>
  <br>
  <section class="blog_area single-post-area section_gap">
    <div class="container card ">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        @if (session('valid'))
                            <div class="alert alert-success">
                                <ul>
                                    <strong>Paiment Validé</strong>
                                    <li>Montant : {{ session()->get('valid.Montant') }}</li>
                                    <li>Reférence : {{ session()->get('valid.numero') }}</li>
                                    <li>Nom : {{ session()->get('valid.nom') }}</li>
                                    <li>Prénom : {{ session()->get('valid.prenom') }}</li>
                                    <li>Email : {{ session()->get('valid.email') }}</li>
                                    <li>Date de paiement : {{ session()->get('valid.Date_paiement') }}</li>
                                    <li>Nom du comité : {{ session()->get('valid.nom_comite') }}</li>
                                </ul>

                            </div>
                        @endif
                        <br>
                        <h2>Vérifiez votre paiement</h2>

                        <form method="post" action="{{route('verifyPayment')}}">
                        @csrf
                        @include('partials.error')
                       <strong><u>NB:</u></strong> <i style="font-size: 14px;">Si vous n'avez pas reçu de code de vérification par mail entrez juste votre nom</i>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Code de vérification</label>
                                  <input type="text"  class="form-control" name="code_paiement" placeholder="Le code de vérification reçu par mail">
                                </div>
                              </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Nom</label>
                                    <input type="text"  class="form-control" name="name" placeholder="Votre nom">
                                </div>
                            </div>
                                <br>
                            <button type="submit"   class="mb-2 btn btn-primary btn-lg">Vérifier</button>
                          </form>

                    </div>

                </div>

                </div>

        </div>
    </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      @if (session('valid'))
                          <div class="alert alert-success">
                              {{ session()->get('valid') }}
                          </div>
                      @endif
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      ...
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
              </div>
          </div>
      </div>
      <script>
          $('#myModal').on('shown.bs.modal', function () {
              $('#myInput').trigger('focus')
          })
      </script>

</section>

  @endsection
