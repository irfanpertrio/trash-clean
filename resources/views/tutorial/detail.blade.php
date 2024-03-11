@extends('layouts.main')

@section('main-content')
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-4" style="margin-top: 0px">
                    <img src="{{ asset('storage/uploads/tutorial/' . $tutorial->gambar) }}" alt="">
                </div>

                <div class="col-lg-8">
                    <div class="portfolio-info">
                        <h2>{{ $tutorial->judul }}</h2>
                        {{ Illuminate\Mail\Markdown::parse($tutorial->konten) }}
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
