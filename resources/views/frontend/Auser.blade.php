@extends('frontend.layouts.main')@section('main1-container')
<title>Admin | Awareplus</title>
<!-- here add some web source -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="{{url('frontend/css/base.css')}}">
<link rel="shortcut icon" type="x-icon" href="{{url('frontend/img/logo.png')}}">
<link rel="stylesheet" href="{{url('frontend/css/Auser.css')}}">  
@endsection
@section('main2-container')
<h1>Candidates</h1> 

<div class="table">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mo</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            @if($item->type=='Candidate')
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->Name }}</td>
                <td>{{ $item->Email }}</td>
                <td>{{ $item->Mo }}</td>
                <td>{{ $item->DOB }}</td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>

@endsection