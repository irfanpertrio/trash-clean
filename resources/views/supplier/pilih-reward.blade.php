@extends('layouts.main')

@section('main-content')
    <section style="background-color: #eee;">
        <div class="container">

            <div class="section-title">
                <h2>Tukar Koin</h2>
            </div>

            <div class="d-flex justify-content-center">
                <div class="card mb-4 col-12 col-lg-8">
                    <div class="card-body pr-1">
                        <form style="width: 100%;" action="/supplier/reward/tukar/{{ $reward->id }}" method="post">
                            @csrf
                            <div class="row d-flex justify-content-center mb-3 ">

                                <div class="col-12 col-md-12">

                                    @if ($errors->any())
                                        <div
                                            class="alert alert-danger alert-block d-flex justify-content-between align-items-center">

                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach

                                            <button class="btn close" data-dismiss="alert" type="button">×</button>
                                        </div>
                                    @endif

                                    @if ($message = Session::get('success'))
                                        <div
                                            class="alert alert-success alert-block d-flex justify-content-between align-items-center">
                                            <strong>{{ $message }}</strong>
                                            <button class="btn close" data-dismiss="alert" type="button">×</button>
                                        </div>
                                    @endif

                                </div>

                                <div class="col-12 col-md-4 text-center mt-4">
                                    <img class="img-fluid" src="{{ asset('storage/uploads/reward/' . $reward->gambar) }}"
                                        alt="User" style="width: 100%; border-radius: 10px;">
                                </div>

                                <div class="col-12 col-md-8 mt-4">
                                    <div class="mb-2 row">
                                        <label class="col-sm-5 col-form-label" for="staticEmail">TrashCoin Anda</label>
                                        <div class="col-sm-6">
                                            <input class="form-control-plaintext" id="staticEmail" name="trashcoin_user"
                                                type="text" value="{{ $koin }}" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label class="col-sm-5 col-form-label" for="staticEmail">TrashCoin
                                            diperlukan</label>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-2">
                                                <input class="form-control-plaintext" id="jumlah-trashcoin" name="jumlah_tc"
                                                    type="number" value="{{ $reward->koin * 1 }}" placeholder="0" required
                                                    readonly />
                                                <script>
                                                    var koin_diperlukan = {{ $reward->koin }};
                                                    var jumlah_max = parseInt({{ Auth::user()->point }} / koin_diperlukan);
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label class="col-sm-5 col-form-label" for="staticEmail">Jumlah
                                            {{ $reward->nama }}</label>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-2">
                                                <input class="form-control" id="jumlah-reward" name="jumlah" type="number"
                                                    value="1" max="{{ $koin }}" maxlength="2" placeholder="1"
                                                    required />
                                            </div>
                                        </div>
                                    </div>

                                    @if ($reward->kategori == 'ewallet')
                                        <div class="mb-2 row">
                                            <label class="col-sm-5 col-form-label" for="staticEmail">Nomor
                                                {{ $reward->nama }}</label>
                                            <div class="col-sm-6">
                                                <div class="input-group mb-2">
                                                    <input class="form-control" name="no_telepon" type="number"
                                                        value="{{ Auth::user()->no_telepon }}"
                                                        placeholder="{{ Auth::user()->no_telepon }}" required />
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                                <input name="reward_id" type="text" value="{{ $reward->id }}" hidden>
                                <input name="reward_kategori" type="text" value="{{ $reward->kategori }}" hidden>

                                <a href="/supplier/reward" class="btn btn-secondary m-3 col-4 col-md-2"
                                    type="button">Kembali</a>
                                <button class="btn btn-primary m-3 col-4 col-md-2" data-bs-toggle="modal"
                                    data-bs-target="#modal-konfirmasi" type="button">Tukar</button>
                                @include('supplier.modal-konfirmasi')

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
