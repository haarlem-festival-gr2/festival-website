<h4>Hello {{ $name }}! A password reset has been requested for your Haarlem Festival/Tourism account</h4>
<p>Is this not you? Then you can ignore this email!</p><br>

@php
$host = getenv('HOST_ADDR');
@endphp

<a href="{{ $host }}/reset?token={{ $token }}">reset your email here</a><br>

<small>If the above link does not work, paste this in your browser {{ $host }}/reset?token={{ $token }}</small>
