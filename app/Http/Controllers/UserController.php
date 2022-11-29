<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileUpdateRequest;

class UserController extends Controller
{
    public function show(){
        $user_info = Auth::user();

        $user_articles = Article::where('user_id', Auth::user()->id)->get();
        
        // Articles enregistrés
        
        return view('mon-compte.show', ['user_info' => $user_info, 'user_articles' => $user_articles]);
    }

    public function store(UserRequest $request){

        dd($request);
        // $update_user = new User;

        // $count = User::where('email', $request->email)->count();
        
    }
}
