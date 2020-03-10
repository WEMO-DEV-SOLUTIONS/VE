@extends('layout/appLayout')

@section('content')
<div class="container mt-4 " style="
    padding-right: 0px;
    padding-left: 0px;">
    <section class="intro-single bg-white" style="
    padding-top: 22px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Contactez nous</h1>
                        <span class="color-text-a">
               Poussés par l’Esprit de Dieu, des femmes et des hommes se sont levés pour bâtir des nations éthiques, qui sont des nations selon le cœur de Dieu. 2019 a été une année déterminante, pour réaliser l’étape de préparation devant aboutir à la consécration de toutes les nations à sa lumière.
  <br> L’Eternel vous appelle à devenir un instrument pour ces nations. Rejoignez le mouvement !

              </span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Contact Star /-->
    <section class="contact bg-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"> 
                    <div class="row">
                        <div class="col-md-7">
                            <form class="form-a contactForm" action="{{ route('send') }}" method="post" role="form">
                                @csrf
                                <div id="sendmessage">Votre Message a été envoyer. Merci !</div>
                                <div id="errormessage"></div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Votre email" data-rule="email" data-msg="Please enter a valid email">
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" maxlength="255" name="message" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-a mb-2">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 section-md-t3">
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="ion-ios-paper-plane"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Ecrivez-nous</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">Email:
                                            <span class="color-a">nationspourlEternel@gmail.com</span>
                                        </p>
                                        <p class="mb-1">Phone:
                                            <span class="color-a">(+237) 663 159 911</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="ion-ios-pin"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Nous sommes ici :</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">
                                            Yaounde - Cameroun
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
 
  @endsection
