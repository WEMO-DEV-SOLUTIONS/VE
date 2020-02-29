@component('mail::message')

    Cher {{ $data['email'] }},
    Votre comité de soutien {{ $data['nameCS'] }} a bien été créé
    trouvez ci-joint les documents d'appui donc vous avez besoin
    et un resumé de vos informations dont vous avez besoin
  #Resumé :
     Nom : {{ $data['nameCS'] }}
     Lieu : {{ $data['lieu'] }}
     Joure De rencontre : {{ $data['rencontre'] }}
     heure : {{ $data['heure'] }}

 Pour la gestion de votre comité [cliquez ici]({{ route('connexion') }})
  Cliquez sur le bouton suivant pour télécharger les fichiers relatifs
  à la gestion de votre comité.
@component('mail::button', ['url' => asset('VE.pdf')])
télécharger les documents
@endcomponent

Merci!!!,<br>
{{ config('app.name') }}
@endcomponent
