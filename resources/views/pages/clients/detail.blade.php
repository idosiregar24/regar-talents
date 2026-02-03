@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        @include('layouts.admin.page-header-back-detail')
        <div class="row">

            {{-- LEFT CARD : PROFILE --}}
            <div class="col-xxl-5 col-xl-6">
                <div class="card stretch stretch-full">
                    <div class="card-body text-center">



                        <span class="fs-2 fw-bold d-block">{{ $client->nama }}</span>
                        <span class="fs-6 text-muted d-block">
                            {{ $client->email ?? 'Tidak ada email' }}
                        </span>

                        <br>

                        {{-- QUICK INFO --}}
                        <ul class="list-unstyled mb-4 text-start">
                            <li class="hstack justify-content-between mb-3">
                                <span class="text-muted hstack gap-2">
                                    <i class="feather-hash"></i>NIK
                                </span>
                                <span>{{ $client->nik }}</span>
                            </li>

                            <li class="hstack justify-content-between mb-3">
                                <span class="text-muted hstack gap-2">
                                    <i class="feather-phone"></i>No. HP
                                </span>
                                <span>{{ $client->no_hp }}</span>
                            </li>

                            <li class="hstack justify-content-between mb-0">
                                <span class="text-muted hstack gap-2">
                                    <i class="feather-map-pin"></i>Alamat
                                </span>
                                <span class="text-end">
                                    {{ $client->alamat ?? '-' }}
                                </span>
                            </li>
                        </ul>

                        {{-- ACTION --}}
                        <div class="d-flex gap-2 pt-3">
                            <form action="{{ route('clients.destroy', $client->id_client) }}" method="POST" class="w-50">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-light-brand w-100" onclick="return confirm('Yakin hapus data ini?')">
                                    <i class="feather-trash-2 me-2"></i>Hapus
                                </button>
                            </form>

                            <a href="{{ route('clients.edit', $client->id_client) }}" class="btn btn-primary w-50">
                                <i class="feather-edit me-2"></i>Edit
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            {{-- RIGHT CARD : DETAIL --}}
            <div class="col-xxl-7 col-xl-6">
                <div class="card stretch stretch-full">
                    <div class="card-header">
                        <h5 class="card-title">Detail Informasi Peserta</h5>
                        <p class="fs-12 text-muted mb-0">
                            Informasi lengkap kepesertaan & administrasi klien
                        </p>
                    </div>

                    <div class="card-body">

                        {{-- IDENTITAS --}}
                        <h6 class="fw-bold mb-3">
                            <i class="feather-user me-2"></i>Identitas Pribadi
                        </h6>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="text-muted">Nama Ibu Kandung</label>
                                <div class="fw-semibold">
                                    {{ $client->nama_ibu_kandung ?? '-' }}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="text-muted">NIK</label>
                                <div class="fw-semibold">
                                    {{ $client->nik }}
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        {{-- KONTAK --}}
                        <h6 class="fw-bold mb-3">
                            <i class="feather-phone me-2"></i>Kontak Peserta
                        </h6>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="text-muted">Nomor HP</label>
                                <div class="fw-semibold">
                                    {{ $client->no_hp ?? '-' }}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="text-muted">Email</label>
                                <div class="fw-semibold">
                                    {{ $client->email ?? '-' }}
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <label class="text-muted">Alamat Lengkap</label>
                                <div class="fw-semibold">
                                    {{ $client->alamat ?? '-' }}
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        {{-- KEPESERTAAN --}}
                        <h6 class="fw-bold mb-3">
                            <i class="feather-clipboard me-2"></i>Informasi Kepesertaan
                        </h6>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="text-muted">VA / Nomor Peserta</label>
                                <div class="fw-semibold">
                                    {{ $client->va ?? '-' }}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="text-muted">Faskes Pertama</label>
                                <div class="fw-semibold">
                                    {{ $client->faskes_pertama ?? '-' }}
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="text-muted">Kelas Kepesertaan</label>
                                <div>
                                    @if ($client->kelas)
                                        <span class="badge bg-primary">
                                            Kelas {{ $client->kelas }}
                                        </span>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        {{-- META --}}
                        <h6 class="fw-bold mb-3">
                            <i class="feather-clock me-2"></i>Informasi Sistem
                        </h6>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="text-muted">Tanggal Input</label>
                                <div class="fw-semibold">
                                    {{ $client->created_at->format('d M Y, H:i') }}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="text-muted">Terakhir Diperbarui</label>
                                <div class="fw-semibold">
                                    {{ $client->updated_at->format('d M Y, H:i') }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
