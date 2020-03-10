
@component('mail::message')

    Votre inscription comme particiapnt à la cérémonie de consécration des nations
    à l'Eternel a été enregistrée. Vous êtes maintenant invité(e)
    à adhérer à un comité de soutien ou à en créer un (physique ou virtuel).
    [cliquez Ici]({{route('createCommity') }}) pour créér un comité de soutien ou[cliquez Ici]({{route('comitySubscribe') }})
    rejoindre un comité existant.


    @component('mail::button', ['url' => ''])

   @endcomponent
   Merci!!!,<br>
   @endcomponent
