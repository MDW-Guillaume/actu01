@extends('layout.app')

@section('title')
    Accueil
@endsection

@section('content')
    <div class="container">
        <div class="home_lastest_news">
            @for ($i = 0; $i < 10; $i++)
            <a href="{{ route('article.show', $articles[$i]->id) }}">
                <div class="home_lastest_news_element">
                        <img src="{{ $articles[$i]->image }}">
                        <div class="label_lastest_news">
                            <span>À ne pas manquer</span>
                        </div>
                        <div class="content_lastest_news">
                            <?php //dd($users[$articles[$i]->user_id]->name);
                            ?>
                            <h2>{{ $articles[$i]->name }}</h2>
                            <span>Par {{ $users[$articles[$i]->user_id]->name }}</span><br>
                            {{-- Lien vers la page de l'utilisateur --}}
                            <span>
                                <?php
                                setlocale(LC_ALL, 'fr_FR');
                                echo date(' d F Y', strtotime($articles[$i]->created_at)) . ' à ' . date('h:i', strtotime($articles[$i]->created_at));
                                ?>
                            </span><br>
                        </div>
                    </div>
                </a>
            @endfor


        </div>
    </div>
@endsection
