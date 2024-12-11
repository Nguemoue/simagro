@component('mail::message')
# Confirmation

Votre message a bien été envoyé avec succès nous allons vous répondre d'ici peu

<p>
Nom : {{$dataObject->name}}
</p>
<p>
Email : {{$dataObject->email}}
</p>
<p>
Message: {{$dataObject->message}}
</p>

@component('mail::button', ['url' => config('app.url')])
Visiter le site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
