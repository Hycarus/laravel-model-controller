@extends('layouts.app')

@section('title', 'Book Details')

@section('content')
    <main>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3 py-2">
                <div class="card">
                    <img src="{{ $book->cover_image }}" class="card-img-top" alt="{{ $book->title }}">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{ $book->title }}</h5>
                        <p class="card-text">Descrizione: {{ $book->plot }}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
