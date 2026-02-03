@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">

    {{-- HEADER --}}
    <div class="row mb-4">
        <div class="col">
            <h4 class="fw-bold mb-1">Edit Profil</h4>
            <p class="text-muted mb-0">
                Perbarui informasi akun Anda
            </p>
        </div>
    </div>

    {{-- ALERT --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0">
                <div class="card-body">

                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        {{-- NAMA --}}
                        <div class="mb-4">
                            <label class="fw-semibold">Nama Lengkap</label>
                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="{{ old('name', auth()->user()->name) }}"
                                   required>
                        </div>

                        {{-- EMAIL --}}
                        <div class="mb-4">
                            <label class="fw-semibold">Email</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="{{ old('email', auth()->user()->email) }}"
                                   required>
                        </div>

                        <hr>

                        {{-- PASSWORD --}}
                        <h6 class="fw-bold mb-3">
                            Ganti Password <span class="text-muted fs-12">(Opsional)</span>
                        </h6>

                        <div class="mb-3">
                            <label>Password Baru</label>
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="Kosongkan jika tidak ingin mengubah">
                        </div>

                        <div class="mb-4">
                            <label>Konfirmasi Password</label>
                            <input type="password"
                                   name="password_confirmation"
                                   class="form-control">
                        </div>

                        {{-- ACTION --}}
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('profile.index') }}"
                               class="btn btn-light">
                                Kembali
                            </a>
                            <button type="submit"
                                    class="btn btn-primary">
                                Simpan Perubahan
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection
