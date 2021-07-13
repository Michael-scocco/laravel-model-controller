@extends('layouts.main-layout')

@section('title')
    <title>
        Movies Homepage
    </title>
@endsection

@section('main')
    <main>
        <div class="container">
            <ul>
                @foreach ($movies as $movie)
                    <li>
                        <a href=" {{ route('movie', $movie -> id) }}">
                            {{ $movie['title']}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection
