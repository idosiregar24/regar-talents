@extends('layouts.admin.app')

@section('content')

    <h4 class="fw-bold mb-3">Tambah Data Klien</h4>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Berhasil!</strong> {{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <strong>Data belum lengkap!</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-header p-0">
            <ul class="nav nav-tabs flex-wrap w-100 text-center customers-nav-tabs" id="myTab" role="tablist">
                <li class="nav-item flex-fill border-top" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#utama">Data Utama</a>
                </li>
                <li class="nav-item flex-fill border-top" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#identitas">Identitas</a>
                </li>
                <li class="nav-item flex-fill border-top" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#kontak">Kontak & Alamat</a>
                </li>
                <li class="nav-item flex-fill border-top" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#faskes">Faskes & Kelas</a>
                </li>
            </ul>
        </div>

        <form method="POST" action="{{ route('clients.store') }}">
            @csrf

            <div class="card-body">
                <div class="tab-content">

                    <!-- TAB: DATA UTAMA -->
                    <div class="tab-pane fade show active" id="utama">
                        <h6 class="fw-bold mb-3">Data Utama Klien</h6>

                        <div class="row mb-4">
                            <div class="col-lg-4"><label class="fw-semibold">Nama Lengkap <span
                                        class="text-danger">*</span></label>
                                <small class="text-muted d-block">
                                    masukkan Nama Lengkap sesuai KTP
                                </small>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-4"><label class="fw-semibold">NIK <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="nik" placeholder="Contoh: 1404xxxxxxxxxxxx"
                                    class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}">
                                @error('nik')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- TAB: IDENTITAS -->
                    <div class="tab-pane fade" id="identitas">
                        <div class="row mb-4">
                            <div class="col-lg-4"><label class="fw-semibold">Nama Ibu Kandung <span
                                        class="text-danger">*</span></label><small class="text-muted d-block">
                                    Masukkan Nama Ibu Kandung sesuai KTP
                                </small></div>
                            <div class="col-lg-8">
                                <input type="text" name="nama_ibu_kandung" class="form-control"
                                    value="{{ old('nama_ibu_kandung') }}">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-4"><label class="fw-semibold">VA / Nomor Peserta <span
                                        class="text-danger">*</span></label>
                                <small class="text-muted d-block">
                                    Nomor kepesertaan / virtual account (jika ada)
                                </small>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="va" class="form-control" value="{{ old('va') }}">
                            </div>
                        </div>
                    </div>

                    <!-- TAB: KONTAK -->
                    <div class="tab-pane fade" id="kontak">
                        <div class="row mb-4">
                            <div class="col-lg-4"><label class="fw-semibold">No. HP <span
                                        class="text-danger">*</span></label></div>
                            <div class="col-lg-8">
                                <input type="text" placeholder="Contoh: 0812xxxx" name="no_hp" class="form-control"
                                    value="{{ old('no_hp') }}">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-4"><label class="fw-semibold">Email <span
                                        class="text-danger">*</span></label></div>
                            <div class="col-lg-8">
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-4"><label class="fw-semibold">Alamat</label></div>
                            <div class="col-lg-8">
                                <textarea name="alamat" class="form-control" rows="3">{{ old('alamat') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- TAB: FASKES -->
                    <div class="tab-pane fade" id="faskes">
                        <div class="row mb-4">
                            <div class="col-lg-4"><label class="fw-semibold">Faskes Pertama <span
                                        class="text-danger">*</span></label></div>
                            <div class="col-lg-8">
                                <input type="text" name="faskes_pertama" class="form-control"
                                    value="{{ old('faskes_pertama') }}">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-4"><label class="fw-semibold">Kelas <span
                                        class="text-danger">*</span></label></div>
                            <div class="col-lg-8">
                                <select name="kelas" class="form-select">
                                    <option value="">Pilih Kelas</option>
                                    <option value="1" @selected(old('kelas') == '1')>Kelas 1</option>
                                    <option value="2" @selected(old('kelas') == '2')>Kelas 2</option>
                                    <option value="3" @selected(old('kelas') == '3')>Kelas 3</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary position-relative">
                    Simpan Data Klien
                </button>
            </div>
        </form>
    </div>
@endsection
