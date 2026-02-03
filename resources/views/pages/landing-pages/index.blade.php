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
                                Penyedia jasa administrasi, pendataan klien, dan pengelolaan data
                                yang rapi, aman, dan profesional.
                            </p>
                            <br>
                            <div class="banner_btn">
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

    <br>

    <!-- =======================
         Services Section
    ======================= -->
    <section class="service_part padding_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_tittle text-center">
                        <p>Layanan Kami</p>
                        <h2>Solusi Keluhan Administrasi Masyarakat</h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">

                <!-- Layanan 1 -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <h2>Pengurusan SIM</h2>
                            <p>
                                Pendampingan dan informasi terkait pembuatan, perpanjangan,
                                serta kendala data SIM yang bermasalah.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Layanan 2 -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service_part active">
                        <div class="single_service_text">
                            <h2>KTP & Kartu Keluarga</h2>
                            <p>
                                Bantuan pengurusan KTP dan KK, termasuk perbaikan data,
                                perubahan status, dan kehilangan dokumen.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Layanan 3 -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <h2>BPJS Kesehatan</h2>
                            <p>
                                Pendampingan pendaftaran, perubahan data peserta,
                                serta penanganan kendala kepesertaan BPJS Kesehatan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Layanan 4 -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <h2>BPJS Ketenagakerjaan</h2>
                            <p>
                                Bantuan pengurusan BPJS Ketenagakerjaan, klaim,
                                serta permasalahan data kepesertaan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Layanan 5 -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <h2>Data Bermasalah</h2>
                            <p>
                                Penanganan data ganda, tidak sinkron, atau tidak valid
                                pada sistem administrasi kependudukan.
                            </p>
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
