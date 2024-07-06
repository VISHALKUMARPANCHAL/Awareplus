@extends('frontend.layouts.main')@section('main1-container')
<title>Admin | Awareplus</title>
<!-- here add some web source -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="{{url('frontend/css/base.css')}}">
<link rel="shortcut icon" type="x-icon" href="{{url('frontend/img/logo.png')}}">
<link rel="stylesheet" href="{{url('frontend/css/Afeedback.css')}}">  
@endsection
@section('main2-container')

@php
$num1 = 0;
$num2 = 0;
$num3 = 0;
$num4 = 0;
$num5 = 0;
$num6 = 0;
$num7 = 0;
$cout1 = 0;
$cout2 = 0;
$cout3 = 0;
$cout4 = 0;
$cout5 = 0;
$cout6 = 0;
$cout7 = 0;
@endphp
@foreach ($data as $feedback)
    @if ($feedback->Problem === 'Road Work')
        @php
            $num1 += $feedback->range;
            $cout1++;
        @endphp
    @endif
    @if ($feedback->Problem === 'Streat light repairing')
        @php
            $num2 += $feedback->range;
            $cout2++;
        @endphp
    @endif
    @if ($feedback->Problem === 'Digitalization facilities')
        @php
            $num3 += $feedback->range;
            $cout3++;
        @endphp
    @endif
    @if ($feedback->Problem === 'Water Timing Problem')
        @php
            $num4 += $feedback->range;
            $cout4++;
        @endphp
    @endif
    @if ($feedback->Problem === 'School renovation')
        @php
            $num5 += $feedback->range;
            $cout5++;
        @endphp
    @endif
    @if ($feedback->Problem === 'Awaas yojana')
        @php
            $num6 += $feedback->range;
            $cout6++;
        @endphp
    @endif
    @if ($feedback->Problem === 'Electricity problem')
        @php
            $num7 += $feedback->range;
            $cout7++;
        @endphp
    @endif
@endforeach
@php
    if ($num1 > 0) {
        $num1 = $num1 / $cout1;
    }
    if ($num2 > 0) {
        $num2 = $num2 / $cout2;
    }
    if ($num3 > 0) {
        $num3 = $num3 / $cout3;
    }
    if ($num4 > 0) {
        $num4 = $num4 / $cout4;
    }
    if ($num5 > 0) {
        $num5 = $num5 / $cout5;
    }
    if ($num6 > 0) {
        $num6 = $num6 / $cout6;
    }
    if ($num7 > 0) {
        $num7 = $num7 / $cout7;
    }
@endphp
<div class="conclu">
    <table>
        <tr>
            <th class="upheader" colspan="2">Feedback Summery</th>
        </tr>
        <tr class="dhead">
            <th>Work</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>Road Work</td>
            <td>
                <div class="progress-bar">
                    <div class="progress" style="width: {{$num1}}%;"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>Streat light repairing</td>
            <td><div class="progress-bar">
                    <div class="progress" style="width: {{$num2}}%;"></div>
                </div></td>
        </tr>
        <tr>
            <td>Digitalization facilities</td>
            <td><div class="progress-bar">
                    <div class="progress" style="width: {{$num3}}%;"></div>
                </div></td>
        </tr>
        <tr>
            <td>Water Timing Problem</td>
            <td><div class="progress-bar">
                    <div class="progress" style="width: {{$num4}}%;"></div>
                </div></td>
        </tr>
        <tr>
            <td>School renovation</td>
            <td><div class="progress-bar">
                    <div class="progress" style="width: {{$num5}}%;"></div>
                </div></td>
        </tr>
        <tr>
            <td>Awaas yojana</td>
            <td><div class="progress-bar">
                    <div class="progress" style="width: {{$num6}}%;"></div>
                </div></td>
        </tr>
        <tr>
            <td>Electricity problem</td>
            <td><div class="progress-bar">
                    <div class="progress" style="width: {{$num7}}%;"></div>
                </div></td>
        </tr>
    </table>
   
</div>
<div class="table">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Problem</th>
                <th>Feedback</th>
                <th>range</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->Problem }}</td>
                    <td>{{ $item->Feedback }}</td>
                    <td>{{ $item->range }}</td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection