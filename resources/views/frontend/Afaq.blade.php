@extends('frontend.layouts.main')@section('main1-container')
<title>Admin | Awareplus</title>
<!-- here add some web source -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="{{ url('frontend/css/base.css') }}">
<link rel="stylesheet" href="{{ url('frontend/css/Afaq.css') }}">
<link rel="shortcut icon" type="x-icon" href="{{ url('frontend/img/logo.png') }}">
@endsection
@section('main2-container')
<div class="table">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Que</th>
                <th>Ans</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->Que }}</td>
                    <td>

                        @if (!$item->Ans)
                            <form method="post" action="{{ route('update', ['id' => $item->id]) }}">
                                @csrf
                                <input id="faqque" name="ans" type="text" required
                                    placeholder="Enter the Ans">
                                <input id="faqsubmit" type="submit" value="send">
                            </form>
                        @else
                            <p>Answer: {{ $item->Ans }}</p>
                        @endif
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
