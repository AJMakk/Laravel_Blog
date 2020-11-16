<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        //render a list of articles
        $articles = Article::latest()->get();

        return view('articles', ['articles' => $articles]);
    }

    public function userIndex()
    {

        $articles = Auth()->user()->articles;

        return view('myarticles', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        //show a single article

        return view('article.article', ['article' => $article]);
    }

    public function create()
    {
        return view('article.create');
    }

    public function store()
    {
        Article::create(request()->validate([
            'title' => 'required',
            'body' => 'required',
            'user_id'=>'required'
        ]));


        return redirect('/articles');

    }

    public function edit(Article $article)
    {
        $article_author_id = $article->user_id;
        $user_id = Auth()->id();

        if($article_author_id === $user_id)
        {
            return view('article.edit', ['article' => $article]);
        }
        else
        {
            return redirect($article->path());
        }
    }

    public function update(Article $article)
    {
        $article->update(request()->validate([
            'title' => 'required',
            'body' => 'required',
            'user_id'=> 'required'
        ]));


        return redirect($article->path());

    }

    public function delete(Article $article)
    {
        $article_author_id = $article->user_id;
        $user_id = Auth()->id();

        if($article_author_id === $user_id)
        {
            $article = Article::find($article->id);
            $article->delete();

            return redirect(route('articles.showAll'));
        }
        else
        {
            return redirect($article->path());
        }
    }
}

