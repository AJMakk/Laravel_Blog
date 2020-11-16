@extends('layout')

@section ('content')

<h1> Home Page enjoy all the articles, {{ Auth::user()->name }}!</h1>

    @foreach ($articles as $article)
    <div class="content">
        <div class="title">
            <h2>
                <a href="/articles/{{ $article->id }}">
                    {{$article->title}}
                </a>
            </h2>
        </div>
    </div>
    @endforeach

@endsection
