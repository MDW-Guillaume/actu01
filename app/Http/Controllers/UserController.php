<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show(){
        $user_info = Auth::user();

        $user_articles = Article::where('user_id', Auth::user()->id)->get();
        
        // Articles enregistrés
        
        return view('mon-compte.show', ['user_info' => $user_info, 'user_articles' => $user_articles]);
    }
}
