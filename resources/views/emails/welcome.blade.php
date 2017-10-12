@component('mail::message')
#Bienvenido {{ $name }}

The body of your message.

@component('mail::button', ['url' => 'cursos'])
Ver cursos
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
