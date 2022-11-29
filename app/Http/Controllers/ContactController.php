<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function show(){
        return view('contact.show');
    }

    public function store(ContactRequest $request){
        Mail::to('guillaume.couvidou@live.fr')
        ->send(new Contact($request));
        return redirect('contact')->with('status', 'Votre message a été envoyé !');
    }
}
