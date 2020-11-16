@extends('layout')

@section ('content')

    <h1> here are all your articles, {{ Auth::user()->name }}!</h1>

    <a href="http://localhost:8000/articles/create">Create an article.</a>

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
