@component('mail::message')
# Nouveau message depuis le site fiit-protection.com

## Nom : {{ $name }}
## Email : {{ $email }}

## Message

{{ $message }}


Merci,<br>
{{ config('app.name') }}
@endcomponent
