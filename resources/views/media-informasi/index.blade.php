@extends('layouts.main')

@section('main-content')
    <!--Main layout-->
    <section style="background-color: #eee;">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Media Informasi</h2>
                {{-- <p>Produk yang telah kami olah</p> --}}
            </div>

            <div class="row d-flex justify-content-center">
                @foreach ($media_informasi as $item)
                    <div class="col-12 col-sm-6 col-lg-4 mb-4 mb-lg-0">

                        <!-- Blok baru -->
                        <div class="card">
                            <div class="card-body">
                                <a class="text-dark" href="/media-informasi/{{ $item->id }}">

                                    <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4"
                                        data-mdb-ripple-color="light">
                                        <img class="img-fluid"
                                            src="{{ asset('storage/uploads/media-informasi/' . $item->gambar) }}"
                                            style="width: 100%;" />
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-12 text-end">
                                            <small class="text-muted">{{ $item->created_at->format('Y-m-d') }}</small>
                                        </div>
                                    </div>

                                    <h5>{{ $item->judul }}</h5>
                                    <div class="text-limit-list-katalog">
                                        {{ Illuminate\Mail\Markdown::parse($item->konten) }}
                                    </div>

                                </a>
                            </div>
                        </div>
                        <!-- Blok baru -->
                    </div>
                @endforeach

            </div>
        </div>
    @endsection
