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

    public function update(UserRequest $request){

        // dd(Auth::user()->id);

        $update_user = new User;

        $me = User::where('id', Auth::user()->id)->firstOrFail();

        $me->name = $request->name;
        $me->email = $request->email;
        $me->save();
        return redirect()->route('mon-compte')->with('status', 'Vos informations ont étés modifiées');
        // dd($request->email);
        
    }
}
