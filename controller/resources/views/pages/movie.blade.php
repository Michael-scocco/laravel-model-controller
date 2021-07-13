@extends('layouts.main-layout')

@section('title')
    <title>
        {{ $movie['title'] }}
    </title>
@endsection

@section('back-homepage')
    <a href=" {{ route('home') }} ">
        Back to Homepage
    </a>
@endsection

@section('main')
    <main>
        <div class="container">
            <h1>
                {{ $movie['title'] }}
            </h1>
            <ul>
                <li>
                    Original title:
                    {{ $movie['original_title'] }}
                </li>
                <li>
                    Nationality:
                    {{ $movie['nationality'] }}
                </li>
                <li>
                    Release date:
                    {{ $movie['date'] }}
                </li>
                <li>
                    Vote:
                    {{ $movie['vote'] }}
                </li>
            </ul>
        </div>
    </main>
@endsection
