{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/forget" method="POST">
        @csrf
        <input type="number" name="otp" id="otp">
        <input type="submit">
    </form>
</body>
</html>

 --}}





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Awareplus</title>
    <script src="https://kit.fontawesome.com/4bd180b75b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" type="x-icon" href="{{ url('frontend/img/logo.png') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ url('frontend/css/login.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&family=Cinzel:wght@400..900&family=Climate+Crisis&family=Kosugi+Maru&family=Rubik+Doodle+Shadow&family=Space+Grotesk:wght@300..700&display=swap"
        rel="stylesheet">
    <style>
        #ttl {
            margin: 23px 0px 10px 33px;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="container2" id="ct2">
            <a href="/">
                <img id="logologin" src="{{ url('frontend/img/logo.png') }}">
                <h1 id="titlelogin">AWAREPLUS</h1>
            </a>
        </div>

        <div class="container">

            <div id="inner">
                <div class="header1">
                    <h2 id="lgn">otp</h2>
                </div>
                @if (session()->has('success'))
                    <div class="alert-success">
                        <p>{{ session()->get('success') }}</p>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert-danger">
                        <p>{{ session()->get('error') }}</p>
                    </div>
                @endif
                <h2 id="ttl">Enter your otp here</h2>
                <form action="/registration/varification" method= "POST">
                    @csrf

                    <div class="input-group">
                        <input type="number" name="otp" id="otp" required placeholder="otp">
                    </div>
                    <div class="button-group">
                        <button name="login" type="submit" id="loginBtn">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
