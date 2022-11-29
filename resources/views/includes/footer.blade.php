<footer>
    <div class="footer_categories">
        <h2 class="footer_categories_title">Rubriques</h2>
        <ul>
            @foreach ($globalCategories as $categorie)
                <li><a href="{{ route('rubric.show', $categorie->id) }}">{{$categorie->name}}</a></li>
            @endforeach
        </ul>
    </div>
    <hr>
    <div class="footer_pages">
        <ul>
            <li>
                <a href=""> Se connecter</a>
            </li>
            <li>
                <a href=""> S'abonner</a>
            </li>
            <li>
                <a href="{{ route('newsletter') }}"> Newsletter</a>
            </li>
            <li>
                <a href=""> Mon compte</a>
            </li>
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
</footer>