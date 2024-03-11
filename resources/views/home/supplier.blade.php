@extends('home.identitas')

@section('role-based-content-left')
    <div class="card mb-4 pb-4">
        <div class="card-body">
            <div class="row d-flex align-items-center justify-content-between mb-4">
                <div class="col-8">
                    <h4><span class="text-primary font-italic">TrashCoin</span>
                        Anda
                    </h4>
                </div>
                <div class="col-4 text-end">
                    <a class="btn btn-primary" href="/supplier/reward">Tukar</a>
                </div>
            </div>
            
            <div class="row point_left align-items-center justify-content-between">
                <div class="col-8">
                    <b>
                        <p class="point_text text-center">{{ $koin }}</p>
                    </b>
                </div>
                <div class="col-4 text-end">
                    <img class="trash_coin me-2 text-end" src="{{ url('assets/img/trashcoin.png') }}">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('role-based-content-right')
    {{-- JUMLAH SAMPAH --}}
    <div class="row supplier">
        <div class="col-lg">
            <div class="card mb-4 mb-md-0">
                <div class="card-body pr-1">

                    <div class="d-flex justify-content-between  align-items-center">
                        <h4>
                            <span class="text-primary font-italic">Data Sampah</span>
                        </h4>
                        @include('home.modal-tambah')
                    </div>

                    <div class="row d-flex align-items-end">
                        <div class="col-lg-12 col-12 ">
                            <h5 class="mt-4 mb-1" style="font-size: .99rem;">Organik</h5>
                            <div class="progress rounded" style="height: 30px;">
                                <div class="progress-bar bg-custom" role="progressbar" aria-valuenow="{{ $organik }}"
                                    aria-valuemin="0" aria-valuemax="5" style="width: 100%">
                                    {{ $organik }} kg</div>
                                <div class="progress-bar bg-secondary" role="progressbar"
                                    aria-valuenow="{{ $organik_pending }}" aria-valuemin="0" aria-valuemax="5"
                                    style="width: {{ $organik_pending }}0%">
                                    {{ $organik_pending }} tsp</div>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex align-items-end">
                        <div class="col-lg-12 col-12">
                            <h5 class="mt-4 mb-1" style="font-size: .99rem;">Anorganik</h5>
                            <div class="progress rounded" style="height: 30px;">
                                <div class="progress-bar bg-custom" role="progressbar" aria-valuenow="{{ $anorganik }}"
                                    aria-valuemin="0" aria-valuemax="10" style="width: 100%">
                                    {{ $anorganik }} kg</div>
                                <div class="progress-bar bg-secondary" role="progressbar"
                                    aria-valuenow="{{ $anorganik_pending }}" aria-valuemin="0" aria-valuemax="10"
                                    style="width: {{ $anorganik_pending }}0%">
                                    {{ $anorganik_pending }} tsp</div>
                            </div>
                        </div>

                    </div>

                    <div class="row d-flex align-items-end">
                        <div class="col-lg-12 col-12">
                            <h5 class="mt-4 mb-1" style="font-size: .99rem;">B3</h5>
                            <div class="progress rounded" style="height: 30px;">
                                <div class="progress-bar bg-custom" role="progressbar" aria-valuenow="{{ $b3 }}"
                                    aria-valuemin="0" aria-valuemax="10" style="width: 100%">
                                    {{ $b3 }} kg</div>


                                <div class="progress-bar bg-secondary" role="progressbar"
                                    aria-valuenow="{{ $b3_pending }}" aria-valuemin="0" aria-valuemax="10"
                                    style="width: {{ $b3_pending }}0%">
                                    {{ $b3_pending }} tsp</div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
