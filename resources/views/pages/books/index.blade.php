@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <div class="row">
            @foreach ($bookList as $book)
                <div class="col-12 col-md-4 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ $book->cover_image }}" class="card-img-top" alt="{{ $book->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

@endsection
