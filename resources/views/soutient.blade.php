@extends('layout/appLayout')

@section('content')
    <br>
  <section class="blog_area single-post-area section_gap">
    <div class="card bg-white container pl-3">
        <div class="row">
            <div class="col-lg-7 posts-list">
                <div class="single-post row mt-4">
                        <br>
                    <div class="container">
                        <form method="post" action="{{ route('hello') }}">
                            @csrf
                            @include('partials.error')
                            <h2>Choisissez votre tranche de souscription</h2>
                            <label for="devise">Choisissez  une Devise </label>
                            <select name="" id="devise"  style="width: 70%" class="form-control ">
                                <option value="XAF">XAF (FCFA)</option>
                                <option value="Euro">Euro</option>
                                <option value="Dollar">Dollar</option>
                            </select>
                            <center><b style="font-size: 22px;"><strong>NB:  </strong>DATE DE PAIEMENT AU PLUS TARD: <strong>15 NOVEMBRE 2019</strong></b></span></center>

                            <ul class="list">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <br>
                                        <b>
                                            <li><input type="radio" value="5000" name="montant"> 5000</li>
                                            <li><input type="radio" value="10000" name="montant"> 10000</li>
                                            <li><input type="radio" value="15000" name="montant"> 15000</li>
                                            <li><input type="radio" value="25000" name="montant"> 25000</li>
                                            <li><input type="radio" value="50000" name="montant"> 50000</li>
                                            <li><input type="radio" value="100000" name="montant"> 100000</li>
                                            <li><input type="radio" value="200000" name="montant"> 200000</li>
                                        </b>
                                    </div>
                                    <div class="row">
                                        <div class="form-row mb-4 mt-4">
                                            <!-- Currency Converter Script - FxExchangeRate.com  --><div style="width:300px;height:auto;border:1px solid #2D6AB4;
                                text-align:center;font-size:16px;font-family:sans-serif,Arial,Helvetica; padding-left: 30px;
                                border-top-right-radius:5px; border-top-left-radius:5px;background-color:#FFFFFF;">
                                                <div style="width:100%; height:24px;padding:5px 0px 0px 0px;background-color:#2D6AB4;font-weight:bold;">
                                                    <a rel="nofollow" style="color:#FFFFFF;text-decoration:none;" href="https://www.fxexchangerate.com/">Currency Converter</a>
                                                </div><script type="text/javascript" src="https://w.fxexchangerate.com/converter.php?fm=USD&ft=EUR&lg=en&am=1&ty=1"></script>
                                            </div><!--  End of Currency Converter Script -  FxExchangeRate.com -->
                                        </div>
                                    </div>
                                    <span>


                            <br>

                            <div class="form-row">
                                @csrf
                                <div class="form-group ">
                               <span><b>Autres: veuillez saisir le montant de votre participation</b><br>

                                    <div class="form-group col-lg-12">
                                            <input type="number" class="form-control" name="montant">
                                          </div>
                                </span>
                                </div>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Nom</label>
                                <input type="text" class="form-control" name="nom" placeholder="votre nom">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="votre Email">
                              </div>
                                <button class="btn btn-primary">Valider</button>
                            </div>
                                </div>
                            </ul>

                        </form>
                    </div>
                </div>
                </div>
            <div class="col-lg-5">
                <div class="col-lg-12 ">
                    <div class="quotes">

                        <h2 class="mt-4" style="font-size: 30px;">
                            Mode de soutien à la céremonie de consécration
                        </h2>
                        <p>
                        <ul>
                            <li> Dépôt bancaire dans le compte SCB n° <strong>10002 00031 90001013725 15</strong> ou
                                virement. <br>
                            </li>
                            <li>
                                Transfert par IBAN : <strong>CM21 10002 00031 90001013725 15</strong>
                            </li>
                            <li> Versement dans la liste de collecte de fonds disponible au sein
                                du comité de soutien où vous êtes inscrits.<i style="font-size: 14px;"> (si vous n'etes pas encore inscrit
                                    <a href="{{'subscribeTocomity'}}" class="link-a text-primary">cliquez ici</i></a> ) <br>
                            </li>
                            <li>
                                Par carte bancaire: Visa,Mastercard.. etc
                            </li>
                        </ul>

                    </div>
            </div>
        </div>
        </div>
</section>

  @endsection
