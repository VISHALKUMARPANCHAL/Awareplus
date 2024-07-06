<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration | Awareplus</title>
    <script src="https://kit.fontawesome.com/4bd180b75b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ url('frontend/css/registration.css') }}">
    <link rel="shortcut icon" type="x-icon" href="{{ url('frontend/img/logo.png') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&family=Cinzel:wght@400..900&family=Climate+Crisis&family=Kosugi+Maru&family=Rubik+Doodle+Shadow&family=Space+Grotesk:wght@300..700&display=swap"
        rel="stylesheet">
    <style>
        .popup8 {
            display: none;
            /* Initially hidden */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            /* Semi-transparent background */
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .popup-content8 {
            border: 2px solid white;
            border-radius: 7px;
            height: 237px;
            width: 392px;
            background-color: white;
            border-radius: 5px;
            text-align: center;
            width: 300px;
            */ position: relative;
            transform: translateY(-100%);
            transition: transform 0.5s ease-out;
        }

        .popup8.show .popup-content8 {
            transform: translateY(0);
        }

        .close-btn8 {
            top: 10px;
            right: 224px;
            font-size: 24px;
            cursor: pointer;
        }

        .spanin {
            margin: 8px 0px 0px -2px;
            color: white;
            background-color: black;
            border: 2px solid black;
            height: 27px;
            width: 300px;

        }

        .modal-content p {

            text-align: left;
        }
    </style>
</head>

<body>
    <!-- <div id="topbar">
        <div class="loader" id="loading"></div>
    </div> -->
    <div class="box">
        <div class="container2" id="ct2">
            <a href="/">
                <img id="logologin" src="{{ url('frontend/img/logo.png') }}">
                <h1 id="titlelogin">AWAREPLUS</h1>
            </a>
        </div>

        <div class="container">
            <div class="header1">
                <h2 id="lgn">SignUp</h2>
            </div>
            <form action="/registration" method="post">
                @csrf
                <h4 id="lb">Signup as:</h4>
                <input class="rounds" type="radio" id="vl" name="fb"checked value="Candidate">
                <label class="lbl" for="vl">Candidate</label>
                <input class="rounds" type="radio" id="sl" name="fb" value="Politician">
                <label class="lbl" for="sl">Politician</label>
                <input class="input-group" type="text" id="name" name="fullname" required
                    placeholder="Full Name*">
                <input class="input-group" type="email" id="loginEmail" name="loginEmail" required
                    placeholder="Email id*">
                <input class="input-group" type="number" id="mobileno" name="monum" required
                    placeholder="Mobile No*">
                <input class="input-group" type="date" id="dob" name="dob" required
                    placeholder="Date of birth">
                <input class="input-group" type="text" id="address" name="address" required
                    placeholder="Location*">
                <input class="input-group" type="password" id="loginPassword" name="loginPassword" required
                    placeholder="Password*">
                <input class="input-group" type="password" id="confirmPassword" name="confirmPassword" required
                    placeholder="Confirm Password*">
                <div class="tc1">
                    <input class="input-group" type="checkbox" id="tac" name="tac" required placeholder="">
                    <label for="tac" id="fortac">By registering, You agree to the Terms, Conditions and Policies
                        of
                        awareplus & Privacy
                        Policy <a id="faq1" id="faq1">click here</a>
                        to know Terms &
                        Conditions*</label>
                </div>

                <div class="button-group">
                    <button type="submit" id="loginBtn">SIGNUP</button>

                </div>
            </form>
            <div id="line"></div>

            <div class="btn">
                <h5>Already Registered? Login here</h5>
                <a href="/login">
                    <button id="signupBtn">LOGIN</button>
                </a>
            </div>

        </div>
    </div>
    <div id="loginPopup8" class="popup8">
        <div class="popup-content8">
            <div id="mydiv" class="modal">
                <div class="modal-content">
                    <div class="spanin">
                        <span class="close-btn8" id="closeBtn8">&times;</span>
                    </div>
                    <p><strong>Here are some Point wise terms and condition mentioned below:</strong><br><br>
                        Note : if you are part of Awareplus family then strickly follow these terms and conditions. <br>
                        1. A 2. B 3. C 4. D 5. E 6. F 7. G 8. H<br> 9. I 10. J 11. K 12. L 13. M 14. N 15. O<br> 16.
                        P 17. Q 18. R 19. S 20. T 21. U 22. V 23. W 24. X 25. Y 26. Z </p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('frontend/js/registration.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var loginBtn = document.getElementById("faq1");
            var loginPopup = document.getElementById("loginPopup8");
            var popupContent = document.querySelector(".popup-content8");
            var closeBtn = document.getElementById("closeBtn8");

            loginBtn.addEventListener("click", function() {
                loginPopup.classList.add("show");
                loginPopup.style.display = "flex";
            });

            closeBtn.addEventListener("click", function() {
                loginPopup.classList.remove("show");
                setTimeout(function() {
                    loginPopup.style.display = "none";
                }, 500); // match the transition duration
            });

            window.addEventListener("click", function(event) {
                if (event.target == loginPopup) {
                    loginPopup.classList.remove("show");
                    setTimeout(function() {
                        loginPopup.style.display = "none";
                    }, 500); // match the transition duration
                }
            });
        });
    </script>
</body>

</html>
