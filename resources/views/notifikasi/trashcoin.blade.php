<div class="card">
    <div class="card-header">
        <h5>Jumlah Sampah & TrashCoin</h5>
    </div>
    <div class="card-body">
        <div class="row">
            @include('layouts.alert')

            <input name="user_id" type="text" value="{{ $user->id }}" hidden>

            <div class="col-12 col-sm-6">
                <label class="mb-2 ms-1">Organik</label>
                <div class="input-group mb-3">
                    <input class="form-control" name="organik" type="text" placeholder="1.0" />
                    <span class="input-group-text">kg</span>
                </div>
                <label class="mb-2 ms-1">Anorganik</label>
                <div class="input-group mb-3">
                    <input class="form-control" name="anorganik" type="text" placeholder="0.2" />
                    <span class="input-group-text">kg</span>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <label class="mb-2 ms-1">B3</label>
                <div class="input-group mb-3">
                    <input class="form-control" name="B3" type="text" placeholder="0.1" />
                    <span class="input-group-text">kg</span>
                </div>
                <label class="mb-2 ms-1">TrashCoin</label>
                <div class="input-group mb-3">
                    <img class="imput-group-text trash_coin me-2" src="{{ url('assets/img/trashcoin.png') }}">
                    <input class="form-control" name="trashcoin" type="text" placeholder="2000" required />
                    <span class="input-group-text">TC</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-end my-3">
    <a class="btn btn-secondary me-4" href="/admin/notification">
        Kembali</a>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-konfirmasi" type="button">
        Simpan</button>
</div>

<div class="modal fade" id="modal-konfirmasi" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Request</h5>
                <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
            </div>
            <form action="/supplier/products/store" method="POST">
                @csrf
                <div class="modal-body">
                    <p>Apakah request <strong>sudah sesuai?</strong></p>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Batal</button>
                    <button class="btn btn-primary" type="submit">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>
