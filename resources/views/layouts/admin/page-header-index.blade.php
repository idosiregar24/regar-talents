<!-- PAGE HEADER -->
<div class="mb-4">

    {{-- TITLE --}}
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-3">
        <div>
            <ul class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Peserta</li>
            </ul>
        </div>

        {{-- ACTION BUTTON --}}
        <a href="{{ route('clients.create') }}" class="btn btn-primary">
            <i class="feather-user-plus me-2"></i>
            Tambah Klien
        </a>
    </div>

    {{-- FILTER BAR --}}
    <form id="filterForm"
          action="{{ route('clients.index') }}"
          method="GET"
          class="d-flex flex-wrap align-items-center gap-2">

        {{-- SEARCH --}}
        <div class="input-group" style="max-width: 260px;">
            <span class="input-group-text bg-white">
                <i class="feather-search"></i>
            </span>
            <input type="text"
                   id="searchInput"
                   name="q"
                   class="form-control"
                   placeholder="Cari nama / NIK / HP"
                   value="{{ request('q') }}">
        </div>

        {{-- FILTER KELAS --}}
        <select name="kelas" class="form-select" style="max-width: 160px;">
            <option value="">Semua Kelas</option>
            <option value="1" @selected(request('kelas') == 1)>Kelas 1</option>
            <option value="2" @selected(request('kelas') == 2)>Kelas 2</option>
            <option value="3" @selected(request('kelas') == 3)>Kelas 3</option>
        </select>

        {{-- RESET --}}
        @if (request()->hasAny(['q', 'kelas']))
            <a href="{{ route('clients.index') }}" class="btn btn-outline-secondary">
                Reset
            </a>
        @endif

    </form>
</div>
