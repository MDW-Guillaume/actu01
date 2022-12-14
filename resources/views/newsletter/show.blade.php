@extends('layout.app')

@section('title')
    Newsletter
@endsection

@section('content')
    <div class="container">
        <div class="newsletter">
            <h2>Newsletter</h2>

            <div class="newsletter_content">
                <p>Recevez vos actualités quotidiennement !</p>
                <form action="#" method="post" id="formulaire">
                    <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
                    <input type="email" name="email" id="email">
                    <input type="submit" value="S'abonner" id="submitForm">
                </form>
            </div>
        </div>
    </div>
@endsection
