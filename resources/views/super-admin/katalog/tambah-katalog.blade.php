@php
    $title = 'Tambah Katalog';
    $form_action = '/super_admin/store-katalog';
    $right_button = 'Tambah';
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

            <div class="col-10 col-xl-10">
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-floating flex-fill mb-0">
                        <input class="form-control" name="nama" type="text" placeholder="Nama Katalog" required />
                        <label>Nama katalog</label>
                    </div>
                </div>
                <div class="form-floating flex-fill mb-4">
                    <input type="text" class="form-control" name="kuantitas" placeholder="Jumlah Katalog" required />
                    <label>Jumlah Katalog (kg)</label>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="w-100">
                        <input class="form-control" name="gambar" type="file" required />
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-floating flex-fill mb-0">
                        <select class="form-select" id="" name="kategori">
                            <option value="">Pilih Kategori</option>
                            <option>Organik</option>
                            <option>Anorganik</option>
                            <option>Lainnya</option>
                        </select>
                        <label>Kategori</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-floating flex-fill mb-0">
                        <textarea class="form-control" id="konten-tutorial" name="deskripsi" type="text" placeholder="Deskripsi" required></textarea>
                        <script>
                            CKEDITOR.replace('konten-tutorial', {
                                filebrowserUploadUrl: "{{ route('upload-ckeditor', ['_token' => csrf_token()]) }}",
                                filebrowserUploadMethod: 'form'
                            });
                        </script>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center col-10 my-3">
                <button class="btn btn-primary btn-lg " type="submit">{{ $right_button }}</button>
            </div>
        </div>
    </form>




</div>
