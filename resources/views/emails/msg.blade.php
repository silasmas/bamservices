@component('mail::message')
# Bonjour {{ $name }}

@component('mail::panel')
{{ $message }}
@endcomponent

@if ($objet=="Alerte message reçu")
@component('mail::button', ['url' => config('app.url')])
Aller sur la partie admin
@endcomponent

@endif

Merci,<br>
{{ config('app.name') }}
@endcomponent
