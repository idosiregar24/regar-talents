<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">

                    <!-- Logo -->
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets-landing-pages/img/Logo-Simple.png') }}" alt="logo">
                    </a>

                    <!-- Toggle Mobile -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="ti-menu"></i></span>
                    </button>

                    <!-- Menu -->
                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about-me') }}">Tentang Saya</a>
                            </li>
                        </ul>

                        <!-- Login Button -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="btn btn-outline-primary" href="{{ route('login') }}">
                                    Login
                                </a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->
