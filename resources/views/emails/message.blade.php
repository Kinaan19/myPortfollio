@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

{{$mail->name}} 
{{$mail->email}}
{{$mail->message}}
ta rass


Thanks,<br>
{{ config('app.name') }}
@endcomponent
