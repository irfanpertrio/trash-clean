@extends('super-admin.layout')

@section('content-right')
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-pills d-flex justify-content-center pt-2" id="pills-tab" role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-list-reward-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-list-reward" type="button" role="tab" aria-controls="pills-list-reward"
                        aria-selected="true">List Product Reward</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-tambah-reward-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-tambah-reward" type="button" role="tab"
                        aria-controls="pills-tambah-reward" aria-selected="false">
                        Tambah Reward
                    </button>
                </li>

            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-list-reward" role="tabpanel"
                    aria-labelledby="pills-list-reward-tab">
                    <div class="d-flex justify-content-center">
                        <div class="col-12 ps-2 text-center mb-3">
                            <h5>Daftar Product Reward</h5>
                        </div>
                    </div>

                    @foreach ($reward as $key => $reward)
                        @include('super-admin.reward.list-reward')
                    @endforeach

                </div>

                <div class="tab-pane fade" id="pills-tambah-reward" role="tabpanel"
                    aria-labelledby="pills-tambah-reward-tab">
                    @include('super-admin.reward.tambah-reward')
                </div>
            </div>
        </div>

    </div>
@endsection
