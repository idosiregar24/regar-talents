@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">

        <h4 class="fw-bold mb-3">Edit Data Klien</h4>

        {{-- ALERT SUCCESS --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Berhasil!</strong> {{ session('success') }}
                <button class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- ALERT ERROR --}}
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
                <strong>Periksa kembali data berikut:</strong>
                <ul class="mt-2 mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-header p-0">
                <ul class="nav nav-tabs flex-wrap w-100 text-center customers-nav-tabs">
                    <li class="nav-item flex-fill border-top">
                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#utama">
                            Data Utama
                        </a>
                    </li>
                    <li class="nav-item flex-fill border-top">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#identitas">
                            Identitas
                        </a>
                    </li>
                    <li class="nav-item flex-fill border-top">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#kontak">
                            Kontak & Alamat
                        </a>
                    </li>
                    <li class="nav-item flex-fill border-top">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#faskes">
                            Faskes & Kelas
                        </a>
                    </li>
                </ul>
            </div>

            <form method="POST" action="{{ route('clients.update', $client->id_client) }}">
                @csrf
                @method('PUT')

                <div class="card-body">
                    <div class="tab-content">

                        {{-- TAB DATA UTAMA --}}
                        <div class="tab-pane fade show active" id="utama">
                            <h6 class="fw-bold mb-3">Data Utama Klien</h6>

                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <label class="fw-semibold">Nama Lengkap *</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ old('nama', $client->nama) }}">
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <label class="fw-semibold">NIK</label>
                                    <small class="text-muted d-block">Tidak dapat diubah</small>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" value="{{ $client->nik }}" readonly>
                                </div>
                            </div>
                        </div>

                        {{-- TAB IDENTITAS --}}
                        <div class="tab-pane fade" id="identitas">
                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <label class="fw-semibold">Nama Ibu Kandung *</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="nama_ibu_kandung" class="form-control"
                                        value="{{ old('nama_ibu_kandung', $client->nama_ibu_kandung) }}">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <label class="fw-semibold">VA / Nomor Peserta *</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="va" class="form-control"
                                        value="{{ old('va', $client->va) }}">
                                </div>
                            </div>
                        </div>

                        {{-- TAB KONTAK --}}
                        <div class="tab-pane fade" id="kontak">
                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <label class="fw-semibold">No. HP *</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="no_hp" class="form-control"
                                        value="{{ old('no_hp', $client->no_hp) }}">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <label class="fw-semibold">Email *</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="email" name="email" class="form-control"
                                        value="{{ old('email', $client->email) }}">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <label class="fw-semibold">Alamat</label>
                                </div>
                                <div class="col-lg-8">
                                    <textarea name="alamat" class="form-control" rows="3">{{ old('alamat', $client->alamat) }}</textarea>
                                </div>
                            </div>
                        </div>

                        {{-- TAB FASKES --}}
                        <div class="tab-pane fade" id="faskes">
                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <label class="fw-semibold">Faskes Pertama *</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="faskes_pertama" class="form-control"
                                        value="{{ old('faskes_pertama', $client->faskes_pertama) }}">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <label class="fw-semibold">Kelas *</label>
                                </div>
                                <div class="col-lg-8">
                                    <select name="kelas" class="form-select">
                                        <option value="">Pilih Kelas</option>
                                        <option value="1" @selected(old('kelas', $client->kelas) == '1')>Kelas 1</option>
                                        <option value="2" @selected(old('kelas', $client->kelas) == '2')>Kelas 2</option>
                                        <option value="3" @selected(old('kelas', $client->kelas) == '3')>Kelas 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card-footer text-end">
                    <a href="{{ route('clients.index') }}" class="btn btn-outline-secondary me-2">
                        <i class="feather-arrow-left me-1"></i>
                        Kembali
                    </a>
                    <br>
                    <button type="submit" class="btn btn-primary"
                        onclick="this.disabled=true; this.innerHTML='Menyimpan...'; this.form.submit();">
                        <i class="feather-save me-1"></i>
                        Update Data Klien
                    </button>
                </div>


            </form>
        </div>
    </div>
@endsection
