<!DOCTYPE html>
<html>
<head>
<title>Readal.com</title>
</head>
<body>
 <h1>{{ $download['title'] }}</h1>
<p>{{ $download['body'] }}</p>
<p>{{ $download['email'] }}</p>
<p>{{ $download['phone'] }}</p>
<button style="background:blue;" ><a style="background:blue;" href="{{ $download['link'] }}">clcik Here To Download</a></button>

<p>Thank you</p>
</body>
</html>