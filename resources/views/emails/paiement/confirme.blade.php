@component('mail::message')
# Introduction
    Votre paiement a ete enregistre avec succèss pour vérifier cette
    opération cliquez sur {{ route('soutienFinancier') }} et entrez votre code

   Voici votre code de vérification : {{ $code_paiement }}

@component('mail::button', ['url' => route('soutienFinancier')])
        Cliquez pour vérifier
@endcomponent

Merci!!!!,<br>
{{ config('app.name') }}
@endcomponent
