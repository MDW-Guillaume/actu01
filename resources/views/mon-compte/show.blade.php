@extends('layout.app')

@section('title')
    Mon compte
@endsection

@section('content')
    <div class="container margin mon-compte">
        <div class="rubric_title account-title">
            <h2>Mon compte</h2>
        </div>

        <div class="user_info">
            <h3>Informations personnelles</h3>

            <form action="{{ route('mon-compte') }}" method="post" class="user_personnal_info">
                @csrf
                <div class="user_personnal_info_text">
                    <span>Nom :</span>
                    <p class="user_personnal_info_span " id="user_personnal_info_span_name">
                        <span class="user_personnal_info_span_name">{{ $user_info->name }}
                            <i class="fa-regular fa-pen-to-square" id="update-name"></i>
                        </span>
                    </p> {{-- display : block jusqu'a interaction avec l'icone ou le bouton --}}
                    <input name="name" type="text" id="user_personnal_info_name_input" value="{{ $user_info->name }}" placeholder="{{ $user_info->name }}">
                    {{-- display : none jusqu'a interaction avec l'icone ou le bouton --}}

                </div>
                <div class="user_personnal_info_text">
                    <span>Email :</span>
                    <p class="user_personnal_info_span lowercase " id="user_personnal_info_span_email">
                        <span class="user_personnal_info_span_email">{{ $user_info->email }}
                            <i class="fa-regular fa-pen-to-square" id="update-email"></i>
                        </span>
                    </p> {{-- display : block jusqu'a interaction avec l'icone ou le bouton --}}
                    <input name="email" type="email" id="user_personnal_info_email_input" value="{{ $user_info->email }}" placeholder="{{ $user_info->email }}">
                    {{-- display : none jusqu'a interaction avec l'icone ou le bouton --}}

                </div>
                <div class="buttons" id="button">
                    <button id="btnReturn" class="btn btn-return">Annuler</button>
                    <input type="submit" value="Modifier" class="btn btn-submit" id="btnSubmit">
                </div>
            </form>
        </div>

        <div class="my_actuality">
            <div class="my_actuality_title">
                <h3>Mes actualités</h3>
            <?php if(count($user_articles) != 0) : ?>
                <a href="">Voir tout</a>
            </div>
            <div class="user_news_list">
                @foreach($user_articles as $user_article)
                <a href="{{ route('article.show', $user_article->id) }}">
                    <div class="home_lastest_news_element">
                        <img src="{{ $user_article->image }}" alt="{{ $user_article->name }}">
                        <div class="content_lastest_news">
                            <h2>{{ $user_article->name }}</h2>
                            <span>
                                <?php
                                setlocale(LC_ALL, 'fr_FR');
                                echo date(' d F Y', strtotime($user_article->created_at)) . ' à ' . date('h:i', strtotime($user_article->created_at));
                                ?>
                            </span><br>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <?php else : ?>
            <div class="no-news">
                <i class="fa-regular fa-newspaper"></i>
                <p>Vous n'avez pas crée d'actualité !</p>
            </div>
            <?php endif; ?>

        </div>
    </div>
@endsection

@section('js')
    @vite(['resources/js/userInfo.js'])
@endsection
