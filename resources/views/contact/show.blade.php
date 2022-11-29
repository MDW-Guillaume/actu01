@extends('layout.app')

@section('title')
    Contact
@endsection

@section('content')
    <div class="container">
        <div class="contact_title">
            <p>Une question, une remarque,</p>
            <h2>Contactez-nous</h2>
        </div>
        <?php if (session('status') != null) : ?>
            <div class="alert">
                {{ session('status') }}
            </div>
            <?php endif; ?>
        <form action="{{ route('contact') }}" method="post" class="contact_form">
            @csrf
            <input type="text" name="name" id="name" placeholder="Nom - Prénom">
            @error('name')
                <p class="error">{{ $message }}</p>
            @enderror
            <input type="mail" name="email" id="email" placeholder="E-mail">
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
            <select name="service" id="service">
                <option value="service1">Service 1</option>
                <option value="service2">Service 2</option>
                <option value="service3">Service 3</option>
                <option value="service4">Service 4</option>
            </select>
            @error('service')
                <p class="error">{{ $message }}</p>
            @enderror
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
            @error('content')
                <p class="error">{{ $message }}</p>
            @enderror
            <input type="submit" value="Envoyer">
        </form>
    </div>
@endsection
