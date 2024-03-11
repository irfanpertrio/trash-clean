@extends('super-admin.layout')

@section('content-right')
    <div class="card">
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-edit-admin" role="tabpanel"
                    aria-labelledby="pills-edit-admin-tab">
                    @include('super-admin.admin.edit-admin')
                </div>
            </div>
        </div>

    </div>
@endsection
