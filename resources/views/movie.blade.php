@extends('layouts.app')

@section ('content')

<h1 class="text-center py-2">Movie by Andrea Russo</h1>

<div class="container">
    <div class="row row-cols-5 g-4">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{$movie->img}}" alt="">
                <div class="card-body">
                    <h4>{{$movie->title}}</h4>
                    <h6>{{$movie->nationality}}</h6>
                    <p>{{$movie->date}}</p>
                </div>
            </div>

        </div> @empty
        <div class="col"></div>
        @endforelse
    </div>
</div>
@endsection