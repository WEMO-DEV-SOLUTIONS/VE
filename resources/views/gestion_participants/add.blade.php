@extends('gestion_participants.layout_admin_p')

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

                    <div class="col-lg-12">
                        <!-- <div class="quotes">

                            <h2>souhaitez-vous  apporter votre soutien a l'organisation de la ceremonie ?</h2>
                            <br>
                            <strong>Vous pouvez le faire a travers les modes de paiement suivant:</strong>
                            <br>
                            <p>
                                <ul>
                                    <li> Un dépôt bancaire dans le compte SCB n° <strong>10002 00031 90001013725 15</strong>   ou
                                        un virement de compte à compte au RIB :  <br></li>

                                    <li>
                                            Un versement dans la liste de collecte de fonds disponible au sein
                                            du comité de soutien où vous etes inscrits. (si vous n'etes pas encore inscrit
                                            <a href="{{'subscribeTocomity'}}">cliquez ici</a> ) <br>
                                    </li>

                                    <li>
                                            Un transfert mobile Money dans le compte de la cérémonie
                                            (réf du compte à ajouter ) (lorsqu’ils sont domiciliés au Cameroun
                                            ou dans un pays du réseau MTN). <br>
                                    </li>

                                    <li>
                                        Par carte bancaire: Visa,Mastercard.. etc
                                    </li>
                                </ul>

                        </div> -->
                        <br>

                        <h2>Enregistrer votre souscription</h2>

                        <form method="get" action="{{route('makePayment')}}">
                        @csrf
<!--    
                        <ul class="list">
                           <div class="row">
                               <div class="col">
                                <label for="">5.000</label>
                                <input type="radio" name="amount1" id=""> <br>
                                <label for="">5.000</label>
                                <input type="radio" name="amount1" id=""> <br>
                                <label for="">5.000</label>
                                <input type="radio" name="amount1" id=""> <br>
                                <label for="">5.000</label>
                                <input type="radio" name="amount1" id=""> <br>
                               </div>

                               <div class="col">
                                    <label for="">5.000</label>
                                    <input type="radio" name="amount1" id=""> <br>
                                    <label for="">5.000</label>
                                    <input type="radio" name="amount1" id=""> <br>
                                    <label for="">5.000</label>
                                    <input type="radio" name="amount1" id=""> <br>
                                    <label for="">5.000</label>
                                    <input type="radio" name="amount1" id=""> <br>
                                   </div>

                                   <div class="col">
                                        <label for="">5.000</label>
                                        <input type="radio" name="amount1" id=""> <br>
                                        <label for="">5.000</label>
                                        <input type="radio" name="amount1" id=""> <br>
                                        <label for="">5.000</label>
                                        <input type="radio" name="amount1" id=""> <br>
                                        <label for="">5.000</label>
                                        <input type="radio" name="amount1" id=""> <br>
                                       </div>

                           </div>
                            <span>Autres: Veuillez saisir la somme de votre participation: <br>
                                    <div class="form-group col-lg-12">
                                            <input type="text" class="form-control" name="amount2">
                                          </div>
                            </span>
                        </ul>
                        <span>

                            <center><strong>NB:  </strong>Date de paiement au plus tard : <strong>15 Novembre 2019</strong> </span></center>

                            <br>

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Nom</label>
                                <input type="text" class="form-control" name="nom" placeholder="votre nom">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Prenom</label>
                                <input type="text" class="form-control" name="prenom" placeholder="votre prenom">
                              </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="inputState">Mode de paiement</label>
                                        <select name="mode_pay" class="form-control">
                                          <option selected>MTN MOMO</option>
                                          <option>VISA</option>
                                          <option>virement compte a compte</option>
                                          <option>Depot en compte</option>
                                        </select>
                                </div>

                        </div> -->
                    
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
                                <!-- <div class="form-group col-md-6">
                                  <label for="inputPassword4">Numero de transaction</label>
                                  <input type="text" class="form-control" name="amount" placeholder="le numero de la transaction">
                                </div> -->
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
