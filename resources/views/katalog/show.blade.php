@extends('layouts.main')

@section('main-content')
    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details" id="portfolio-details">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row gy-4">

                        <div class="col-12 col-sm-4 col-lg-4 ms-2">
                            <img src="{{ asset('storage/uploads/katalog/' . $katalog->gambar) }}" alt="">

                            <div class="row d-flex justify-content-center mt-4 p-3">
                                <strong class="text-center">Tertarik dengan produk kami?</strong>
                                <a class="btn btn-secondary btn-sm mt-2" type="button" href="https://wa.me/+6282329519310">
                                    Hubungi admin
                                </a>
                            </div>

                        </div>

                        <div class="col-12 col-sm-7 col-lg-7">
                            <div class="portfolio-info">
                                <small class="text-muted">{{ $katalog->created_at->format('Y-m-d') }}</small>

                                <p class="h3">{{ $katalog->nama }}</p>
                                {{ Illuminate\Mail\Markdown::parse($katalog->deskripsi) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
