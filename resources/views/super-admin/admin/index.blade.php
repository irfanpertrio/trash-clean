@extends('super-admin.layout')

@section('content-right')
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-pills d-flex justify-content-center pt-2" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-list-admin-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-list-admin" type="button" role="tab" aria-controls="pills-list-admin"
                        aria-selected="true">List Admin</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-tambah-admin-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-tambah-admin" type="button" role="tab"
                        aria-controls="pills-tambah-admin" aria-selected="false">Tambah Admin</button>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-list-admin" role="tabpanel"
                    aria-labelledby="pills-list-admin-tab">
                    <div class="tab-pane fade show active" id="list-admin" role="tabpanel" aria-labelledby="list-admin-tab">
                        <div class="d-flex justify-content-center">
                            <div class="col-12 ps-2 text-center mb-3">
                                <h5>Daftar akun admin</h5>
                            </div>
                        </div>
                        @foreach ($admin as $key => $user)
                            @include('super-admin.admin.list-admin')
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-tambah-admin" role="tabpanel" aria-labelledby="pills-tambah-admin-tab">
                    @include('super-admin.admin.tambah-admin')
                </div>
            </div>
        </div>

    </div>
@endsection
