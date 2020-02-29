@extends('admin.include.layout_admin')

@section('content')
    <br>
  <section class="blog_area single-post-area section_gap">
      <center>
    <div class="container" style="background-color:#bec3c665; text-align: center;" >
        <div class="row">
            <div class="col-lg-6 offset-2">
                <div class="blog_right_sidebar">
                    <div class="single_sidebar_widget popular_post_widget">
                      @if(Session::has('success'))
                      <form method="post"  class="form-card" action="{{route('addId')}}" class="card-header" >
                      @csrf
                      <label for="">Entrez a nouveau votre email et
                      Cochez ici pour confirmer que vous voulez créer ce comité</label> <br>
                      <input type="email" name="email" class="form-control">
                      <input type="checkbox" name="confirmation" id="" class="form-control">
                      <button class="btn btn-outline-primary" type="submit">Confirmer</button>
                      </form>
                      @endif

                      <form  class="card-header" style=" margin-top:5%; background-color: white; " method="post" action="{{route('creationComite')}}">
                      @csrf
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="nom">Adresse email</label>
                            <input type="email" class="form-control" name="email" placeholder="adresse mail d'inscription ">
                          </div>
                            <div class="form-group col-md-6">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" name="password" placeholder="Donner un mot de passe au comité">
                          </div>

                          <div class="form-group col-md-6">
                            <label for="comiteS">Nom du comité de soutien</label>
                            <input type="text" class="form-control" name="nameCS" placeholder="Donner un nom au comité">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="comiteS">Lieu</label>
                            <input type="text" class="form-control" name="lieu" placeholder=" Le lieu de rencontre (virtuel ou physique)">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="ville">Ville</label>
                            <input type="text" class="form-control" name="ville" placeholder=" la ville">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="heure">Heure de regroupement</label>
                            <input type="time" class="form-control" name="heure" placeholder=" L'heure ">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="jourR">Jour de rencontre</label>
                            <select name="rencontre" class="form-control">
                                          <option selected value="Lundi"> Lundi</option>
                                          <option value="Mardi">Mardi </option>
                                          <option value="Mercredi">Mercredi </option>
                                          <option value="Jeudi">Jeudi </option>
                                          <option value="Vendredi">Vendredi </option>
                                          <option value="Samedi">Samedi </option>
                                          <option value="Dimanche">Dimanche </option>
                                        </select>

                          </div>
                          <div class="form-group col-md-6">
                              <label for="heure">Date de début des activités</label>
                              <input type="date" class="form-control" name="debut" placeholder=" la date debut du comite ">
                            </div>
                        </div>

                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="inputState">Catégorie</label>
                                        <select name="categorie" class="form-control">
                                          <option selected title="Un comité  de soutien physique est un lieu physique  au sein duquel  ceux qui veulent participer à cet appel de l’Eternel  se rassemblent pour se préparer spirituellement  et participer ensemble à l’organisation matérielle et financière de la  cérémonie de consécration.">Comité de soutien physique</option>
                                          <option selected title="Un comité de soutien virtuel est un lieu immatériel (groupe watsapp, internet) mis en place par un leader qui l’a créé, ou par l’administration de la cérémonie, afin de  rassembler tous ceux et celles qui ont facilement accès à internet  en vue de préparer spirituellement  et de participer ensemble à l’organisation matérielle et financière de la  cérémonie de consécration. ">Comité de soutien virtuel</option>
                                        </select>
                                      </div>

                        </div>
                            <br>
                        <button type="submit" class="btn btn-primary btn-lg btn-block" style="height: 41px">Créer le comité </button>
                      </form>

                      <br>


                    </aside>
                </div>



                      <a  href="#collapse4"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse4">
                    </a>
                    <div id="collapse4" class="collapse">
            </div>
            </div>
        </div>
    </div>
    </div>
      </center>
  </section>
  @endsection




