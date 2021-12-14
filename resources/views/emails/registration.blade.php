@component('mail::message')
# Introduction

The body of your message.
@php

@endphp



@component('mail::button', ['url' => 'http://127.0.0.1:8000/signup/'.{{$token}}])
sign up
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
