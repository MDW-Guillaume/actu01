<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveController extends Controller
{
    public function show(){
        $users = User::get();
        $article_recent = DB::table('articles')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->paginate(12);
            
        return view('live.show', ['articles_recents' => $article_recent, 'users' => $users]);
    }
}
