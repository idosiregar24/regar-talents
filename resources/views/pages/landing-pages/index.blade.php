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
                            <p class="mt-2">
                                Konsultan Administrasi & Dokumen Resmi yang membantu
                                pengurusan data dan layanan administrasi secara rapi,
                                aman, dan terpercaya.
                            </p>
                            <div class="banner_btn mt-3">
                                <a href="#contact" class="btn_1">
                                    Hubungi Saya
                                </a>
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


    <!-- =======================
         Services Section
    ======================= -->
    <section class="service_part padding_bottom">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <br>
                        <br>
                        <p>Layanan Jasa</p>
                        <h2>Biro Jasa Regar Talent’s</h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-stretch">

                <!-- Layanan 1 -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="single_service_part h-100">
                        <div class="single_service_text">
                            <h2>Dokumen Kependudukan</h2>
                            <p>Pengurusan dokumen kependudukan:</p>
                            <ul class="service_list">
                                <li>Dokumen baru</li>
                                <li>Dokumen hilang</li>
                                <li>Dokumen rusak</li>
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
                            <ul class="service_list">
                                <li>Pendaftaran peserta</li>
                                <li>Pindah Fasilitas Kesehatan I</li>
                                <li>Naik / Turun kelas layanan</li>
                                <li>Pembayaran iuran</li>
                                <li>Dan layanan lainnya</li>
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
                            <ul class="service_list">
                                <li>Pendaftaran peserta</li>
                                <li>Pembayaran iuran</li>
                                <li>Dan layanan lainnya</li>
                            </ul>
                            <a href="#contact" class="service_link">Konsultasi →</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan 4 -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="single_service_part h-100">
                        <div class="single_service_text">
                            <h2>Konsultasi & Dokumen Lainnya</h2>
                            <p>
                                Konsultasi terkait dokumen, layanan online,
                                dan pengurusan dokumen administrasi lainnya.
                            </p>
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
