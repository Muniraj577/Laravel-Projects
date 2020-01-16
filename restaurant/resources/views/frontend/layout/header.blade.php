<header class="main_menu_area">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{ asset('img/logo3.png') }}" alt=""></a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ Request::is('/') ? 'active': '' }}">
                        <a href="{{ route('frontend.index') }}">Home</a>
                    </li>
                    <li class="{{ Request::is('about-us') ? 'active': '' }}">
                        <a href="{{ route('frontend.about-us') }}">About</a>
                    </li>
                    <li class="{{ Request::is('menu-grid') ? 'active': '' }}">
                        <a href="{{ route('frontend.menu-grid') }}">Menu</a>
                    </li>
                    <li class="{{ Request::is('galleries') ? 'active': '' }}">
                        <a href="{{ route('frontend.gallery') }}">Gallery</a>
                    </li>
                    <li class="{{ Request::is('contact') ? 'active': '' }}">
                        <a href="{{ route('frontend.contact') }}">Contact</a>
                    </li>
                    <li class="{{ Request::is('table') ? 'active': '' }}">
                        <a href="{{ route('frontend.table') }}">Reservation</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>