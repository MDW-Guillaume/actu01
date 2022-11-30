<footer>
    <div class="footer_categories">
        <h2 class="footer_categories_title">Rubriques</h2>
        <ul>
            @foreach ($globalCategories as $categorie)
                <li><a href="{{ route('rubric.show', $categorie->id) }}">{{ $categorie->name }}</a></li>
            @endforeach
        </ul>
    </div>
    <hr>
    <div class="footer-right">
        <div class="footer_pages">
            <ul>
                @auth
                    <li>
                        <a href="{{ route('mon-compte') }}"> Mon compte</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"> S'abonner</a>
                    </li>
                    <li>
                        <a href="{{ route('newsletter') }}"> Newsletter</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}"> Se connecter</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}"> S'abonner</a>
                    </li>
                    <li>
                        <a href="{{ route('newsletter') }}"> Newsletter</a>
                    </li>
                @endauth
            </ul>
        </div>
        <hr>
        <div class="footer_social">
            <h2>Suivez Actu-01</h2>
            <ul class="footer_social_links">
                <li>
                    <a href="">
                        <img src="{{ URL::to('/') }}/img/blank-rss.png" alt="Social">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ URL::to('/') }}/img/blank-twitter.png" alt="Social">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ URL::to('/') }}/img/blank-facebook.png" alt="Social">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ URL::to('/') }}/img/blank-mail.png" alt="Social">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
