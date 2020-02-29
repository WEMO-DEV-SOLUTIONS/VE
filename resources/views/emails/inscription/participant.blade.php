
@component('mail::message')

    Votre inscription comme particiapnt à la cérémonie de consécration des nations
    à l'Eternel a été enregistrée. Vous êtez maintenant invité(e)
    à adhérer à un comité soutien ou à en créer un (Physique Ou Virtuel).
    [cliquez Ici]({{route('createCommity') }}) pour créér un comité de soutien ou[cliquez Ici]({{route('comitySubscribe') }})
    rejoindre un comité existant.


    @component('mail::button', ['url' => ''])

   @endcomponent
   Merci!!!,<br>
   @endcomponent
