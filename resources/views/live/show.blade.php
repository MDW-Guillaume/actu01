@extends('layout.app')

@section('title')
    Catégories
@endsection

@section('content')
    <div class="container live">
        <div class="rubric_title">
            <h2>Live</h2>
        </div>
        <div class="rubric_article">
            @foreach ($articles_recents as $article_recent)
                    <a href="{{ route('article.show', $article_recent->id) }}">
                        <div class="rubric_unique_article">
                            <img src="{{ $article_recent->image }}" alt="">
                            <div class="rubric_article_details">
                                <h3>{{ $article_recent->name }}</h3>
                                <div class="rubric_article_info">
                                    <span>Par {{ $users[$article_recent->user_id]->name }}</span>
                                    <span><?= date(' d F Y', strtotime($article_recent->created_at)) ?></span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
        </div>
    </div>
@endsection