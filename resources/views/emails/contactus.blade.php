@component('mail::message')
# Message for {{ config('app.name') }}

## Author : {{ $data['name'] }}
## <u>Subject</u> : {{ $data['subject'] }}

{{ $data['msg'] }} <br> <br>

Source {{ $data['sourceLink'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent