<header>
    <div class="sub-header">
        <div class="sub-header-logo">
            <div class="mobile-menu">
                <i class="fa fa-bars " id="menu_mobile"></i>
                <div class="mobile-menu-content">

                </div>
            </div>
            <h1>
                <a href="{{ route('home') }}">
                    <img src="{{ URL::to('/') }}/img/logo.png" alt="ACTU-01">
                </a>
            </h1>
        </div>
        <div class="user_side">
            <img src="{{ URL::to('/') }}/img/mon-compte.png" alt="" class="user-side-icon">
            <span class="user_side_separator"></span>
            {{-- <a href="{{ route('account') }}">s'abonner</a> --}}
            <a href="{{ route('connexion') }}" class="user-side-subscribe">s'abonner</a>
        </div>
    </div>
    <div class="menu-header">
        <ul class="nav">
            <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{ route('live') }}">Le live</a></li>
            <li><a href="{{ route('newsletter') }}">Newsletter</a></li>
            <li><a href="">Météo</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li id="search-open"><a href="#"><i class="fa fa-search"></i></a></li>
        </ul>
    </div>

    <div class="searchbar-header" id="search-content">
        <form action="">
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
