@component('mail::message')
# New Contact Message

You have received a new message from your contact form.

**Name:** {{ $data['name'] }}
**Email:** {{ $data['email'] }}

**Message:**
{{ $data['message'] }}

@component('mail::button', ['url' => 'mailto:' . $data['email']])
Reply to {{ $data['name'] }}
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
