<div class="card-header">
    <ul class="nav nav-pills d-flex justify-content-center" id="pills-tab" role="tablist">

        @if (request()->is('super_admin/edit-tutorial*'))
        @else
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-list-tutorial-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-list-tutorial" type="button" role="tab"
                    aria-controls="pills-list-tutorial" aria-selected="true">List Tutorial</button>
            </li>
        @endif

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-tambah-tutorial-tab" data-bs-toggle="pill"
                data-bs-target="#pills-tambah-tutorial" type="button" role="tab"
                aria-controls="pills-tambah-tutorial" aria-selected="false">
                Tambah Tutorial
            </button>
        </li>

    </ul>
</div>
<div class="card-body">
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-list-tutorial" role="tabpanel"
            aria-labelledby="pills-list-tutorial-tab">
            <div class="d-flex justify-content-center">
                <div class="col-12 ps-2 text-center mb-3">
                    <h5>Daftar Tutorial</h5>
                </div>
            </div>

            @foreach ($tutorial as $key => $tutorial)
                @include('super-admin.tutorial.list-tutorial')
            @endforeach

        </div>

        <div class="tab-pane fade" id="pills-tambah-tutorial" role="tabpanel"
            aria-labelledby="pills-tambah-tutorial-tab">
            @include('super-admin.tutorial.tambah-tutorial')
        </div>
    </div>
</div>
