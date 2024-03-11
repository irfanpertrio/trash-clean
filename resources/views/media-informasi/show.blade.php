@extends('layouts.main')

@section('main-content')
    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details" id="portfolio-details">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row gy-4">

                        <div class="col-12 col-sm-4 col-lg-4 ms-2">
                            <img src="{{ asset('storage/uploads/media-informasi/' . $media_informasi->gambar) }}"
                                alt="">
                        </div>

                        <div class="col-12 col-sm-7 col-lg-7">
                            <div class="portfolio-info">
                                <small class="text-muted">{{ $media_informasi->created_at->format('Y-m-d') }}</small>

                                <p class="h3">{{ $media_informasi->judul }}</p>
                                {{ Illuminate\Mail\Markdown::parse($media_informasi->konten) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
