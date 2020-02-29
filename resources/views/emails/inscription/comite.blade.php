
@component('mail::message')

    Merci de vous etres inscrit au comité {{ $data['comite'] }}
    Votre inscription a bien été prise en compte.
    Veuillez vous rendre sur le site Offciel "nationspourl'Eternel" pour plus de details

Merci,<br>
{{ config('app.name') }}
@endcomponent
