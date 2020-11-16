<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Knowledge Blog</title>
        <link rel="stylesheet" href="/css/styling.css">
    </head>
    <body>
        <div class="header">
            <div class="header-right">
              <a class="active" href="http://localhost:8000/articles">All Articles</a>
              <a href="http://localhost:8000/myarticles">My Articles</a>
              <a href="http://localhost:8000/home">Home</a>
            </div>
        </div>
          @yield('content')
    </body>
</html>
