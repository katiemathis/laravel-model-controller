@extends('layouts.base')

@section('pageTitle', 'Lista dei film')

@section('content')

    <div class="container">
        @foreach ($movies as $movie)
            <div class="product-card">
                <h2>{{$movie['id']}} - {{$movie['title']}}</h2>
                <h4>Original Title: {{$movie['original_title']}}</h4>
                <p>Nationality: {{$movie->nationality}}</p>
                <p>Release Date: {{$movie->date}}</p>

            </div>
        @endforeach

    </div>


@endsection


