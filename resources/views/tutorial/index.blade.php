@extends('layouts.main')

@section('main-content')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Tutorial</h2>
                <p>Tutorial mengelola sampah supaya menjadi barang yang lebih bernilai untuk diperjualbelikan</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-Organik">Organik</li>
                        <li data-filter=".filter-Anorganik">Anorganik</li>
                        <li data-filter=".filter-Lainnya">Lainnya</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                @foreach ($tutorial as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $item->kategori }}">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('storage/uploads/tutorial/' . $item->gambar) }}" class="img-fluid"
                                alt="">
                            <a href="{{ '/tutorial/detail/' . $item->id }}">
                                <div class="portfolio-info">
                                    <h4>{{ $item->judul }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
