@component('mail::message')
# Inscription au newsletter

Un nouveau utilisateur s'est inscrit au newsletter avec cmme email : 

## {{ $emailSubscriber }}

Veuillez l'enregistrer dans la liste des potentiels clients.

Merci,<br>
{{ config('app.name') }}
@endcomponent
