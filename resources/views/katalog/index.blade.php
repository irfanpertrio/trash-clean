@extends('layouts.main')

@section('main-content')
    <!-- ======= Katalog Section ======= -->
    <section class="section-bg portfolio" id="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Katalog</h2>
                <p>Produk yang telah kami olah</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li class="filter-active" data-filter="*">All</li>
                        <li data-filter=".filter-Organik">Organik</li>
                        <li data-filter=".filter-Anorganik">Anorganik</li>
                        <li data-filter=".filter-Lainnya">Lainnya</li>
                    </ul>
                </div>
            </div>

            <div class="portfolio-container">

                @foreach ($katalog as $item)
                    <div class="col-md-12 col-xl-12 portfolio-item filter-{{ $item->kategori }}">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                            <img class="w-100"
                                                src="{{ asset('storage/uploads/katalog/' . $item->gambar) }}" />
                                            <a href="{{ '/katalog/detail/' . $item->id }}">
                                                <div class="hover-overlay">
                                                    <div class="mask"
                                                        style="background-color: rgba(253, 253, 253, 0.15);">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <h5>{{ $item->nama }}</h5>
                                        <div class=" mb-1 text-muted small">
                                            <span>{{ $item->kategori }}</span>
                                        </div>

                                        <div class="text-limit-list-katalog mb-2">
                                            {{ Illuminate\Mail\Markdown::parse($item->deskripsi) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                        <div class="d-flex flex-row align-items-center mb-1">
                                            <h4 class="mb-1 me-1">{{ $item->kuantitas }} kg</h4>
                                        </div>
                                        <div class="d-flex flex-column mt-4">
                                            <a class="btn btn-success btn-sm"
                                                href="/katalog/{{ $item->id }}">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section><!-- End Services Section -->
@endsection
