@extends('layout/appLayout')

@section('content')
    <br>
    <section class="blog_area single-post-area section_gap">
        <div class="container" style="background-color:#bec3c665">
            <h2 class="bg-white" style="text-align: center;font-size: 40px; margin-left: -15px; margin-right: -15px;">A PROPOS DE </h2>
            <br>
            <div class="row">
                <div class="col-lg-6 posts-list">
                    <div class="single-post row">

                        <div class="col-lg-12" style="padding-left: 0px;">

                        <div class="quotes">
                                <div class="card" style="border: none; width: 34.5rem;">
                                    <div class="title-2" style="background-color: #2c8bea; height: 40px; text-align: center;">
                                        <center><h2 class="title-single " style="color:white; font-size: 28px;">Ce plan de l’Eternel pour
                                                toutes les nations</h2></center>
                                        <br>
                                    </div>
                                    <div style="text-align: center;">
                                        <div style="text-align: left;">
                                            <div class="card bg-white" style="width: 553px;">

                                                <a href="#collapse1" data-toggle="collapse" role="button"
                                                   aria-expanded="false" aria-controls="collapse1" style="font-size: 0pt;">
                                                    <h4 style="margin-left: 30px; margin-top: 19px; font-size: 20px;">
                                                        Qui l’Eternel a-t-il envoyé pour ce plan ? </h4> <br>
                                                </a>
                                                <div id="collapse1" class="collapse container" style="font-size: 16px">
                                                    L’Eternel pour accomplir ce qu’il avait annoncé dans l’ancien testament,
                                                    le nouveau testament et dans l’Apocalypse, s’est choisi pour « Envoyée »,
                                                    «  ASSANGUENA » (Noëlle AMBATTA) ou « l’ASSANGUENA ».
                                                    <a href="#collapse2" data-toggle="collapse" role="button"
                                                       aria-expanded="false" aria-controls="collapse2">
                                                        <strong>Lire plus</strong>
                                                    </a>
                                                    <div class="collapse" id="collapse2" style="font-size: 16px">
                                                        Pendant douze années, il l’a préparée dans l’ombre. Puis en 2015, il l’a établie  publiquement comme
                                                        « Prophétesse des nations ». Et maintenant,
                                                        il l’a envoyée afin qu’elle établisse  en son nom des nations éthiques,
                                                        des nations selon son cœur. En celles-ci, L’Eternel
                                                        juge les nations, fait entrer l’humanité dans l’âge de la maturité spirituelle dans tous les domaines de sa vie,
                                                        en manifestant  son règne de lumière. <br>
                                                        Dans la vie civile, « l’ointe» de l’Eternel est écrivain, experte en résilience, leader d’une
                                                        organisation de la société civile, juriste.

                                                    </div>
                                                </div>
                                                <a href="#collapse3" data-toggle="collapse" role="button"
                                                   aria-expanded="false" aria-controls="collapse1" style="font-size: 0pt;">
                                                    <h4 style="margin-left: 30px; margin-top: 12px; font-size: 20px;">
                                                        Quelle en est la finalité ? </h4> <br>
                                                </a>
                                                <div id="collapse3" class="collapse container" style="font-size: 16px">
                                                    Faciliter la naissance de la nation éthique au Cameroun et dans
                                                    toutes les nations du monde, selon l’étape actuelle du plan de
                                                    l’Éternel.

                                                </div>
                                                <a href="#collapse5" data-toggle="collapse" role="button"
                                                   aria-expanded="false" aria-controls="collapse1" style="font-size: 0pt;">
                                                    <h4 style="margin-left: 30px; margin-top: 12px; font-size: 20px;">
                                                        Par quel moyen cette finalité sera-t-elle réalisée lors de la
                                                        cérémonie ?</h4> <br>
                                                </a>
                                                <div id="collapse5" class="collapse container" style="font-size: 16px">
                                                    En donnant aux familles, aux communautés et aux peuples, qui
                                                    s’engagent à vivre une vie fondée sur les valeurs morales enseignées
                                                    par toutes les religions venant de l’Éternel, le revêtement
                                                    spirituel de l’Alliance de miséricorde de l’Éternel.
                                                </div>
                                                <a href="#collapse7" data-toggle="collapse" role="button"
                                                   aria-expanded="false" aria-controls="collapse1" style="font-size: 0pt;">
                                                    <h4 style="margin-left: 30px; margin-top: 12px; font-size: 20px;">
                                                        Quelles en seront les conséquences ? </h4> <br>
                                                </a>
                                                <div id="collapse7" class="collapse container" style="font-size: 16px">
                                                    Les familles, les communautés, les peuples et les personnes,
                                                    deviendront capables de sortir des ténèbres responsables de la
                                                    destruction spirituelle, morale et sociale actuelle et pourront
                                                    amener à la vie la nation éthique.
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <br>
                                <div style="text-align: center;">
                                    <div style="text-align: left;">
                                        <div class="card bg-white" style="width: 553px;">
                                            <div class="ml-4">
                                                <img src="{{ asset('img/ve1.png') }}" style="margin-top: 20px;margin-right: 55px;
                                       margin-left: -2px;" alt="" height="" width="510">

                                                <a href="{{ asset('NATION ETHIQUE.pdf') }}"
                                                   class="btn btn-primary btn-lg"
                                                   style="margin-top: 12px; width: 509px;height: 40px;margin-left: -2px;">En savoir plus</a>
                                                <br>
                                                <br>
                                                <br>
                                                <br>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                {{-- changer limage --}}
                                <br>
                                <br>
                            </div>

                        </div>


                    </div>

                </div>


                <div class="col-lg-6" style="padding-right: 0px;">
                    <div class="blog_right_sidebar">
                        <div class="single_sidebar_widget popular_post_widget">
                            <div class="card" style="height: 33rem;">
                                <div class="card-body" >
                                    <img src="{{ asset('img/ma photo.jpg') }}" alt="" height="450" width="513">
                                    <div style="text-align: center;">
                                        <p>NOELLE AMBATTA L'ASSANGUENA DE DIEU   </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-4" style="border: none; width: 34.7rem; padding-right: 0px;">
                                <div class="title-2" style="background-color: #2c8bea; height: 40px;">
                                    <br>
                                </div>

                                <div style="text-align: center;">
                                    <center>
                                        <img src="{{ asset('img/logo.png') }}" alt="" width="50" height="50">
                                        <p><b class="text-primary">Cérémonie de Consécration des nations <br>
                                                <spam class="h4"><b>A L’ETERNEL</b></spam>
                                                <br>
                                                comme nations éthiques</b></p>
                                    </center>
                                </div>
                            </div>
                            <br>

                            <div>
                                <div class="card" style="border: none; width: 34.7rem; height: 324px;">
                                    <div class="mt-3" style="text-align: left;">
                                        <a href="#collapse11" data-toggle="collapse" role="button" aria-expanded="false"
                                           aria-controls="collapse1" style="font-size: 0pt;">
                                            <h4 style="margin-left: 30px; margin-top: 12px; font-size: 20px;">Au final
                                                qui en profitera ? </h4> <br>
                                        </a>
                                        <div style="padding-bottom: 0px; font-size: 16px;" id="collapse11" class="collapse container">
                                            Toutes les nations ; des hommes et femmes du Cameroun, de tous les pays et
                                            de toutes les nations ; des jeunes filles et des jeunes gens, qui auront
                                            entendu cet appel de l’Eternel.
                                        </div>
                                        <a href="#collapse13" data-toggle="collapse" role="button" aria-expanded="false"
                                           aria-controls="collapse1" >
                                            <h4 style="margin-left: 30px; margin-top: 12px; font-size: 20px;">Quand et
                                                où la cérémonie aura-t-elle lieu ? </h4> <br>
                                        </a>
                                        <div id="collapse13" class="collapse container">
                                            Avant la fin de cette année 2019, à une date qui sera précisée
                                            prochainement, à Yaoundé, Cameroun
                                        </div>
                                    </div>
                                    <a href="#collapse9" data-toggle="collapse" role="button" aria-expanded="false"
                                       aria-controls="collapse1" >
                                        <h4 style="margin-left: 30px; margin-top: 12px; font-size: 20px;">Qui est
                                            concerné ?</h4> <br>
                                    </a>
                                    <div id="collapse9" class="collapse container">
                                        Les personnes ayant adhéré aux mouvements et groupes associés à ce plan de
                                        l’Éternel en tant que : « Serviteurs et Servantes de Dieu pour nations
                                        consacrées », Femmes mobilisées au sein de « La Décennie d’impact spirituel des
                                        femmes », « Jeunes consacrés à l’Éternel » pour la paix et le progrès des
                                        nations », « Familles consacrées à l’Éternel », ou « Leaders consacrés à
                                        l’Éternel » pour des nations éthiques.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


