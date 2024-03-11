@extends('layouts.main')

@section('main-content')
    <section style="background-color: #eee;">
        <div class="container">

            <div class="section-title">
                <h2>History Reward</h2>
            </div>

            <div class="d-flex justify-content-center">
                <div class="card mb-4 col-12 col-lg-8">
                    <div class="card-body pr-1">
                        <div class="row d-flex justify-content-center align-items-center mb-3 ">

                            <div class="col-8 col-md-3 text-center mt-4 mx-4">
                                <img class="img-fluid" src="{{ asset('storage/uploads/reward/' . $reward->reward->gambar) }}"
                                    alt="User" style="width: 100%; border-radius: 10px;">
                            </div>

                            <div class="col-12 col-md-8 mt-4">

                                <div class=" row">
                                    <label class="col-sm-5 col-form-label" for="staticEmail">Jumlah
                                        {{ $reward->reward->nama }}</label>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-2">
                                            <p class="form-control-plaintext text-muted">{{ $reward->jumlah }}</p>
                                        </div>
                                    </div>
                                </div>

                                @if ($reward->reward->kategori == 'ewallet')
                                    <div class=" row">
                                        <label class="col-sm-5 col-form-label" for="staticEmail">Nomor
                                            {{ $reward->reward->nama }}</label>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-2">
                                                <p class="form-control-plaintext text-muted">{{ $reward->no_ewallet }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class=" row">
                                    <label class="col-sm-5 col-form-label" for="staticEmail">TrashCoin
                                        digunakan</label>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-2">
                                            <p class="form-control-plaintext text-muted">
                                                {{ $reward->jumlah * $reward->reward->koin }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class=" row">
                                    <label class="col-sm-5 col-form-label" for="staticEmail">Status</label>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-2">
                                            <p class="form-control-plaintext text-muted">{{ $reward->status }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <a class="btn btn-secondary my-3 col-4 col-md-2" href="/supplier/reward">Kembali</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
