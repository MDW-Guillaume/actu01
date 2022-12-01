<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rubric;
use App\Models\Article;
use Illuminate\Http\Request;

class RubricController extends Controller
{
    public function show($id) {
        $categorie = Rubric::findOrFail($id);
        $users = User::get();
        $articles = Article::where('rubric_id', '=', $id)->paginate(12);

        return view('rubric.show', ['categorie' => $categorie, 'articles' => $articles, 'users' => $users]);
    }
}
