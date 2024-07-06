{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Update your password</h1>
    <form method="post" action="/newpas">
        @csrf
        <input type="text" name="pas" id="" required placeholder="new password">
        <input type="text" name="cpas" id="" required placeholder="confirm password">
        <input type="submit">
    </form>
</body>
</html> --}}





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Awareplus</title>
    <script src="https://kit.fontawesome.com/4bd180b75b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" type="x-icon" href="{{ url('frontend/img/logo.png') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/login.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&family=Cinzel:wght@400..900&family=Climate+Crisis&family=Kosugi+Maru&family=Rubik+Doodle+Shadow&family=Space+Grotesk:wght@300..700&display=swap"
        rel="stylesheet">
    <style>
        #updpas {
            margin: 23px 0px 10px 33px;

        }

        #lgn {
            width: 204px;
            margin: 5px 47px;
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
                    <h2 id="lgn">UpdatePassword</h2>
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
                <h3 id="updpas">Update your password here</h3>
                <form action="/login/forget/otp/newpas" method= "POST">
                    @csrf

                    <div class="input-group">
                        <input type="password" name="pas" id="" required placeholder="new password">
                    </div>
                    <div class="input-group">
                        <input type="password" name="cpas" id="" required placeholder="confirm password">
                    </div>
                    <div class="button-group">
                        <button name="login" type="submit" id="loginBtn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
