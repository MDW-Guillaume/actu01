<header>
    <div class="sub-header">
        <div class="sub-header-logo">
            <div class="mobile-menu">
                <i class="fa fa-bars " id="menu_mobile"></i>
            </div>
            <h1>
                <a href="{{ route('home') }}">
                    <img src="{{ URL::to('/') }}/img/logo.png" alt="">
                </a>
            </h1>
        </div>
        <div class="user_side">
            <img src="{{ URL::to('/') }}/img/mon-compte.png" alt="" class="user-side-icon">
            <span class="user_side_separator"></span>
            {{-- <a href="{{ route('account') }}">s'abonner</a> --}}
            <a href="" class="user-side-subscribe">s'abonner</a>
        </div>
    </div>
    <div class="menu-header">
        <ul class="nav">
            <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
            <li><a href="">Le live</a></li>
            <li><a href="">Newsletter</a></li>
            <li><a href="">Météo</a></li>
            <li><a href="">Contact</a></li>
            <li><a href=""><i class="fa fa-search"></i></a></li>
        </ul>
    </div>
</header>
