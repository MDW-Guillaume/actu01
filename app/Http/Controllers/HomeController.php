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
        $all_rubrics_id = array();


        $categories = ['Faits divers', 'Sports', 'Culture'];
        foreach ($categories as $categorie) {
            $rubric_id = Rubric::select('id')->where('name', $categorie)->get();
            array_push($all_rubrics_id, $rubric_id);
        }

        $article_fait_divers = DB::table('articles')
            ->where('rubric_id', '=', $all_rubrics_id[0][0]['id'])
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        $article_sports = DB::table('articles')
            ->where('rubric_id', '=', $all_rubrics_id[1][0]['id'])
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        $article_culture = DB::table('articles')
            ->where('rubric_id', '=', $all_rubrics_id[2][0]['id'])
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        $article_populaire = DB::table('articles')
            ->orderBy('read', 'desc')
            ->take(6)
            ->get();
        
        $article_recent = DB::table('articles')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        

            // dd($article_fait_divers) ;



        return view('index', [
            'articles' => $articles, 
            'rubrics' => $rubrics, 
            'users' => $users, 
            'articles_divers' => $article_fait_divers, 
            'articles_sport' => $article_sports, 
            'articles_culture' => $article_culture,
            'divers_id' => $all_rubrics_id[0][0]['id'],
            'sport_id' => $all_rubrics_id[1][0]['id'],
            'culture_id' => $all_rubrics_id[2][0]['id'],
            'articles_populaires' => $article_populaire,
            'articles_recents' => $article_recent
        ]);
    }
}
