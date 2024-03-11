@extends('layouts.main')

@section('main-content')
    <section class="" style="background-color: #eee;">
        <div class="container" data-aos="fade-up" style="min-height: 400px">

            <div class="section-title">
                <h2>Notifikasi</h2>
            </div>

            <div class="row justify-content-between">

                <div class="col-12 col-md-5 m-4">

                    <h4 class="text-center mb-4">Notifikasi Baru</h4>
                    @foreach ($notification_jemput as $key => $item)
                        @if (count($item) != 0)
                            @include('notifikasi.list-jemput')
                        @endif
                    @endforeach

                    @foreach ($notification_antar as $key => $item)
                        @if (count($item) != 0)
                            @include('notifikasi.list-antar')
                        @endif
                    @endforeach

                </div>
                <div class="col-12 col-md-5 m-4">

                    <h4 class="text-center mb-4">History</h4>
                    @foreach ($notification_history as $key => $item)
                        @if (count($item) != 0)
                            @include('notifikasi.list-history')
                        @endif
                    @endforeach

                </div>
            </div>
            <div class="d-flex justify-content-center my-3 col-12">
                <a class="btn btn-secondary me-4" href="/admin/dashboard">
                    Kembali</a>
            </div>
        </div>
    </section>
@endsection
