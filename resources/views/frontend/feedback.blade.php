@extends('frontend.layouts.main')@section('main1-container')
<title>Home | Awareplus</title>
<!-- here add some web source -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="{{ url('frontend/css/base.css') }}">
<link rel="shortcut icon" type="x-icon" href="{{ url('frontend/img/logo.png') }}">
<link rel="stylesheet" href="{{ url('frontend/css/feedback.css') }}">
@endsection
@section('main2-container')
<div class="boxcon">
    <div class="titlrep">
        <h2>Feedback</h2>
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
    <form id="frm" action="/feedback" method="post">
        @csrf
        <label id="plabel" for="Problem">Choose a Problem:</label>
        <select name="cars" id="cars">
            <option value="select">--select--</option>
            <option value="Road Work">Road Work</option>
            <option value="Streat light repairing">Streat light repairing</option>
            <option value="Digitalization facilities">Digitalization facilities</option>
            <option value="Water Timing Problem">Water Timing Problem</option>
            <option value="School renovation">School renovation</option>
            <option value="Awaas yojana">Awaas yojana</option>
            <option value="Electricity problem">Electricity problem</option>
        </select>
        <br><br>
        <label for="Feedback">To what extend your Problem has been Solved?</label><br><br>
        <div class="radios">
            <input class="rounds" type="radio" id="vl" name="fb" value="Very less">
            <label class="lbl" for="vl">Very Less</label>
            <input class="rounds" type="radio" id="l" name="fb" value="less">
            <label class="lbl" for="l">Less</label>
            <input class="rounds" type="radio" id="h" name="fb" value="high">
            <label class="lbl" for="h">High</label>
            <input class="rounds" type="radio" id="vh" name="fb" value="Very high">
            <label class="lbl" for="vh">Very High</label>
        </div>
        <br><br>

        <label for="vol">Provide your Gentle <b>Feedback</b></label><br>
        <div class="rangedv">
            <input type="range" id="vol" name="vol" min="0" max="100">
        </div>
        <br>
        <div class="sub">
            <input id="next" type="submit" value="Submit">
        </div>
    </form>
</div>
@endsection
