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
                        <p class="mt-3">
                            Penyedia jasa administrasi, pendataan klien, dan pengelolaan data
                            yang rapi, aman, dan profesional.
                        </p>
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
<section class="service_part padding_bottom" id="services">
    <div class="container">
        <!-- Section Title -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_tittle text-center">
                    <p>Layanan</p>
                    <h2>Jasa yang Saya Tawarkan</h2>
                </div>
            </div>
        </div>

        <!-- Services List -->
        <div class="row align-items-center">

            <!-- Service Item -->
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part">
                    <div class="single_service_text">
                        <span class="flaticon-layers"></span>
                        <h2>Pendataan Klien</h2>
                        <p>
                            Pencatatan dan pengelolaan data klien secara rapi dan akurat.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service Item (Active) -->
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part active">
                    <div class="single_service_text">
                        <span class="flaticon-design"></span>
                        <h2>Administrasi Layanan</h2>
                        <p>
                            Pengelolaan administrasi sesuai kebutuhan individu atau instansi.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service Item -->
            <div class="col-lg-4 col-sm-6">
                <div class="single_service_part">
                    <div class="single_service_text">
                        <span class="flaticon-speaker"></span>
                        <h2>Konsultasi Data</h2>
                        <p>
                            Konsultasi pengelolaan data dan sistem pencatatan yang efisien.
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
