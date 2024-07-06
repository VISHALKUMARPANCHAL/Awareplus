@extends('frontend.layouts.main')@section('main1-container')
<title>Home | Awareplus</title>
<!-- here add some web source -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="{{ url('frontend/css/base.css') }}">
<link rel="stylesheet" href="{{ url('frontend/css/report.css') }}">
<link rel="shortcut icon" type="x-icon" href="{{ url('frontend/img/logo.png') }}">
@endsection
@section('main2-container')
<div class="boxcon">
    <form action="/report" enctype="multipart/form-data" method="post">
        @csrf
        <div class="titlrep">
            <h2>Report</h2>

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
        <h4>Describe your problem here</h4><br>
        <textarea name="text" id="txt" cols="30" rows="10"></textarea>
        <!-- <input type="text" id="fname" name="fname" ><br><br> -->
        <h4>Upload respected image here</h5>
            <h5>Note:Make sure your image in .jpg/.png/.jpeg format only</h3><br>
                <div class="fileadd">
                    <input type="file" id="myFile" name="image"><br><br>
                </div>
                <div class="sub">
                    <input id="submit1" type="submit" value="Send">
                </div>
    </form>
</div>
@endsection
