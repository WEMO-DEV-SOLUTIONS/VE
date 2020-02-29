@extends('layout/appLayout')
@section('content')
    <br>
  <section class="blog_area single-post-area section_gap">
    <div class="container" style="background-color:#d8dbdd;margin-top:10px">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">

                  @include('partials.error')

                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">


                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="quotes" >

                            <div class="title-2" class="card-header" style=" margin-left: -15px; background-color:#2c8bea; height: 40px; font-color:white">
                              <center><h2 class="title-single"  style="color:white">Inscrivez-vous à la cérémonie de consécration</h2></center>
                            </div>

                            <form  class="card-header" style="margin-top:30px; background-color: white; margin-left: -15px " method="post" action="{{route('inscriptionConsecration')}}" >
                              @csrf
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputEmail4">Nom</label>
                                        <input type="text" class="form-control" name="nom" placeholder="Votre nom">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Prénom</label>
                                        <input type="tect" class="form-control" name="prenom" placeholder="Votre prénom">
                                      </div>
                                    </div>

                                    <div class="form-row">
                                            <div class="col">
                                                    <label for="inputState"> Indicatif</label>
                                                    <select name="indicatif" class="form-control">
                                                      <option selected>+237</option>
                                                      <option>+1</option>
                                                    </select>
                                                  </div>
                                            <div class="col">
                                                    <label for="inputState">Numéro de téléphone</label>
                                              <input type="text" class="form-control" placeholder="Votre numéro de téléphone" name="phone">
                                            </div>
                                          </div>

                                <div class="form-row">

                                    <div class="col">
                                        <label for="inputZip">Pays</label>
                                        <input type="text" class="form-control" name="pays" placeholder="Votre pays">
                                    </div>
                                    <div class="col">
                                        <label for="inputZip">Ville</label>
                                        <input type="text" class="form-control" name="city" placeholder="Votre lieu de résidence"
                                    </div>
                                    </div>

                                </div>

                                <div class="form-row">

                                  <div class="col">
                                          <label for="inputZip">Profession</label>
                                          <input type="text" class="form-control" name="profession" placeholder="Votre profession">
                                  </div>
                                  <div class="col">
                                        <label for="">Choisissez  une catégorie </label>
                                        <select name="categorie" class="form-control">
                                            <option selected>Choisir...</option>
                                            <option value="Jeune consacrées à l'Eternel" data-toggle="tooltip" data-placement="top" title="Le groupe Jeunes consacrés à l’Éternel, rassemble des jeunes gens et jeunes filles de toutes communautés et nations, qui entendent l'appel de l’Éternel et veulent se consacrer à lui, en vue de bâtir ensemble la nation éthique, par leurs valeurs morales et leur créativité. Ils sont appelés à contribuer ainsi à la paix et au progrès pour tous.">
                                                Jeunes consacrés à l'Eternel</option>

                                            <option value="Serviteurs de Dieu pour des Nations consacrées" data-toggle="tooltip" data-placement="top" title="Le groupe « Serviteurs de Dieu consacrés »  réunit des hommes et des femmes de toutes les nationalités, déjà consacrés au service de Dieu, qui veulent travailler ensemble pour préparer la consécration du Cameroun  et des nations à l’Éternel, comme nations éthiques. ">
                                                Serviteurs de Dieu pour des Nations consacrées</option>

                                            <option value="Familles consacrées à l'Eterne" data-toggle="tooltip" data-placement="top" title=" Le groupe  « familles consacrées » rassemble des hommes, des femmes, des jeunes, qui veulent participer au plan de l’Eternel  visant à bâtir des nations éthiques, à travers la consécration de leurs  familles à son nom. Ils vont travailler à rendre celles-ci  capables de manifester avec l’aide de Dieu les valeurs morales  et affectives favorisant  l’amour, la paix et  le progrès.
                                              ">
                                                Familles consacrées à l'Eternel</option>

                                            <option value="Leaders consacrés à l'Eternel" data-toggle="tooltip" data-placement="top" title="Le groupe « Leaders consacrés à l’Éternel » rassemble des hommes et des femmes de toutes les nations, des leaders au sein de divers types  de communautés (culturelles, sociologiques, professionnelles,...) qui veulent bâtir la nation éthique avec l’Éternel, dans leurs différents milieux d’appartenance, leur pays et au-delà.">
                                                Leaders consacrés à l'Eternel</option>

                                            <option value="Décennie d'impact spirituel des femmes" data-toggle="tooltip" data-placement="top" title="La Décennie d’impact spirituel des femmes est un mouvement constitué de femmes de toutes communautés et nations, qui s’engagent à servir Dieu au cours de la décennie, pour engendrer la nation éthique dans leurs familles et dans toutes leurs communautés d’appartenance sociale, par leurs valeurs morales et leur comportement.">
                                                Décennie d'impact spirituel des femmes </option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="inputZip">Votre Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Votre Email">
                                    </div>
                                </div>

                                <div class="form-row" >
                                <div class="form-group col-md-6">
                               </div>
                                <div class="form-group col-md-4">


                                    </div>
                                    <button type="submit" class="btn btn-primary btn-md btn-block"><span style="font-size: 14pt;" >S'inscrire</span></button>
                                  </form>
                                  <br>

                        </div>

                    </div></div>

                    <div class="col-lg-12">
                      <div class="quotes">
                        <br>
                        <div class="title-2" style="background-color:white;width:745px;margin-left:-15px;height:200px">
                          <h2 style="text-align: center; padding-top: 24px; "  >Inscrivez-vous dans un comité de soutien</h2>
                          <center><em class="title-single" style="font-size: 14pt">Afin de mieux vous préparer à la cerémonie de
                          consécration  </em></center>

                          <a href="{{route('comitySubscribe')}}">
                                <button class="btn btn-primary " style="margin-top:50px;width:710px;margin-left:18px; ">
                                  <span style="font-size: 14pt;" >S'inscrire</span>
                                </button>
                          </a>

                        </div>
                        <br>

                        </div>
                      </div>

                      <div>
                        <div style="background-color:white;width:745px">
                        <br>
                            <center><h3>Ou</h3></center>
                            <h2 style="text-align:center">Créez votre comité de soutien </h2>
                                  <center><em style="font-size:14pt; height: 41px;">et préparez vous à la cerémonie de connsécration avec d'autres participants</em></center>
                                  <a href="{{route('createCommity')}}" class="btn btn-primary " style="margin-top:
                                  0px;width:710px;margin-left:18px;margin-bottom:10px; font-size: 14pt;">
                                                Créer un comité
                                  </a>


                        </div>

                      </div>


                </div>



            </div>


            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">


                        <div class="card" style="border: none;width: 23rem;">
                            <div class="card-header"   style="background-color:#2c8bea;height: 40px">
                             <br>
                            </div>
                            <div class="card-body">
                             <center>
                                 <img src="{{ asset('img/logo.png') }}" alt="" width="50" height="50">
                                <p><b class="text-primary">Cérémonie de  consécration  des nations <br><spam class="h4"><b>A L’ETERNEL</b></spam> <br>
                                  comme nations éthiques</b></p>
                             </center>
                            </div>
                          </div>



                        <img src="{{ asset('img/visuel pourquoi cérémonie Francais.png') }}" alt="" height="250" width="366">
                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget" style="text-align:left; padding-left: 20px;background-color:white;width:366px;height:689px">

                      <br>
                      <h3 class="text-center">
                        A RETENIR </h3>  <br>

                        <a  href="#collapse1"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse1">
                            <strong>Appel</strong>
                        </a>
                        <br>
                        <br>
                        <div id="collapse1" class="collapse" style="font-size: 14px;">
                            L’Eternel appelle toutes les nations de la terre à s’établir dans
                            sa lumière afin de devenir des nations éthiques.
                            Il appelle les femmes et les hommes de toutes les nations, qui s’appellent de son nom, à venir à la repentance, à se purifier et à se sanctifier, afin de recevoir son alliance
                            de miséricorde pour bâtir des nations selon son cœur ou nations éthiques. CEREMONIE DE CONSECRATION : l’alliance de miséricorde sera établie entre Dieu
                            et les personnes, les familles, les jeunes, les femmes, les leaders et les serviteurs de Dieu disposés à entrer dans son plan pour les nations au cours d’une
                            cérémonie de consécration à laquelle ils/elles doivent s’inscrire.
                            <br>
                        </div>


                        <a  href="#collapse2"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse2">
                            <strong>Inscription</strong>
                        </a>
                        <br>
                        <br>
                        <div id="collapse2" class="collapse"  style="font-size: 14px;">
                           Elle s’effectuera en principe, du 12 septembre au 30 novembre 2019.
                           Tous les participants à la cérémonie de consécration, doivent être enregistrés
                           au préalable, soit dans un comité de soutien (physique ou virtuel) à l’événement,
                            soit directement sur toutes
                           les plateformes numériques ayant un lien avec la cérémonie de consécration
                           ( site www.nationspourl’Eternel.org , page facebook : @nationspourlEternel Twitter,watsapp, etc.) ou encore en contactant la
                           COORDINATION DE LA CEREMONIE DE CONSECRATION au TELEPHONE WATSAPP : 237 691 433 761
                           <br>
                        </div>

                        <a  href="#collapse3"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse3">
                            <strong>Conditions dinscription</strong>
                        </a>
                        <br>
                        <br>
                        <div id="collapse3" class="collapse" style="font-size: 14px;">
                        Peut s’inscrire pour prendre part à la cérémonie, tout homme, femme, j
                        eune, quel que soit son pays, sa religion. Il ou elle doit accepter de se
                        purifier par la repentance,
                        de se sanctifier, de se consacrer à l’Eternel, afin de recevoir.ors de
                        la cérémonie, son alliance de miséricorde. Celle-ci lui permettra
                        alors de participer à son œuvre de régénération des nations,
                         du pays, des communautés, des familles, des personnes. <br>
                         <br>
                        </div>


                        <a  href="#collapse4"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse4">
                            <strong>Priorité</strong>
                        </a>
                        <br>
                        <br>
                        <div id="collapse4" class="collapse" style="font-size: 14px;">
                            <br>outefois, la participation à la cérémonie de
                            consécration sera accordée en priorité à ceux qui
                            se sont à la fois inscrits pour la cérémonie et dans
                             un comité de soutien à l’événement, où ils auront pris
                             part aux activités préparatoires prévues.
                        </div>



                        <a  href="#collapse5"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse5">
                            <strong>Préparation</strong>
                        </a>
                        <br>
                        <br>
                        <div id="collapse5" class="collapse" style="font-size: 14px;">
                           La préparation à la cérémonie est spirituelle et matérielle. La préparation spirituelle est effectuée au sein des comités de soutien, qui se constituent librement autour d’un
                           leader(le leader se constitue tel volontairement) en regroupant
                            des personnes ayant l’un
                            des profils auquel l’appel de Dieu
                            s’adresse ( familles, femmes, jeunes, leaders, serviteurs de Dieu)
                            ou tous ces profils ensembles, sur la base de la relation que ces personnes
                            entretiennent ou établissent entre elles. Ces personnes prient ensemble,
                             selon les orientations générales qui leurs sont proposées dans le cadre
                             de cet événement et selon celles qui leurs sont inspirées par l’Esprit
                             de Dieu en vue de se purifier et de se sanctifier. Elles prient également pour
                              contribuer à la réalisation parfaite du plan de Dieu au cours de l’événement.
                               Sur le plan financier ou matériel, chacun est appelé à soutenir l’organisation
                               de la cérémonie de consécration, selon des modalités mises à la disposition des
                                leaders et communiquées par ceux-ci à leurs membres.
                             Celles-ci sont disponibles sur le site www.valeurseternelles.org .
                             <br>
                        </div>
                        <a  href="#collapse5"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse5">
                            <strong>Dates et informations complémentaires</strong>
                        </a>
                        <br>
                        <br>
                        <div id="collapse5" class="collapse" style="font-size: 14px;">
                 Dates et informations complémentaires
                Les inscriptions à la cérémonie seront closes dès que le nombre d’inscrits
                couvrira les capacités d’accueil du site accueillant l’événement...
                La fin de la mobilisation financière : Elle sera connue
                au début de novembre 2019 Date de l’événement : Décembre
                2019 Des informations complémentaires peuvent être obtenues
                aux contacts suivants : Watsapp :237 665 53 32 69 / nationspourlEternel@gmail.com

                             <br>
                        </div>

                </aside>
                    </aside>



                </div>
            </div>



        </div>
    </div>
</section>

  @endsection
