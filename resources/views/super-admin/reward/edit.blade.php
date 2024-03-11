@extends('super-admin.layout')

@section('content-right')
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-pills d-flex justify-content-center pt-2" id="pills-tab" role="tablist">
                
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-tambah-reward-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-tambah-reward" type="button" role="tab"
                        aria-controls="pills-tambah-reward" aria-selected="false">
                        Edit Reward
                    </button>
                </li>

            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-tambah-reward" role="tabpanel"
                    aria-labelledby="pills-tambah-reward-tab">
                    @include('super-admin.reward.edit-reward')
                </div>

            </div>
        </div>

    </div>
@endsection
