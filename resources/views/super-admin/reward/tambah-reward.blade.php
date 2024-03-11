@php
    $title = 'Tambah Reward';
    $form_action = '/super_admin/store-reward';
    $right_button = 'Tambah';
@endphp

<div class="row d-flex justify-content-center">

    <form action="{{ $form_action }}" method="post" class="mx-1 mx-md-4" enctype="multipart/form-data">
        @csrf
        <p class="text-center h4 fw-bold mb-5 mx-1 mx-md-4 mt-4">{{ $title }}</p>
        <div class="row justify-content-center d-flex align-items-center">

            @if ($errors->any())
                <div class="alert alert-danger alert-block d-flex justify-content-between align-items-center col-10">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <button type="button" class="btn close" data-dismiss="alert">×</button>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block d-flex justify-content-between align-items-center col-10">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn close" data-dismiss="alert">×</button>
                </div>
            @endif

            <div class="col-10 col-xl-10">
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-floating flex-fill mb-0">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Reward" required />
                        <label>Nama</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="w-100">
                        <input type="file" class="form-control" name="gambar" required />
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-floating flex-fill mb-0">
                        <select name="kategori" id="" class="form-select">
                            <option value="">Pilih Kategori</option>
                            <option value="ewallet">Ewallet</option>
                            <option value="barang">Barang</option>
                            <option>Lainnya</option>
                        </select>
                        <label>Kategori</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-floating flex-fill mb-0">
                        <input type="number" class="form-control" name="jumlah" placeholder="1" required />
                        <label>Stok</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-floating flex-fill mb-0">
                        <input type="number" class="form-control" name="koin" placeholder="1" required />
                        <label>Harga TrashCoin</label>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center col-10 my-3">
                <button type="submit" class="btn btn-primary btn-lg ">{{ $right_button }}</button>
            </div>
        </div>
    </form>




</div>
