@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">

    {{-- HEADER --}}
    <div class="row mb-4">
        <div class="col-12">
            <h3 class="fw-bold">Dashboard RegarTalents+</h3>
            <p class="text-muted">
                Sistem penyimpanan data klien administrasi
            </p>
        </div>
    </div>

    {{-- SUMMARY --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Total Klien</h6>
                    <h2 class="fw-bold">{{ $totalClients }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Ditambahkan Hari Ini</h6>
                    <h2 class="fw-bold">{{ $todayClients }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h6 class="text-muted">Update Terakhir</h6>
                    <p class="fw-semibold mb-0">
                        {{ $lastUpdated ? $lastUpdated->format('d M Y, H:i') : '-' }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- TABLE --}}
    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white fw-semibold">
                    Data Klien Terbaru
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>No HP</th>
                                    <th>Faskes</th>
                                    <th>Dibuat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($latestClients as $client)
                                    <tr>
                                        <td>{{ $client->nik }}</td>
                                        <td>{{ $client->nama }}</td>
                                        <td>{{ $client->no_hp ?? '-' }}</td>
                                        <td>{{ $client->faskes_pertama ?? '-' }}</td>
                                        <td>{{ $client->created_at->format('d M Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted py-4">
                                            Belum ada data klien
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
