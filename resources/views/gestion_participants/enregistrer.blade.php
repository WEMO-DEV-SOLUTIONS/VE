@extends('gestion_participants.layout_admin_p')

@section('content')


    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <br>
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <br>
                            <h2>Enregistrer un paiement</h2>

                            <form method="get" action="{{route('makePayment')}}">
                                @csrf
                                @include('partials.error')


                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Type paiement</label>
                                        <select name="t_virement" class="form-control">
                                            <option value="liquide">
                                                liquide</option>
                                            <option value="banquaire">
                                                banquaire</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">nom</label>
                                        <input type="text" class="form-control" name="nom" placeholder="Ducobu">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" value="example@gmail.com" class="form-control" name="email" placeholder="Email Participant">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Prenom</label>
                                        <input type="text" class="form-control" name="prenom" placeholder="Exple : henry ">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Date du paiement</label>
                                        <input type="datetime-local" class="form-control" name="date" placeholder="date du jour">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Numero de Transaction (Ou Reference)</label>
                                        <input type="text" class="form-control" name="numero" placeholder="Entrer le Montant">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Montant</label>
                                        <input type="number" class="form-control" name="montant" placeholder="Entrer le Montant">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="hidden" class="form-control" name="code_comite" value="{{ session('comite_user.code_comite') }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="hidden" class="form-control" name="nom_comite" value="{{session('comite_user.nom_comite')}}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                <button type="reset" class="btn btn-danger">Annuler</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
