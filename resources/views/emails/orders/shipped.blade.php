{{-- @component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>USA Central Intelligence Agency (美國中央情報局) : </h1><br>
        <h2>{{$mailData['name']}} 特務 ， 你已被徵收為奴隸!</h2><br>
        <h3>任務 : {{$mailData['message']}}</h3><br><br><br><br>
        <div>你的代號 : {{$mailData['email']}}</div><br><br>
        <div>請於10秒內"自行"銷毀這封信</div>
    </body>
</html>