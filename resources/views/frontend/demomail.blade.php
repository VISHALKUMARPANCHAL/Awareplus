<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="x-icon" href="{{url('frontend/img/logo.png')}}">
    <title>Document</title>
</head>
<body>
    <h2>{{$maildata['title']}}</h2>
    <p>{{$maildata['body']}}</p>
    <h2>{{$maildata['otp']}}</h2>
    <p>thank you.</p>
</body>
</html>


