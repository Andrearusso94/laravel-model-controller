@extends('layouts.app')

@section ('content')

<h1 class="text-center py-2">Movie by Andrea Russo</h1>

<div class="container">
    <div class="row row-cols-5">
        @forelse($movies as $movie)
        <div class="col">
            <img class="card-img-top" src="{{$movie->img}}" alt="">
            <h3>{{$movie->title}}</h3>
            <h5>{{$movie->nationality}}</h5>
            <p>{{$movie->date}}</p>
        </div>
        @empty
        <div class="col"></div>
        @endforelse
    </div>
</div>

@endsection