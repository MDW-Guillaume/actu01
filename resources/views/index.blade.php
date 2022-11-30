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
                <div class="home_rubric_article_grid">
                    @foreach ($articles_divers as $article_divers)
                        <div class="home_rubric_article_content rubric_article">
                            <a href="{{ route('article.show', $article_divers->id) }}">
                                <div class="rubric_unique_article">
                                    <img src="{{ $article_divers->image }}" alt="{{ $articles[$i]->name }}">
                                    <div class="rubric_article_details">
                                        <h3>{{ $article_divers->name }}</h3>
                                        <div class="rubric_article_info">
                                            <span>Par {{ $users[$article_divers->user_id - 1]->name }}</span>
                                            <span><?= date(' d F Y', strtotime($article_divers->created_at)) ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('rubric.show', $divers_id) }}" class="home_rubric_loadmore">Tous</a>
            </div>
        </div>

        <div class="home_rubrics_article">
            <div class="home_rubric_article">
                <h2>Sports</h2>
                <div class="home_rubric_article_grid">
                @foreach ($articles_sport as $article_sport)
                    <div class="home_rubric_article_content rubric_article">
                        <a href="{{ route('article.show', $article_sport->id) }}">
                            <div class="rubric_unique_article">
                                <img src="{{ $article_sport->image }}" alt="{{ $articles[$i]->name }}">
                                <div class="rubric_article_details">
                                    <h3>{{ $article_sport->name }}</h3>
                                    <div class="rubric_article_info">
                                        <span>Par {{ $users[$article_sport->user_id - 1]->name }}</span>
                                        <span><?= date(' d F Y', strtotime($article_sport->created_at)) ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                </div>
                <a href="{{ route('rubric.show', $sport_id) }}" class="home_rubric_loadmore">Tous</a>
            </div>
        </div>

        <div class="home_rubrics_article">
            <div class="home_rubric_article">
                <h2>Culture</h2>
                <div class="home_rubric_article_grid">
                @foreach ($articles_culture as $article_culture)
                    <div class="home_rubric_article_content rubric_article">
                        <a href="{{ route('article.show', $article_culture->id) }}">
                            <div class="rubric_unique_article">
                                <img src="{{ $article_culture->image }}" alt="{{ $articles[$i]->name }}">
                                <div class="rubric_article_details">
                                    <h3>{{ $article_culture->name }}</h3>
                                    <div class="rubric_article_info">
                                        <span>Par {{ $users[$article_culture->user_id - 1]->name }}</span>
                                        <span><?= date(' d F Y', strtotime($article_culture->created_at)) ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                </div>
                <a href="{{ route('rubric.show', $culture_id) }}" class="home_rubric_loadmore">Tous</a>
            </div>
        </div>

        <div class="home_rubrics_article">
            <div class="home_rubric_article">
                <h2>Les plus lus</h2>
                <div class="home_rubric_article_grid">
                @foreach ($articles_populaires as $article_populaires)
                    <div class="home_rubric_article_content rubric_article">
                        <a href="{{ route('article.show', $article_populaires->id) }}">
                            <div class="rubric_unique_article">
                                <img src="{{ $article_populaires->image }}" alt="{{ $articles[$i]->name }}">
                                <div class="rubric_article_details">
                                    <h3>{{ $article_populaires->name }}</h3>
                                    <div class="rubric_article_info">
                                        <span>Par {{ $users[$article_populaires->user_id - 1]->name }}</span>
                                        <span><?= date(' d F Y', strtotime($article_populaires->created_at)) ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                </div>
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
