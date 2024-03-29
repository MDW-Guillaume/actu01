<header>
    <div class="sub-header" id="header">
        <div class="sub-header-bg">
            <div class="sub-header-logo">
                <div class="mobile-menu">
                    <i class="fa fa-bars " id="menu_mobile"></i>
                    {{-- <i class="fa fa-close" id="menu_mobile_close"></i> --}}
                    <div class="mobile-menu-content">

                    </div>
                </div>
                <h1>
                    <a href="{{ route('home') }}">
                        <img src="{{ URL::to('/') }}/img/logo.png" alt="ACTU-01">
                    </a>
                </h1>
            </div>

            <div class="hamburger-menu" id="hMenu">
                <ul>
                    <li class="h-socials">
                        <a href="{{ route('contact') }}">
                            <span>Suivez-nous</span>
                            <i class="fa-brands fa-square-twitter"></i>
                            <i class="fa-brands fa-square-facebook"></i>
                        </a>
                    </li>
                    @auth
                        <li>
                            <a href="{{ route('mon-compte') }}">
                                Mon compte
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}">
                                Se connecter
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                    @endauth
                    <li>
                        <a href="{{ route('contact') }}">
                            S'abonner
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </li>
                    <li class="h-rubric">
                        <span>Rubriques</span>
                        <ul>
                            @foreach ($globalCategories as $categorie)
                                <li><a href="{{ route('rubric.show', $categorie->id) }}">{{ $categorie->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('live') }}">
                            Le live
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('newsletter') }}">
                            Newsletter
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('meteo') }}">
                            Météo
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">
                            Contact
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">
                            Mentions légales
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </div>

            @auth

                <div class="user_side">
                    <a href="{{ route('mon-compte') }}">
                        <img src="{{ URL::to('/') }}/img/mon-compte.png" alt="" class="user-side-icon">
                    </a>
                    <span class="user_side_separator"></span>
                    {{-- <a href="{{ route('account') }}">s'abonner</a> --}}
                    <a href="{{ route('contact') }}" class="user-side-subscribe">s'abonner</a>
                </div>
            @else
                <div class="user_side">
                    <a href="{{ route('login') }}" class="user-side-subscribe">Se connecter</a>
                </div>
            @endauth
        </div>
    </div>
    <div class="menu-header" id="headerMenu">
        <div class="sub-header-bg">
            <ul class="nav">
                <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                <li><a href="{{ route('live') }}">Le live</a></li>
                <li><a href="{{ route('newsletter') }}">Newsletter</a></li>
                <li><a href="{{ route('meteo') }}">Météo</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li id="search-open"><a href="#"><i class="fa fa-search"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="searchbar-header" id="search-content">
        <form action="{{ route('search') }}" method="get">
            @csrf
            <div class="inputs">
                <input type="text" name="search" id="search" placeholder="Recherche ACTU-01...">
                <input type="submit" value="ok">
            </div>
            <i class="fa fa-close" id="search-close"></i>
        </form>
    </div>
    <?php if (session('status') != null) : ?>
    <div class="alert">
        {{ session('status') }}
    </div>
    <?php endif; ?>


</header>
