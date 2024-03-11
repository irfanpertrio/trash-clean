@extends('home.identitas')

@section('role-based-content-left')
    <div class="card mb-4 py-3">
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-10">
                    <a href="{{ '/' . Auth::user()->role . '/notification' }}">
                        <p class="mb-0">Request Sampah</p>
                    </a>
                </div>
                <div class="col-2">
                    <a href="{{ '/' . Auth::user()->role . '/notification' }}">
                        <i class="bi bi-bell-fill">
                            @if ($jumlah_notif != 0)
                                <span
                                    class="position-absolute translate-middle p-1 bg-danger border border-light rounded-circle">
                                </span>
                            @endif
                        </i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <a class="mb-0" href="/admin/reward">Request Reward</a>
                </div>
                <div class="col-2">
                    <a href="index">
                        <i class="bi bi-people-fill">
                            @if ($jumlah_notif_reward != 0)
                                <span
                                    class="position-absolute translate-middle p-1 bg-danger border border-light rounded-circle">
                                </span>
                            @endif
                        </i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('role-based-content-right')
    {{-- JUMLAH SAMPAH --}}
    <div class="card mb-4 mb-md-0">
        <div class="card-body">
            <div class="d-flex justify-content-between  align-items-center mb-3">
                <h4><span class="text-primary font-italic">Jumlah Sampah</span>
                    Terkumpul dan Tervalidasi
                </h4>
            </div>

            <div>
                <h5 class="mb-1" style="font-size: .99rem;">Organik</h5>
                <div class="progress rounded" style="height: 20px;">
                    <div class="progress-bar bg-custom" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                        style="width: 100%">{{ $jumlah_organik }} KG</div>
                </div>
                <h5 class="mt-4 mb-1" style="font-size: .99rem;">Anorganik</h5>
                <div class="progress rounded" style="height: 20px;">
                    <div class="progress-bar bg-custom" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                        style="width: 100%">{{ $jumlah_anorganik }} KG</div>
                </div>
                <h5 class="mt-4 mb-1" style="font-size: .99rem;">B3</h5>
                <div class="progress rounded" style="height: 20px;">
                    <div class="progress-bar bg-custom" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                        style="width: 100%">{{ $jumlah_b3 }} KG</div>
                </div>
            </div>
        </div>
    </div>
@endsection
