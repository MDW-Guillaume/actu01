@extends('layout.app')

<?php use App\Models\Article; ?>

@section('title')
    Article -
@endsection

@section('content')
    <div class="container">
        <article class="unique_article">
            <img src="{{ $article->image }}" alt="Article {{ $article->id }}">
            <div class="article_content">
                <h2 class="article_title">{{ $article->name }}</h2>
                <p class="article_description">{{ $article->content }}</p>
            </div>
            <div class="article_details">
                <p>Par {{ $users[$article->user_id]->name }}</p>
                <span>
                    <?= date(' d F Y', strtotime($article->created_at)) . ' à ' . date('h:i', strtotime($article->created_at)) ?>
                    , mise à jour à
                    <?= date('h:i', strtotime($article->updated_at)) ?>
                </span><br>
                <span class="read-time"><img src="{{ URL::to('/') }}/img/time.png" alt="Temps de lecture"> lecture
                    {{ $tempslecture }} min.</span>
            </div>
            <div class="article_socials">
                <ul>
                    <li><a href=""><img src="{{ URL::to('/') }}/img/facebook.png" alt="facebook"
                                class="icon_social"></a></li>
                    <li><a href=""><img src="{{ URL::to('/') }}/img/twitter.png" alt="twitter"
                                class="icon_social"></a></li>
                    <li><a href=""><img src="{{ URL::to('/') }}/img/mail.png" alt="mail"
                                class="icon_social"></a></li>
                    <li><a href=""><img src="{{ URL::to('/') }}/img/favori.png" alt="favori"
                                class="icon_social"></a></li>
                </ul>
            </div>
        </article>

        <div class="similar_article">
            <h2>Articles suivants</h2>
            <div class="simiar_article_list">
                @if (count($similar_articles) == 0)
                    <?php $similar_articles = Article::take(3)->get(); ?>
                @endif
                @foreach ($similar_articles as $similar_article)
                    <a href="{{ route('article.show', $similar_article->id) }}">
                        <div class="similar_unique_article">
                            <img src="{{ $similar_article->image }}" alt="">
                            <div class="similar_article_details">
                                <h3>{{ $similar_article->name }}</h3>
                                <div class="similar_article_info">
                                    <span>Par {{ $users[$similar_article->user_id]->name }}</span>
                                    <span><?= date(' d F Y', strtotime($article->created_at)) ?></span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
