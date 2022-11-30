<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;

class SearchController extends Controller
{
    public function index(SearchRequest $request){
        $user  = User::all();
        $search = Article::where('name', 'like', '%' . $request->search . '%')->get();
        
        return view('search.index')->with(['results' => $search, 'users' => $user]);
    }   
}
