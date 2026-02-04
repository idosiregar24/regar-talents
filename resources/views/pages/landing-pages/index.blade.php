@extends('layouts.landing-page.app')

@section('content')
    <!-- =======================
             Banner / Hero Section
        ======================= -->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Halo, saya</h5>
                            <h1>Hottison Siregar</h1>
                            <p class="mt-1">
                                Membantu urusan administrasi Anda dengan layanan yang rapi, aman, dan terpercaya.
                            </p>
                            <br>
                            <div class="banner_btn">
                                <a href="#contact" class="btn_1">Hubungi Saya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
             End Banner
        ======================= -->

    <br>

    <!-- =======================
             Services Section
        ======================= -->
    <section class="service_part padding_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_tittle text-center">
                        <p>Layanan Jasa</p>
                        <h2>Solusi Lengkap Pengurusan Administrasi & Dokumen</h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-stretch">

                <!-- Layanan 1 -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="single_service_part h-100">
                        <div class="single_service_text">
                            <h2>Dokumen Kependudukan</h2>
                            <p class="mb-2">
                                Pengurusan dokumen baru, hilang, atau rusak:
                            </p>
                            <ul class="service_list">
                                <li>E-KTP</li>
                                <li>KIA</li>
                                <li>Kartu Keluarga</li>
                                <li>Akta Lahir / Nikah / Kematian</li>
                                <li>Surat Pindah & lainnya</li>
                            </ul>
                            <a href="#contact" class="service_link">Konsultasi →</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan 2 -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="single_service_part active h-100">
                        <div class="single_service_text">
                            <h2>BPJS Kesehatan / KIS</h2>
                            <p class="mb-2">
                                Pendampingan administrasi jaminan kesehatan:
                            </p>
                            <ul class="service_list">
                                <li>Pendaftaran peserta</li>
                                <li>Pindah Faskes I</li>
                                <li>Naik / Turun kelas</li>
                                <li>Pembayaran iuran</li>
                                <li>Layanan terkait lainnya</li>
                            </ul>
                            <a href="#contact" class="service_link">Konsultasi →</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan 3 -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="single_service_part h-100">
                        <div class="single_service_text">
                            <h2>BPJS Ketenagakerjaan</h2>
                            <p class="mb-2">
                                Pengurusan administrasi ketenagakerjaan :
                            </p>
                            <ul class="service_list">
                                <li>Pendaftaran peserta</li>
                                <li>Cek status kepesertaan</li>
                                <li>Pembayaran iuran</li>
                                <li>Layanan lainnya</li>
                            </ul>
                            <a href="#contact" class="service_link">Konsultasi →</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan 4 -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="single_service_part h-100">
                        <div class="single_service_text">
                            <h2>Dokumen Administrasi Lainnya</h2>
                            <p class="mb-2">
                                Pengurusan dokumen tambahan:
                            </p>
                            <ul class="service_list">
                                <li>NPWP</li>
                                <li>NIB</li>
                                <li>PBB</li>
                                <li>Dokumen lainnya</li>
                            </ul>
                            <a href="#contact" class="service_link">Konsultasi →</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan 5 -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="single_service_part h-100">
                        <div class="single_service_text">
                            <h2>Konsultasi Administrasi</h2>
                            <p class="mb-2">
                                Konsultasi dokumen & layanan online :
                            </p>
                            <ul class="service_list">
                                <li>DAPODIK</li>
                                <li>Kendala sistem online</li>
                                <li>Konsultasi Pengurusan Paspor dan Layanan Keimigrasian</li>
                                <li>Layanan administrasi lainnya</li>
                            </ul>
                            <a href="#contact" class="service_link">Konsultasi →</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =======================
             End Services
        ======================= -->
@endsection
