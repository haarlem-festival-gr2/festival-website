<h4>Hello {{ $name }}! A password reset has been requested for your Haarlem Festival/Tourism account</h4>
<p>Is this not you? Then you can ignore this email!</p><br>

<a href="localhost:8080/reset?token={{ $token }}">reset your email here</a><br>

<small>If the above link does not work, paste this in your browser localhost:8080/reset?token={{ $token }}</small>
