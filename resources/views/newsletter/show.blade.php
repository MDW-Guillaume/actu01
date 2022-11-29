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
                <form action="{{ route('newsletter') }}" method="post">
                    @csrf
                    <input type="email" name="email" id="email">
                    <input type="submit" value="S'abonner">
                </form>
            </div>
        </div>
    </div>
@endsection
