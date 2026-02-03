@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">

        <div class="row mb-4">
            <div class="col-12">
                <h3 class="fw-bold">Data Pelanggan</h3>
            </div>
        </div>
        @include('layouts.admin.page-header-index')

        <div class="card shadow-sm border-0">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover" id="customerList">
                        <thead>
                            <tr>
                                <th class="wd-30">
                                    <div class="custom-control custom-checkbox ms-1">
                                        <input type="checkbox" class="custom-control-input" id="checkAllCustomer">
                                        <label class="custom-control-label" for="checkAllCustomer"></label>
                                    </div>
                                </th>
                                <th>Klien</th>
                                <th>Email</th>
                                <th>NIK</th>
                                <th>No. HP</th>
                                <th>Tanggal</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>

                        <tbody id="clientTable">
                            @include('layouts.partial.table')
                        </tbody>
                    </table>
                </div>

                {{-- PAGINATION --}}
                <div id="paginationWrapper" class="d-flex justify-content-end mt-3">
                    {!! $clients->links('pagination::bootstrap-5') !!}
                </div>

            </div>
        </div>
    </div>
@endsection
