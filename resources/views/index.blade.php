@extends('layouts.base')

@section('pageTitle', 'Lista dei film')

@section('content')
    <ul>
        @foreach ($movies as $movie)
        <li>{{$movie['id']}} - {{$movie['title']}} - {{$movie['original_title']}} - {{$movie->nationality}} - {{$movie->date}}</li>
        @endforeach
    </ul>

@endsection