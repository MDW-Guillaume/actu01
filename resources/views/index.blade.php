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
                        <img src="{{ $articles[$i]->image }}" alt="{{ $articles[$i]->name }}">
                        <div class="label_lastest_news">
                            <span>À ne pas manquer</span>
                        </div>
                        <div class="content_lastest_news">
                            <h2>{{ $articles[$i]->name }}</h2>
                            <span>Par {{ $users[$articles[$i]->user_id - 1]->name }}</span><br>
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

        <div class="home_rubrics_article">
            <div class="home_rubric_article">
                <h2>Faits divers</h2>
                @for ($i = 0; $i < 2; $i++)
                    <div class="home_rubric_article_content rubric_article">
                        <a href="{{ route('article.show', $articles_divers[$i]->id) }}">
                            <div class="rubric_unique_article">
                                <img src="{{ $articles_divers[$i]->image }}" alt="{{ $articles[$i]->name }}">
                                <div class="rubric_article_details">
                                    <h3>{{ $articles_divers[$i]->name }}</h3>
                                    <div class="rubric_article_info">
                                        <span>Par {{ $users[$articles_divers[$i]->user_id - 1]->name }}</span>
                                        <span><?= date(' d F Y', strtotime($articles_divers[$i]->created_at)) ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
                <a href="{{ route('rubric.show', $divers_id) }}" class="home_rubric_loadmore">Tous</a>
            </div>
        </div>

        <div class="home_rubrics_article">
            <div class="home_rubric_article">
                <h2>Sports</h2>
                @for ($i = 0; $i < 2; $i++)
                    <div class="home_rubric_article_content rubric_article">
                        <a href="{{ route('article.show', $articles_sport[$i]->id) }}">
                            <div class="rubric_unique_article">
                                <img src="{{ $articles_sport[$i]->image }}" alt="{{ $articles[$i]->name }}">
                                <div class="rubric_article_details">
                                    <h3>{{ $articles_sport[$i]->name }}</h3>
                                    <div class="rubric_article_info">
                                        <span>Par {{ $users[$articles_sport[$i]->user_id - 1]->name }}</span>
                                        <span><?= date(' d F Y', strtotime($articles_sport[$i]->created_at)) ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
                <a href="{{ route('rubric.show', $sport_id) }}" class="home_rubric_loadmore">Tous</a>
            </div>
        </div>

        <div class="home_rubrics_article">
            <div class="home_rubric_article">
                <h2>Culture</h2>
                @for ($i = 0; $i < 2; $i++)
                    <div class="home_rubric_article_content rubric_article">
                        <a href="{{ route('article.show', $articles_culture[$i]->id) }}">
                            <div class="rubric_unique_article">
                                <img src="{{ $articles_culture[$i]->image }}" alt="{{ $articles[$i]->name }}">
                                <div class="rubric_article_details">
                                    <h3>{{ $articles_culture[$i]->name }}</h3>
                                    <div class="rubric_article_info">
                                        <span>Par {{ $users[$articles_culture[$i]->user_id - 1]->name }}</span>
                                        <span><?= date(' d F Y', strtotime($articles_culture[$i]->created_at)) ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
                <a href="{{ route('rubric.show', $culture_id) }}" class="home_rubric_loadmore">Tous</a>
            </div>
        </div>

        <div class="home_rubrics_article">
            <div class="home_rubric_article">
                <h2>Les plus lus</h2>
                @for ($i = 0; $i < 2; $i++)
                    <div class="home_rubric_article_content rubric_article">
                        <a href="{{ route('article.show', $articles_populaires[$i]->id) }}">
                            <div class="rubric_unique_article">
                                <img src="{{ $articles_populaires[$i]->image }}" alt="{{ $articles[$i]->name }}">
                                <div class="rubric_article_details">
                                    <h3>{{ $articles_populaires[$i]->name }}</h3>
                                    <div class="rubric_article_info">
                                        <span>Par {{ $users[$articles_populaires[$i]->user_id - 1]->name }}</span>
                                        <span><?= date(' d F Y', strtotime($articles_populaires[$i]->created_at)) ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
                <a href="{{ route('rubric.show', $culture_id) }}" class="home_rubric_loadmore">Tous</a>
            </div>
        </div>

        <h2 class="rubric-title">Le live</h2>
        <div class="home_lastest_news live">
            @for ($i = 0; $i < 10; $i++)
                <a href="{{ route('article.show', $articles[$i]->id) }}">
                    <div class="home_lastest_news_element">
                        <img src="{{ $articles[$i]->image }}" alt="{{ $articles[$i]->name }}">
                        <div class="label_lastest_news">
                            <span>Live</span>
                        </div>
                        <div class="content_lastest_news">
                            <h2>{{ $articles[$i]->name }}</h2>
                            <span>Par {{ $users[$articles[$i]->user_id - 1]->name }}</span><br>
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
