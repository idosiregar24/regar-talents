    <!--! ================================================================ !-->
    <!--! [Start] Navigation Manu !-->
    <!--! ================================================================ !-->
    <nav class="nxl-navigation">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="{{route('dashboard')}}" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="assets/images/Regar-Talents-Full-Logo.png" alt="" class="logo logo-lg" />
                    <img src="assets/images/Logo-Simple.png" alt="" class="logo logo-sm" />
                </a>
            </div>
            <div class="navbar-content">
                <ul class="nxl-navbar">
                    <li class="nxl-item nxl-caption">
                        <label>Navigation</label>
                    </li>

                    <li class="nxl-item">
                        <a class="nxl-link" href="{{ route('dashboard') }}">
                            <span class="nxl-micon">
                                <i class="feather-airplay"></i>
                            </span>
                            <span class="nxl-mtext">Dashboard</span>
                        </a>
                    </li>

                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-users"></i></span>
                            <span class="nxl-mtext">Peserta</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('clients.index') }}">Lihat Data
                                    Peserta</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('clients.create') }}">Tambah Data
                                    Peserta</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--! ================================================================ !-->
    <!--! [End]  Navigation Manu !-->
    <!--! ================================================================ !-->
