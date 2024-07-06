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
                    <h2 id="lgn">Login</h2>
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
                <form action="/login" method= "post">
                    @csrf

                    <div class="input-group">
                        <input type="email" id="loginEmail" name="loginEmail" required placeholder="Email id">
                    </div>
                    <div class="input-group">
                        <input type="password" id="loginPassword" name="loginPassword" required placeholder="Password">
                        <!-- <i class="bi bi-eye-slash" ></i> -->
                        {{-- <i class="bi bi-eye-slash" id="togglePassword"></i> --}}
                    </div>
                    <a href="/login/forget" id="fps">Forget Password?</a>

                    {{-- <div class="captcha" id="boxin"> --}}
                    {{-- <img id="imgofcpch" src="captcha.blade.php" /> --}}
                    {{-- <input type="number" id="cpch" name="captcha" required placeholder="capcha">
                        <span>{!!captcha_img()!!}</span> --}}
                    {{-- <button type="button" id="reload">
                             &#x21bb;
                        </button> --}}
                    {{-- @error('captcha')
                            <label for="">{{$message}}</label>
                        @enderror --}}
                    {{-- </div> --}}
                    <div class="button-group">
                        <button name="login" type="submit" id="loginBtn">LOGIN</button>
                    </div>
                </form>
                <div id="line"></div>
                <div class="btn">
                    <h5>Don't have an Account? SignUp here</h5>
                    <a href="/registration">
                        <button id="signupBtn">SIGNUP</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('frontend/js/login.js') }}">
        $(#reload).click(functin() {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha)
                }
            });
        });
    </script>
</body>

</html>
