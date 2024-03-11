@extends('layouts.main')

@section('main-content')
    <section style="background-color: #eee;">
        <div class="container">

            <div class="section-title">
                <h2>History Reward</h2>
            </div>

            <div class="row d-flex justify-content-center">

                <div class="col-12 col-md-8 col-xl-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Identitas</h5>
                        </div>
                        <div class="card-body align-items-center">
                            <div class="row justify-content-center">
                                <img class="rounded-circle img-fluid"
                                    src="{{ asset('storage/uploads/profil/' . $rewards->user->foto) }}" alt="avatar"
                                    style="width: 150px;">
                                <div class="row mt-5">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0">{{ $rewards->user->nama }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0">{{ $rewards->user->no_telepon }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="text-muted mb-0">{{ $rewards->user->alamat }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-xl-7">
                    <div class="card mb-4 ">
                        <div class="card-header">
                            <h5>Reward</h5>
                        </div>
                        <div class="card-body pr-1">
                            <div class="row d-flex justify-content-center align-items-center mb-3 ">

                                <div class="col-4 col-md-4 col-xl-3 text-center mb-5">
                                    <img class="img-fluid"
                                        src="{{ asset('storage/uploads/reward/' . $rewards->reward->gambar) }}"
                                        alt="User" style="width: 100%; border-radius: 10px;">
                                </div>

                                <div class="col-12 col-md-10 col-xl-8">

                                    <div class="row justify-content-center">
                                        <label class="col-sm-6 col-form-label" for="staticEmail">Jumlah
                                            {{ $rewards->reward->nama }}</label>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-2">
                                                <p class="form-control-plaintext text-muted">{{ $rewards->jumlah }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    @if ($rewards->reward->kategori == 'ewallet')
                                        <div class="row justify-content-center">
                                            <label class="col-sm-6 col-form-label" for="staticEmail">Nomor
                                                {{ $rewards->reward->nama }}</label>
                                            <div class="col-sm-6">
                                                <div class="input-group mb-2">
                                                    <p class="form-control-plaintext text-muted">{{ $rewards->no_ewallet }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="row justify-content-center">
                                        <label class="col-sm-6 col-form-label" for="staticEmail">TrashCoin
                                            digunakan</label>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-2">
                                                <p class="form-control-plaintext text-muted">
                                                    {{ $rewards->jumlah * $rewards->reward->koin }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <label class="col-sm-6 col-form-label" for="staticEmail">Status</label>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-2">
                                                <p class="form-control-plaintext text-muted">{{ $rewards->status }}</p>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>

                                <div class="row justify-content-center my-3">
                                    <a class="btn btn-secondary col-4" href="/admin/reward">Kembali</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
