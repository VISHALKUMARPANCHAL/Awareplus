@extends('frontend.layouts.main')@section('main1-container')
<title>Admin | Awareplus</title>
<!-- here add some web source -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="shortcut icon" type="x-icon" href="{{ url('frontend/img/logo.png') }}">
<link rel="stylesheet" href="{{ url('frontend/css/base.css') }}">
<link rel="stylesheet" href="{{ url('frontend/css/Areport.css') }}">
@endsection
@section('main2-container')
<div class="table">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>desc</th>
                {{-- <th>Photo</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->desc }}</td>
                    {{-- <td>
                        <img src="{{url('frontend/storage/temp.png')}}" alt="" width="50" height="50">    
                    
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- <img src="./pic.png" alt="" width="50" height="50">    --}}
@endsection
