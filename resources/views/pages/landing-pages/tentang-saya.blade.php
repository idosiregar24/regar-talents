@extends('layouts.landing-page.app')
@section('content')

<!-- about part start-->
<section class="about_part section_padding" id="about">
    <div class="container">
        <div class="row">
            <!-- About Text -->
            <div class="col-lg-6">
                <div class="about_text">
                    <h4>Tentang Saya</h4>
                    <p>
                        Saya <strong>Hottison Siregar</strong>, penyedia jasa administrasi
                        yang berfokus pada pendataan klien, pengelolaan dokumen,
                        serta penataan arsip secara rapi dan sistematis.
                        Saya berkomitmen menjaga setiap data agar tersimpan
                        dengan aman, akurat, dan mudah diakses saat dibutuhkan.
                    </p>
                    <div class="experiance">
                        <h2>10+</h2>
                        <p>Tahun <span>Pengalaman</span></p>
                    </div>
                </div>
            </div>

            <!-- Experience List -->
            <div class="col-lg-6">
                <div class="experiance_list">
                    <h4>Bidang Pengalaman</h4>
                    <div class="experiance_list_iner">
                        <div class="single_experiance_list">
                            <h5>Pendataan Klien</h5>
                            <p>Pencatatan dan pengelolaan data klien secara rapi, akurat, dan terstruktur.</p>
                        </div>
                        <div class="single_experiance_list">
                            <h5>Administrasi Layanan</h5>
                            <p>Pengelolaan administrasi sesuai kebutuhan layanan dan dokumen klien.</p>
                        </div>
                        <div class="single_experiance_list">
                            <h5>Manajemen Arsip</h5>
                            <p>Pengarsipan dokumen fisik dan digital secara aman dan tertata.</p>
                        </div>
                        <div class="single_experiance_list">
                            <h5>Pelayanan Klien</h5>
                            <p>Memberikan pelayanan yang komunikatif, profesional, dan terpercaya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part end-->

@endsection
