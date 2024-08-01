@extends('templates.index')

@section('content')
    <div class="general">
        <h4 class="latest-text w3_latest_text">Search Result</h4>
        @if ($film)
            <div class="film-item" style="padding-left: 100px">
                <h3>{{ $film->title }}</h3>
                <img src="{{ $film->poster }}" alt="{{ $film->title }}">
                <p>Year : {{ $film->year }}</p>
                <p>{{ $film->sinopsis }}</p>
            </div>
        @else
        <h3 style="padding-left: 100px">No films found for "{{ request()->input('search') }}"{{ request()->input('year') ? ' in year ' . request()->input('year') : '' }}</h3>
        @endif
    </div>

    <style>
        .film-item {
            max-width: 300px;
            padding: 15px;
            margin-bottom: 15px;
        }
    </style>
@endsection
