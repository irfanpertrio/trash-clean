@extends('layouts.main')

@section('main-content')
    <section style="background-color: #eee;">
        <div class="container pb-5">

            <div class="section-title">
                <h2>Reward</h2>
            </div>

            <div class="card mb-4">
                <div class="card mb-4 mb-md-0">
                    <div class="card-header">
                        <h5>Pilih Reward</h5>
                    </div>
                    <div class="card-body pr-1">

                        <div class="row d-flex justify-content-center mt-3 ">

                            @foreach ($rewards as $reward)
                                @include('supplier.list-reward')
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

            @include('supplier.history-reward')

            <div class="row justify-content-center">
                <a class="btn btn-secondary my-3 col-4 col-md-2" href="/supplier/dashboard">Kembali</a>
            </div>
        </div>
    </section>
@endsection
