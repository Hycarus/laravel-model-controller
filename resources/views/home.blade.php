@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <h1>Home Page</h1>
        <a href="{{ route('movies.index') }}">Movies</a>
        <a href="{{ route('books.index') }}">Books</a>
    </main>

@endsection
