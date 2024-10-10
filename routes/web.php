<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'articles' => Article::latest()->get()
    ]);
});

Route::get('/posts/{article:id}', function (Article $article) {
    return Inertia::render('Show', [
        'article' => $article
    ]);
})->name('article.show');
