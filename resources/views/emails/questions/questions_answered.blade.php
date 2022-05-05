@component('mail::message')
# Your question has been recieved

Your question will be reviewed and answered by one of our agents.

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
