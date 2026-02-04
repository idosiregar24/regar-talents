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
                        Saya <strong>Hottison Siregar</strong>, pengelola
                        <strong>Biro Jasa Regar Talent’s</strong> yang melayani
                        pengurusan dokumen kependudukan dan administrasi jaminan sosial.
                        Saya membantu masyarakat menghadapi proses administrasi yang
                        sering kali rumit agar menjadi lebih
                        <strong>mudah, cepat, dan tertib</strong>.
                    </p>

                    <p>
                        Dengan pengalaman lebih dari <strong>5 tahun</strong>,
                        saya berkomitmen memberikan pelayanan yang
                        <strong>aman, transparan, dan bertanggung jawab</strong>,
                        serta mendampingi klien hingga seluruh proses selesai.
                    </p>

                    <div class="experiance">
                        <h2>5+</h2>
                        <p>Tahun <span>Pengalaman</span></p>
                    </div>
                </div>
            </div>

            <!-- Experience / Services List -->
            <div class="col-lg-6">
                <div class="experiance_list">
                    <h4>Layanan Jasa</h4>
                    <div class="experiance_list_iner">

                        <!-- Kependudukan -->
                        <div class="single_experiance_list">
                            <h5>Dokumen Kependudukan</h5>
                            <p>
                                Pengurusan dokumen kependudukan baru, hilang, maupun rusak,
                                seperti e-KTP, Kartu Keluarga, KIA, Akta Lahir, Akta Nikah,
                                Akta Kematian, Surat Pindah, dan dokumen kependudukan lainnya.
                            </p>
                        </div>

                        <!-- BPJS Kesehatan -->
                        <div class="single_experiance_list">
                            <h5>BPJS Kesehatan / KIS</h5>
                            <p>
                                Layanan administrasi BPJS Kesehatan / KIS meliputi
                                pendaftaran peserta, pindah Fasilitas Kesehatan I,
                                naik atau turun kelas layanan, pembayaran iuran,
                                serta layanan terkait lainnya.
                            </p>
                        </div>

                        <!-- BPJS Ketenagakerjaan -->
                        <div class="single_experiance_list">
                            <h5>BPJS Ketenagakerjaan</h5>
                            <p>
                                Pengurusan administrasi BPJS Ketenagakerjaan berupa
                                pendaftaran peserta, pendampingan pembayaran iuran,
                                serta layanan administrasi terkait lainnya.
                            </p>
                        </div>

                        <!-- Konsultasi -->
                        <div class="single_experiance_list">
                            <h5>Konsultasi Dokumen & Layanan Online</h5>
                            <p>
                                Konsultasi terkait dokumen administrasi,
                                layanan berbasis sistem online,
                                serta pengurusan dokumen resmi lainnya sesuai kebutuhan.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- about part end-->

@endsection
