@extends('layouts.admin.app-auth')

@section('content')
<main class="auth-cover-wrapper">
    <div class="auth-cover-content-inner">
        <div class="auth-cover-content-wrapper">
            <div class="auth-img">
                <img src="{{ asset('assets/images/auth/auth-cover-login-bg.svg') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="auth-cover-sidebar-inner">
        <div class="auth-cover-card-wrapper">
            <div class="auth-cover-card p-sm-5">

                {{-- LOGO --}}
                <div class="wd-50 mb-4">
                    <img src="{{ asset('assets/images/Logo-Simple.png') }}" alt="" class="img-fluid">
                </div>

                {{-- TITLE --}}
                <h2 class="fs-20 fw-bolder mb-2">Login Sistem</h2>
                <h4 class="fs-13 fw-bold mb-2">Sistem Administrasi Data Klien</h4>

                {{-- PENJELASAN SISTEM --}}
                <p class="fs-12 fw-medium text-muted mb-4">
                    Sistem ini merupakan <strong>milik Hottison Siregar</strong> dan digunakan sebagai
                    <strong>media pengelolaan data klien administrasi</strong> untuk keperluan layanan
                    seperti pengurusan BPJS, data kependudukan, dan layanan administrasi lainnya.
                </p>

                {{-- ALERT SUCCESS --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <strong>Berhasil!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                {{-- ALERT ERROR --}}
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show">
                        {{ $errors->first() }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                {{-- FORM LOGIN --}}
                <form action="{{ route('login') }}" method="POST" class="w-100 mt-4">
                    @csrf

                    <div class="mb-4">
                        <input type="email"
                               name="email"
                               class="form-control"
                               placeholder="Email"
                               value="{{ old('email') }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <input type="password"
                               name="password"
                               class="form-control"
                               placeholder="Password"
                               required>
                    </div>

                    <div class="d-flex align-items-center justify-content-between">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox"
                                   name="remember"
                                   class="custom-control-input"
                                   id="rememberMe">
                            <label class="custom-control-label c-pointer" for="rememberMe">
                                Remember Me
                            </label>
                        </div>

                        <a href="#" class="fs-11 text-primary">
                            Lupa password?
                        </a>
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="btn btn-lg btn-primary w-100">
                            Login
                        </button>
                    </div>
                </form>

                {{-- FOOTER INFO --}}
                <div class="mt-5 text-muted text-center fs-11">
                    <p class="mb-1">
                        © {{ date('Y') }} <strong>Hottison Siregar</strong>
                    </p>
                    <p class="mb-0">
                        Penyedia Jasa Administrasi & Pengelolaan Data
                    </p>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection
