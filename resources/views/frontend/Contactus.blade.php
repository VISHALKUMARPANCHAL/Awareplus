@extends('frontend.layouts.main')
@section('main1-container')
  <title>Home | Awareplus</title>
  <!-- here add some web source -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="{{url('frontend/css/base.css')}}">
  <link rel="shortcut icon" type="x-icon" href="{{url('frontend/img/logo.png')}}">
  <link rel="stylesheet" href="{{url('frontend/css/contactus.css')}}">  
@endsection
@section('main2-container')

  <div class="aboutsection">
    <h1>Contact our Development<br> Team. </h1>
    <h2>_____________________________________<h2><br>
        <h4>Our team has 4 members are as followed:</h4><br>
        <div class="outer">
          <ul class="one">
            <li class="first" id="first1">CHIRAG BHARSHINGBHAI RATHAVA</li>
            <li class="second" id="second1">Team Leader</li>
            <li class="third" id="third1">rathavachirag29@gmail.com</li>
          </ul>
          <ul class="one">
            <li class="first" id="first2">VISHALKUMAR JAGDISHBHAI PANCHAL</li>
            <li class="second" id="second2">Team Member</li>
            <li class="third" id="third2">vishalvishal00339@gmail.com</li>
          </ul>
          <ul class="one">
            <li class="first" id="first3">PARESHBHAI BAKABHAI RATHVA</li>
            <li class="second" id="second3">Team Member</li>
            <li class="third" id="third3">pareshrathva440@gmail.com</li>
          </ul>
          <ul class="one">
            <li class="first" id="first4">ADITYA VIJAYBHAI SORATHIYA</li>
            <li class="second" id="second4">Team Member</li>
            <li class="third" id="third4">sorathiyaaditya9@gmail.com</li>
          </ul>

        </div>
        <br>
        {{-- <form action="/git" method="post">
          <input name="" type="text" required placeholder="Get In Touch">
          <input type="submit">
        </form> --}}
        <h4>Vishwakarma government Engineering collage - CE Department </h4>

  </div>

@endsection