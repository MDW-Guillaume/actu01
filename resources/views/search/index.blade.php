@extends('layout.app')

@section('title')
    Recherche
@endsection

@section('content')
    <div class="container search">
        <div class="rubric_title">
            <h2>Recherche</h2>
        </div>

        <div class="rubric_article">
            @if (count($results) != 0)
            @foreach ($results as $result)
                <a href="{{ route('article.show', $result->id) }}">
                    <div class="rubric_unique_article">
                        <img src="{{ $result->image }}" alt="">
                        <div class="rubric_article_details">
                            <h3>{{ $result->name }}</h3>
                            <div class="rubric_article_info">
                                <span>Par {{ $users[$result->user_id - 1]->name }}</span>
                                <span><?= date(' d F Y', strtotime($result->created_at)) ?></span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
            @else
            <div class="no-news">
                <i class="fa-regular fa-newspaper"></i>
                <p>Aucune actualité trouvée !</p>
            </div>
            @endif
        </div>
    </div>
@endsection
