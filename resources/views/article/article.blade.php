@extends('layout')

@section ('content')

    <h1>here is your article!</h1>

    <article class='card'>
        <h2><u>{{$article->title}}</u></h2>
        <p>{{$article->body}}</p>
    </article>

    @if ($article->user_id === Auth()->id())

        <form action="http://localhost:8000/articles/{{$article->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" name="delete" value="delete" class="btn-link">Delete this article.</button>
        </form>

        <a href="http://localhost:8000/articles/{{$article->id}}/edit">Edit this article.</a>
    @endif

    @foreach($article->comments as $comment)
    @endforeach
    <form method="POST" action="/articles/{{$article->id}}">
        @csrf
        <div class="field">
            <label class="label" for="comments">Comments</label>

            <div class="control">
                <input class="input" type="text" name="comment" id="comment" value="{{$article->comments}}">
            </div>
        </div>
        <button type="submit" name="insert" value="insert" class="btn-link">insert comment.</button>

@endsection

