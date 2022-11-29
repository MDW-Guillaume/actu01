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

            <form action="" method="post" class="user_personnal_info">
                <div class="user_personnal_info_text">
                    <span>Nom :</span>
                    <p class="user_personnal_info_span " id="user_personnal_info_span_name">
                        <span class="user_personnal_info_span_name">{{ $user_info->name }}
                            <i class="fa-regular fa-pen-to-square" id="update-name"></i>
                        </span>
                    </p> {{-- display : block jusqu'a interaction avec l'icone ou le bouton --}}
                    <input type="text" id="user_personnal_info_name_input" placeholder="{{ $user_info->name }}">
                    {{-- display : none jusqu'a interaction avec l'icone ou le bouton --}}

                </div>
                <div class="user_personnal_info_text">
                    <span>Email :</span>
                    <p class="user_personnal_info_span lowercase " id="user_personnal_info_span_email">
                        <span class="user_personnal_info_span_email">{{ $user_info->email }}
                            <i class="fa-regular fa-pen-to-square" id="update-email"></i>
                        </span>
                    </p> {{-- display : block jusqu'a interaction avec l'icone ou le bouton --}}
                    <input type="email" id="user_personnal_info_email_input" placeholder="{{ $user_info->email }}">
                    {{-- display : none jusqu'a interaction avec l'icone ou le bouton --}}

                </div>
                <div class="buttons" id="button">
                    <button id="btnReturn" class="btn btn-return">Annuler</button>
                    <input type="submit" value="Modifier" class="btn btn-submit" id="btnSubmit">
                </div>
            </form>
        </div>
        <div class="my_actuality">
            <h3>Mes actualités</h3>
            <?php if(!empty($user_articles)) : ?>

            <?php else : ?>
            <p>Vous n'avez pas crée d'actualité !</p>
            <?php endif; ?>

        </div>
    </div>
@endsection

@section('js')
    @vite(['resources/js/userInfo.js'])
@endsection
