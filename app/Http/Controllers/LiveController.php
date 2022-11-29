<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveController extends Controller
{
    public function show(){
        $article_recent = DB::table('articles')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
            
        return view('live.show', ['articles_recents' => $article_recent]);
    }
}
