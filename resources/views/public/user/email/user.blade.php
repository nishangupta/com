@component('mail::message')
# {{$subject}}

{{$message}}

@component('mail::button', ['url' => route('login')])
Student login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
