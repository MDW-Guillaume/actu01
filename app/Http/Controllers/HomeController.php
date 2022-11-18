<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rubric;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::orderByDesc('id')->get();
        $rubrics = Rubric::get();
        $users = User::get();

        // $article_fait_divers = Article::whereExists(function ($query) {
        //     $query->select('name')
        //         ->from('rubrics')
        //         ->whereColumn('rubrics.id', 'article.rubric_id');
        // })
        //     ->get();

        // dd($articles);

        return view('index', ['articles' => $articles, 'rubrics' => $rubrics, 'users' => $users]);
    }
}
