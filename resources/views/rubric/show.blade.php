@extends('layout.app')

@section('title')
    Catégories
@endsection

@section('content')
    <div class="container">
        <div class="rubric_title">
            <h2>{{ $categorie->name }}</h2>
        </div>
        <div class="rubric_article">
            @foreach ($articles as $article)
                    <a href="{{ route('article.show', $article->id) }}">
                        <div class="rubric_unique_article">
                            <img src="{{ $article->image }}" alt="">
                            <div class="rubric_article_details">
                                <h3>{{ $article->name }}</h3>
                                <div class="rubric_article_info">
                                    <span>Par {{ $users[$article->user_id]->name }}</span>
                                    <span><?= date(' d F Y', strtotime($article->created_at)) ?></span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
        </div>
    </div>
@endsection