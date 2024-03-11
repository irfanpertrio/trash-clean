@extends('layouts.main')

@section('main-content')
    <section style="background-color: #eee;">
        <div class="container pb-5">

            <div class="section-title">
                <h2>Request Reward</h2>
            </div>

            <div class="row d-flex justify-content-center mt-3 ">

                <div class="col-12 col-md-5 m-4">

                    <h4 class="text-center mb-4">Request Baru</h4>
                    @foreach ($rewards as $reward)
                        @include('admin.list-reward')
                    @endforeach

                </div>

                <div class="col-12 col-md-5 m-4">

                    <h4 class="text-center mb-4">History</h4>
                    @foreach ($rewards_history as $reward)
                        @include('admin.list-reward-history')
                    @endforeach
                </div>

            </div>



            <div class="row justify-content-center">
                <a class="btn btn-secondary my-3 col-4 col-md-2" href="/admin/dashboard">Kembali</a>
            </div>
        </div>
    </section>
@endsection
