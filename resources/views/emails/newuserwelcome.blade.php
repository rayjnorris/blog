@component('mail::message')

{{$user->name}}, Welcome to Blog.Dev

Here are your login creditials:

Your Login Email: {{$user->email}}


Thanks, <br>

{{ config('app.name')}}

@endcomponent