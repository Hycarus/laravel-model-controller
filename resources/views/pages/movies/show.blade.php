@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3 py-2">
                <div class="card">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{ $movie->title }}</h5>
                        <h5 class="card-title">Titolo originale: {{ $movie->original_title }}</h5>
                        <h5 class="card-title">Lingua: {{ $movie->language }}</h5>
                        <h5 class="card-title">Voto: {{ $movie->vote }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
