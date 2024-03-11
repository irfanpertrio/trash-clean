@php
    $title = 'Edit Reward';
    $form_action = '/super_admin/update-reward';
    $right_button = 'Edit';
@endphp

<div class="row d-flex justify-content-center">

    <form class="mx-1 mx-md-4" action="{{ $form_action }}" method="post" enctype="multipart/form-data">
        @csrf
        <p class="text-center h4 fw-bold mb-5 mx-1 mx-md-4 mt-4">{{ $title }}</p>
        <div class="row justify-content-center d-flex align-items-center">

            @if ($errors->any())
                <div class="alert alert-danger alert-block d-flex justify-content-between align-items-center col-10">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <button class="btn close" data-dismiss="alert" type="button">×</button>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block d-flex justify-content-between align-items-center col-10">
                    <strong>{{ $message }}</strong>
                    <button class="btn close" data-dismiss="alert" type="button">×</button>
                </div>
            @endif

            <input class="form-control" name="id" type="text" value="{{ $reward->id }}"
                placeholder="Judul Reward" required hidden />

            <div class="col-3 mb-4 text-center">
                <img class="img-fluid" src="{{ asset('storage/uploads/reward/' . $reward->gambar) }}" alt="Tutorial"
                    style="width: 100px; border-radius: 10px;">
            </div>

            <div class="col-10 col-xl-10">
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-floating flex-fill mb-0">
                        <input class="form-control" name="nama" type="text" value="{{ $reward->nama }}"
                            placeholder="Shopeepay" required />
                        <label>Nama</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="w-100">
                        <input class="form-control" name="gambar" type="file" />
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-floating flex-fill mb-0">
                        <select class="form-select" id="" name="kategori">
                            <option>{{ $reward->kategori }}</option>
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
                        <input class="form-control" name="jumlah" type="number" value="{{ $reward->jumlah }}"
                            placeholder="1" required />
                        <label>Stok</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-floating flex-fill mb-0">
                        <input class="form-control" name="koin" type="number" value="{{ $reward->koin }}"
                            placeholder="1" required />
                        <label>Harga TrashCoin</label>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center col-10 my-3">
                <button class="btn btn-primary btn-lg " type="submit">{{ $right_button }}</button>
            </div>
        </div>
    </form>




</div>
