<!-- [ page-header ] start -->
<div class="page-header mb-4">
    <div class="page-header-left d-flex align-items-center">
        <div class="page-header-title">
            <h5 class="m-b-10">Data Peserta</h5>
        </div>
        <ul class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('clients.index') }}">Peserta</a>
            </li>
            <li class="breadcrumb-item active">
                Detail
            </li>
        </ul>
    </div>

    <div class="page-header-right ms-auto">
        <div class="d-flex align-items-center gap-2">

            {{-- BUTTON KEMBALI --}}
            <a href="{{ route('clients.index') }}" class="btn btn-outline-secondary">
                <i class="feather-arrow-left me-2"></i>
                Kembali
            </a>

        </div>
    </div>

    {{-- MOBILE TOGGLE --}}
    <div class="d-md-none d-flex align-items-center">
        <a href="javascript:void(0)" class="page-header-right-open-toggle">
            <i class="feather-align-right fs-20"></i>
        </a>
    </div>
</div>
<!-- [ page-header ] end -->
