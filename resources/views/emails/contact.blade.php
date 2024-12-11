@component('mail::message')
# Contact

Vous avez ete contacter par l'utilisateur
<div>
    <p>
        Email: {{$contact->email}}
    </p>
    <p>
        Nom: {{$contact->name}}
    </p>
</div>

Message: {{$contact->message}}
Object: {{$contact->subject}}

Merci,<br>
{{ config('app.name') }}
@endcomponent
