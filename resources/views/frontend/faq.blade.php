@extends('frontend.layouts.main')
@section('main1-container')
    <title>Home | Awareplus</title>
    <!-- here add some web source -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('frontend/css/base.css') }}">
    <link rel="shortcut icon" type="x-icon" href="{{ url('frontend/img/logo.png') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/faq.css') }}">
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
            /* background-color: #fff;
                                                                                                                                                    padding: 20px;
                                                                                                                                                    border-radius: 5px;
                                                                                                                                                    text-align: center;
                                                                                                                                                    width: 300px; */
            position: relative;
            transform: translateY(-100%);
            transition: transform 0.5s ease-out;
        }

        .popup8.show .popup-content8 {
            transform: translateY(0);
        }

        .close-btn8 {

            color: white;
            position: absolute;
            top: 10px;
            right: 224px;
            font-size: 24px;
            cursor: pointer;
        }

        .quebox h3 {
            color: white;
            background-color: black;
            height: 28px;
            width: 366px;
            display: flex;
            justify-content: center;
            margin-left: 58px;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
            border: 2px solid black;
        }

        .quebox form {
            margin-left: 57px;
            width: 363px;
        }
    </style>
@endsection
@section('main2-container')
    <div class="con2">
        <!-- FAQ Section -->
        <div id="conta2">
            <h3>There are many frequently Ask Questions (FAQ) are listed below :</h3>
            @foreach ($data as $item)
                @if ($item->Ans)
                    <div class="inner">
                        <h4>Question: {{ $item->Que }}</h4>
                        <p>Answer: {{ $item->Ans }}</p>
                    </div>
                @endif
            @endforeach
            <div class="didnt">
                <!-- Open modal popup on button click -->
                <h4>Didn't find your Question? Send your Question <button id="faq1">here</button></h4>
            </div>
        </div>

        <!-- Modal popup -->

    </div>
    {{-- <div class="container8">
        <button id="loginBtn8">Login</button>
    </div> --}}

    <div id="loginPopup8" class="popup8">
        <div class="popup-content8">
            <div id="mydiv" class="modal">
                <div class="modal-content">
                    <span class="close-btn8" id="closeBtn8">&times;</span>
                    <div class="quebox">
                        <h3>FAQ</h3>
                        <!-- Form inside the modal -->
                        <form action="/faq" method="post">
                            @csrf
                            <input id="data" type="tel" id="que"
                                name="que"placeholder="Enter your Question" required>
                            {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
                            <input id="btn2" type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        // document.getElementById("faq1").addEventListener("click", function() {
        //     document.getElementById("mydiv").style.display = "";
        //     document.getElementById("conta2").style.display = "none";

        // });
        // document.getElementById("btn2").addEventListener("click", function() {
        //     const q = document.getElementById("que").value;
        //     if (q === "") {
        //         alert("Please write your question");
        //     } else {
        //         alert("your question is send successfully! We will reply you soon...");
        //         window.location.href = "/faq";
        //     }
        // });
    </script>
@endsection
