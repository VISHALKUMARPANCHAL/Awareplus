<script src="https://kit.fontawesome.com/4bd180b75b.js" crossorigin="anonymous"></script>
<style>
    body,
    html {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .container {
        text-align: center;
    }

    .searchButton {
        font-size: 16px;
        cursor: pointer;
    }

    .popup {
        display: none;
        /* Initially hidden */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* Semi-transparent background */
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .popup-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 35px;
        text-align: center;
        width: 355px;
        position: relative;
        transform: translateY(-100%);
        transition: transform 0.5s ease-out;
    }

    .popup.show .popup-content {
        transform: translateY(0);
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 24px;
        cursor: pointer;
    }


    #back {
        margin-top: 16px;
        color: black;
        border-bottom-left-radius: 10px;
        border-top-left-radius: 10px;
        border: 2px solid black;
        background-color: white;
        height: 25px;
        width: 75px;
        margin-right: 125px;
    }

    #back:hover {
        color: white;
        border: 2px solid black;
        background-color: black;
        height: 25px;
        width: 75px;
        cursor: pointer;

    }

    #loginBtn {
        padding: 3px 7px;
        margin-right: 1px;
        justify-content: center;
        display: flex;
        align-items: center;
        background-color: #8b8b8b;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        height: 44px;
        width: 60px;
        border: 2px solid #8b8b8b;
        cursor: pointer;
        margin-top: -32px;


    }

    #loginBtn:hover {
        color: white;

    }

    .btnlgt {
        display: flex;
        flex-direction: row-reverse;
    }

    .btnlgt a {
        margin-top: 25px
    }

    .titleplus {
        margin-top: 12px;
    }

    #id {

        font-size: 13px;
        margin: 7px 0 0px 0px;
        border-radius: 8px;
        border: 2px solid lime;
        background-color: lime;
        height: 20px;
        width: 65px;
    }

    #type {

        font-size: 13px;
        margin: 7px 0 0px 122px;
        border-radius: 8px;
        border: 2px solid lime;
        background-color: lime;
        height: 21px;
        width: 93px;

    }

    #title3 {
        margin-left: 13px;
        color: white;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
        border: 2px solid black;
        background-color: black;
        height: 31px;
        width: 280px;
    }

    .idtype {
        font: status-bar;
        display: flex;
    }

    .btn11 {
        margin-top: 16px;
        color: black;
        border-bottom-right-radius: 10px;
        border-top-right-radius: 10px;
        border: 2px solid black;
        background-color: white;
        height: 25px;
        width: 75px;
    }

    .btn11:hover {
        color: white;
        border: 2px solid black;
        background-color: black;
        height: 25px;
        width: 75px;
        cursor: pointer;

    }

    #changable {
        margin-left: 13px;
        height: 321px;
        width: 280px;

    }

    #editable {
        margin-top: 10px;
        margin-left: 13px;
        width: 280px;
        height: 330px;
        font-weight: unset;
    }

    #editable input {
        font: status-bar;
        font-size: 15px;
        width: 100%;
        margin: 0 0 7px 0px;
    }

    #changable h3 {

        font: status-bar;
        margin-bottom: 9px;
        display: flex;
        font-size: 17px;
        justify-content: left;
    }
</style>

</head>

<body>
    <!-- navigation bar -->
    <input type="checkbox" id="check">
    <label for="check" class="button">
        <span></span>
        <span></span>
        <span></span>
    </label>
    <nav>

        <div class="logo">
            <img id="logo1" src="{{ url('frontend/img/logo.png') }}" alt="logo" width="300" height="300">
            <div class="titleplus">

                <a id="aware" href="{{ url('/') }}">AwarePlus</a>
            </div>
        </div>
        <div class="menu">
            <!-- logo and title -->
            <!-- some featured links -->
            {{-- $can="Candidate"; --}}
            @if (Session::get('type') == 'Politician')
                <ul id="navbtn">
                    <li><a id="home1" href="{{ url('/') }}">Home</a></li>
                    <li><a id="feedback" href="{{ url('/Afeedback') }}">Feedback</a></li>
                    <li><a id="report" href="{{ url('/managereport') }}">Report</a></li>
                    <li><a id="user" href="{{ url('/manageuser') }}">User</a></li>
                    <li><a id="faq" href="{{ url('/managefaq') }}">FAQ</a></li>
                    <li><a id="about" href="{{ url('/about') }}">About</a></li>
                </ul>
            @else
                <ul id="navbtn">
                    <li><a id="home1" href="{{ url('/') }}">Home</a></li>
                    <li><a id="feedback" href="{{ url('/feedback') }}">Feedback</a></li>
                    <li><a id="report" href="{{ url('/report') }}">Report</a></li>
                    <li><a id="about" href="{{ url('/about') }}">About</a></li>
                    <li><a id="faq" href="{{ url('/faq') }}">FAQ</a></li>
                    <li><a id="contactus" href="{{ url('/contactus') }}">ContactUs</a></li>
                </ul>
            @endif
            <!-- search bar -->
            <div class="wrap">
                {{-- <div class="search">
                    <input type="text" class="searchTerm" placeholder="What are you looking for?">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </div> --}}
                @if (session()->has('id'))
                    <div class="btnlgt">
                        <a href="/logout"><button>Logout</button></a>
                        <i id="loginBtn" class="fa-solid fa-user" style="font-size: 40px;"></i>
                    </div>
                @else
                    <div class="btnlg">
                        <a href="{{ url('/login') }}"><button id="login">Login</button></a>
                    </div>
                @endif
            </div>
        </div>

        <div id="loginPopup" class="popup">
            <div class="popup-content">
                <span class="close-btn" id="closeBtn">&times;</span>
                <h2 id="title3">Profile</h2>
                <div id="changable">
                    <div class="idtype">
                        <h4 id="id"> ID: {{ session()->get('id') }}</h4>
                        <h4 id="type">{{ session()->get('type') }}</h4>
                    </div><br>
                    Email <h3>{{ session()->get('mail') }}</h3>
                    name <h3>{{ session()->get('name') }}</h3>
                    mo <h3>{{ session()->get('mo') }}</h3>
                    dob <h3>{{ session()->get('dob') }}</h3>
                    address <h3>{{ session()->get('address') }}</h3>
                    <button id="btn1" class="btn11">Edit</button>
                </div>
                <div id="editable">
                    Email <br><input type="text" name="mail" class="inp1" disabled
                        value="{{ session()->get('mail') }}"><br>
                    id <br><input type="number" name="id" class="inp1" disabled
                        value="{{ session()->get('id') }}"><br>
                    <form action="/" method="POST">
                        @csrf
                        <input type="number" name="id" class="inp1" hidden value="{{ session()->get('id') }}">
                        name <br><input type="text" name="name" class="inp1"
                            value="{{ session()->get('name') }}"><br>
                        mo <br><input type="number" name="mo" class="inp1"
                            value="{{ session()->get('mo') }}"><br>
                        dob <br><input type="date" name="dob" class="inp1"
                            value="{{ session()->get('dob') }}"><br>
                        address <br><input type="text" name="address" class="inp1"
                            value="{{ session()->get('address') }}"><br>
                        <button id="back">back</button>
                        <button type="submit"class="btn11">save</button>
                    </form>
                </div>
            </div>
        </div>

    </nav>
    <script>
        document.getElementById("editable").style.display = "none";
        document.getElementById("back").style.display = "none";

        document.addEventListener("DOMContentLoaded", function() {
            var loginBtn = document.getElementById("loginBtn");
            var loginPopup = document.getElementById("loginPopup");
            var popupContent = document.querySelector(".popup-content");
            var closeBtn = document.getElementById("closeBtn");

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

            // window.addEventListener("click", function(event) {
            //     if (event.target == loginPopup) {
            //         loginPopup.classList.remove("show");
            //         setTimeout(function() {
            //             loginPopup.style.display = "none";
            //         }, 500); // match the transition duration
            //     }
            // });
            document.getElementById("btn1").addEventListener("click", function() {
                document.getElementById("back").style.display = "";
                document.getElementById("changable").style.display = "none";
                document.getElementById("closeBtn").style.display = "none";
                document.getElementById("editable").style.display = "";
            });
            document.getElementById("back").addEventListener("click", function() {
                document.getElementById("back").style.display = "none";
                document.getElementById("changable").style.display = "";
                document.getElementById("editable").style.display = "none";
            });
        });
    </script>
