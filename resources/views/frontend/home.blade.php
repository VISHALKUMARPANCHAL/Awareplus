@extends('frontend.layouts.main')@section('main1-container')
<title>Home | Awareplus</title>
<!-- here add some web source -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="shortcut icon" type="x-icon" href="{{url('frontend/img/logo.png')}}">
<link rel="stylesheet" href="{{url('frontend/css/base.css')}}">
<link rel="stylesheet" href="{{url('frontend/css/home.css')}}">  
@endsection
@section('main2-container')


  <!-- background image -->
  <div class="img"></div>
  <!-- about of our website main highlight -->
  <div class="center">
    <div class="title">Know your <br>Rights and be <br>Aware</div>
    <p class="pra">Awareplus is a Awarenes site which is aware people to <br>Around political world and be better
      communicaton <br>Medium between citizen assemblyman.</p>
    <!-- about section button -->
    <div class="btns">
      <a  href="{{url('/about')}}">
        <button id="readmore"  href="{{url('/about')}}">Read More</button>
        <a>
    </div>
  </div>
  {{-- {{$temp=session()->get('id'); }} --}}
  {{-- <h1>{{$data1->Name}}</h1> --}}
{{--   
  <div class="table">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->Name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  --}}
@endsection