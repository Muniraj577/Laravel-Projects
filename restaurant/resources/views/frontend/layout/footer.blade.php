<footer class="footer_area">
    <div class="footer_widget_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <aside class="f_widget about_widget">
                        @foreach($abouts as $about)
                            <div class="f_w_title">
                                <h4>About Us</h4>
                            </div>
                            <p>{{ $about->description }}</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        @endforeach
                    </aside>
                </div>
                <div class="col-md-3">
                    <aside class="f_widget contact_widget">
                        <div class="f_w_title">
                            <h4>CONTACT US</h4>
                        </div>
                        <p>Enjoy our great meal.</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-envelope"></i>pu@gmail.com</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>021562879</a></li>
                            <li><a href="#"><i class="fa fa-map-marker"></i>Kanya Marga, Biratnagar<br/>
                                </a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-3">
                    <aside class="f_widget gallery_widget">
                        <div class="f_w_title">
                            <h4>Gallery</h4>
                        </div>
                        <ul>
                            @foreach($galleries as $gallery)
                                <li><a href="#"><img src="{{ url('images/gallery/'.$gallery->image) }}"
                                                     class="img-circle" width="100" height="70"><i
                                                class="fa fa-search"></i></a></li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="copy_right_area">
        <div class="container">
            <div class="pull-left">
                <h5>
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | <a href="#" target="_blank">Purbanchal University</a>

                    </p>
                </h5>
            </div>
            <div class="pull-right">
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
            </div>
        </div>
    </div>
</footer>