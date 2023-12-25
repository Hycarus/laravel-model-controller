@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <div class="row">
            @foreach ($movieList as $movie)
                <div class="col-12 col-md-4 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->itle }}</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

@endsection
