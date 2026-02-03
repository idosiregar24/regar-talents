<!--! [Start] Header Right !-->
<div class="header-right ms-auto">
    <div class="d-flex align-items-center">

        {{-- FULLSCREEN --}}
        <div class="nxl-h-item d-none d-sm-flex">
            <div class="full-screen-switcher">
                <a href="javascript:void(0);" class="nxl-head-link me-0"
                   onclick="$('body').fullScreenHelper('toggle');">
                    <i class="feather-maximize maximize"></i>
                    <i class="feather-minimize minimize"></i>
                </a>
            </div>
        </div>

        {{-- DARK / LIGHT --}}
        <div class="nxl-h-item dark-light-theme">
            <a href="javascript:void(0);" class="nxl-head-link me-0 dark-button">
                <i class="feather-moon"></i>
            </a>
            <a href="javascript:void(0);" class="nxl-head-link me-0 light-button" style="display: none">
                <i class="feather-sun"></i>
            </a>
        </div>

        {{-- USER DROPDOWN --}}
        <div class="dropdown nxl-h-item">
            <a href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <img src="{{ asset('assets/images/avatar/1.png') }}"
                     alt="user-image"
                     class="img-fluid user-avtar me-0" />
            </a>

            <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                <div class="dropdown-header">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/images/avatar/1.png') }}"
                             alt="user-image"
                             class="img-fluid user-avtar" />
                        <div>
                            <h6 class="text-dark mb-0">
                                {{ auth()->user()->name }}
                            </h6>
                            <span class="fs-12 fw-medium text-muted">
                                {{ auth()->user()->email }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="dropdown-divider"></div>

                <a href="{{ route('profile.index') }}" class="dropdown-item">
                    <i class="feather-user"></i>
                    <span>Profile Details</span>
                </a>

                <a href="#" class="dropdown-item">
                    <i class="feather-settings"></i>
                    <span>Account Settings</span>
                </a>

                <div class="dropdown-divider"></div>

                {{-- LOGOUT (WAJIB POST) --}}
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger w-100 text-start">
                        <i class="feather-log-out"></i>
                        <span>Logout</span>
                    </button>
                </form>

            </div>
        </div>

    </div>
</div>
<!--! [End] Header Right !-->
