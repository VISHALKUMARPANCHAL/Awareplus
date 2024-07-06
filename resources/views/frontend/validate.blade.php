<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration | Awareplus</title>
    <script src="https://kit.fontawesome.com/4bd180b75b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" type="x-icon" href="{{url('frontend/img/logo.png')}}">
    <link rel="stylesheet" href="{{url('frontend/css/registration.css')}}">
    <link
        href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&family=Cinzel:wght@400..900&family=Climate+Crisis&family=Kosugi+Maru&family=Rubik+Doodle+Shadow&family=Space+Grotesk:wght@300..700&display=swap"
        rel="stylesheet">

</head>

<body>
    <!-- <div id="topbar">
        <div class="loader" id="loading"></div>
    </div> -->
    <div class="box">
        <div class="container2" id="ct2">
            <a href="/">
            <img id="logologin" src="{{url('frontend/img/logo.png')}}">
            <h1 id="titlelogin">AWAREPLUS</h1>
        </a>
        </div>

        <div class="container">
            <div class="header1">
                <h2 id="lgn">Validation</h2>
            </div>
            <form action="registration" method="post">
                @csrf
                <input class="input-group" type="text" name="otp" required placeholder="OTP">
                <div class="button-group">
                    <button type="submit" id="loginBtn">Validate</button>
                    <div id="load" class="load"></div>

                </div>
            </form>


        </div>
    </div>
</body>

</html>