@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">

        {{-- PAGE HEADER --}}
        <div class="row mb-4">
            <div class="col">
                <h4 class="fw-bold mb-1">Profil Akun</h4>
                <p class="text-muted mb-0">
                    Informasi akun yang sedang digunakan
                </p>
            </div>
        </div>

        <div class="row">

            {{-- LEFT : PROFILE CARD --}}
            <div class="col-xl-4 col-lg-5 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">

                        <img src="{{ asset('assets/images/avatar/1.png') }}" class="rounded-circle mb-3" width="120"
                            alt="User Avatar">

                        <h5 class="fw-bold mb-0">
                            {{ auth()->user()->name }}
                        </h5>

                        <span class="text-muted fs-13">
                            {{ auth()->user()->email }}
                        </span>

                        <div class="mt-3">
                            <span class="badge bg-primary text-uppercase">
                                {{ auth()->user()->role ?? 'User' }}
                            </span>
                        </div>

                    </div>
                </div>
            </div>

            {{-- RIGHT : DETAIL --}}
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white">
                        <h6 class="mb-0 fw-bold">
                            Informasi Akun
                        </h6>
                    </div>

                    <div class="card-body">

                        <div class="row mb-3">
                            <div class="col-md-4 text-muted">
                                Nama Lengkap
                            </div>
                            <div class="col-md-8 fw-semibold">
                                {{ auth()->user()->name }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4 text-muted">
                                Email
                            </div>
                            <div class="col-md-8 fw-semibold">
                                {{ auth()->user()->email }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4 text-muted">
                                Role
                            </div>
                            <div class="col-md-8 fw-semibold">
                                {{ auth()->user()->role ?? '-' }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4 text-muted">
                                Bergabung Sejak
                            </div>
                            <div class="col-md-8 fw-semibold">
                                {{ auth()->user()->created_at->format('d M Y') }}
                            </div>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary">
                                <i class="feather-edit me-2"></i>
                                Edit Profil
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
