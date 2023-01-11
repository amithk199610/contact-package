<x-mail::message>
# Introduction
Hi {{$name}},<br>
The body of your message.
Mail from {{$country}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
