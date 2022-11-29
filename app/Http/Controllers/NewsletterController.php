<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\NewsletterRequest;

class NewsletterController extends Controller
{
    public function show()
    {
        return view('newsletter.show');
    }

    public function store(NewsletterRequest $request)
    {

        $newsletter = new Newsletter;

        $count = Newsletter::where('email', $request->email)->count();

        if($count == 0){
            Newsletter::create(
                [
                    'email' => $request->email
                ]
            );
            return redirect('/')->with('status', 'Inscription enregistrée !');
        }else{
            return redirect('/')->with('status', 'Email déjà enregistré !');
        }
        // dd($request->email);
    }
}
