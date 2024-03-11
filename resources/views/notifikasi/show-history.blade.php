@extends('layouts.main')

@section('main-content')
    <section style="background-color: #eee;">
        <div class="container pb-5">

            <div class="section-title">
                <h2>History User</h2>
            </div>

            <div class="row justify-content-center">

                <div class="col-12 col-md-10 col-lg-10">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Identitas</h5>
                        </div>
                        <div class="card-body align-items-center my-2">
                            <div class="row justify-content-center">
                                <div class="col-3 d-flex justify-content-center align-items-center">

                                    <img class="rounded-circle img-fluid"
                                        src="{{ asset('storage/uploads/profil/' . $user->foto) }}" alt="avatar"
                                        style="width: 150px;">

                                </div>
                                <div class="col-9">

                                    <div class="row">
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
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <form class="col-12 col-md-10 col-lg-10" action="/admin/notification/update" method="post">
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5>Products</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table-history-user" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5vw;">Tanggal</th>
                                                    <th style="width: 5vw;">Nama Produk</th>
                                                    <th style="width: 1vw;">Jumlah</th>
                                                    <th style="width: 2vw;">TrashCoin Didapat</th>
                                                    <th style="width: 2vw;">Total TrashCoin</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                @foreach ($products_history as $product)
                                                    <tr>
                                                        <td>{{ $product->created_at }}</td>
                                                        <td>{{ $product->nama_barang }}</td>
                                                        <td>{{ $product->jumlah_barang }}</td>
                                                        <td>{{ $product->trashcoin_didapat }}</td>
                                                        <td>{{ $product->trashcoin_sekarang }}</td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                            </div>

                            <div class="d-flex justify-content-end my-3">
                                <a class="btn btn-secondary me-4" href="/admin/notification">
                                    Kembali</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection

@section('custom-js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ url('assets/js/table-history-user.js') }}"></script>
@endsection
