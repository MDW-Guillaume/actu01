<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id){
        $article = Article::findOrFail($id);
        $users = User::get();
        $similar_articles = Article::where('id', '>', $id)->take(3)->get();

        $count_word_article = str_word_count($article->content);
        $tempslecture = round($count_word_article / 30);

        return view('article.show', ['article' => $article, 'users' => $users, 'tempslecture' => $tempslecture, 'similar_articles' => $similar_articles]);
    }
}
