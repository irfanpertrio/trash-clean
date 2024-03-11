@extends('layouts.main')

@section('main-content')
    <section style="background-color: #eee;">
        <div class="container pb-5">

            <div class="section-title">
                <h2>Request User</h2>
            </div>

            <div class="row justify-content-center">

                <div class="col-12 col-md-8 col-lg-4">
                    <div class="col-12">
                        <div class="card mb-0">
                            <div class="card-header">
                                <h5>Identitas</h5>
                            </div>
                            <div class="card-body align-items-center">
                                <div class="row justify-content-center">
                                    <img class="rounded-circle img-fluid"
                                        src="{{ asset('storage/uploads/profil/' . $user->foto) }}" alt="avatar"
                                        style="width: 150px;">
                                    <div class="row mt-5">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Full Name</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="text-muted mb-0">{{ $user->nama }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Phone</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="text-muted mb-0">{{ $user->no_telepon }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Address</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="text-muted mb-0">{{ $user->alamat }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mt-2 mb-3">
                                        <div class="col-sm-12 mb-2">
                                            <h5 class="mb-0 text-center">Jenis Request</h5>
                                        </div>
                                        <div class="col-sm-12">
                                            <h6 class="text-muted mb-0 text-center">
                                                {{ $products[0]->status_barang }}
                                                @if ('{{ $products[0]->status_barang }}' == 'diantar')
                                                    <i class="fa-solid fa-person-walking"></i>
                                                @else
                                                    <i class="fa-solid fa-person-walking-arrow-right"></i>
                                                @endif
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <form class="col-12 col-md-8 col-lg-8" action="/admin/notification/update" method="post">
                    @csrf
                    <div class="row d-flex justify-content-center">

                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5>Validasi Request</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row flex-column-reverse">

                                        @foreach ($products as $product)
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="{{ $product->nama_barang }}"
                                                        name="{{ $product->nama_barang }}" type="checkbox" value="valid">
                                                    <label class="form-check-label" for="{{ $product->nama_barang }}">
                                                        {{ $product->nama_barang }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            @include('notifikasi.trashcoin')
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection
