@php
    $title = 'Tambah akun admin';
    $form_action = '/super_admin/update-admin';
    $right_button = 'Tambah';
@endphp

<div class="row d-flex justify-content-center">

    <form action="{{ $form_action }}" method="post" class="mx-1 mx-md-4">
        @csrf
        <p class="text-center h4 fw-bold mb-5 mx-1 mx-md-4 mt-4">{{ $title }}</p>
        <div class="row justify-content-center d-flex align-items-center">

            @if ($errors->any())
                <div class="alert alert-danger alert-block d-flex justify-content-between align-items-center">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <button type="button" class="btn close" data-dismiss="alert">×</button>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block d-flex justify-content-between align-items-center">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn close" data-dismiss="alert">×</button>
                </div>
            @endif

            <div class="col-10 col-xl-5">
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Anda" required />
                        <label>Nama Lengkap</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                        <input type="number" class="form-control" name="no_telepon" placeholder="082311223344"
                            required />
                        <label>No Telepon</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-location-dot fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat Anda" required />
                        <label>Alamat</label>
                    </div>
                </div>
            </div>

            <div class="col-10 col-xl-5">
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                        <input type="text" class="form-control" name="username" placeholder="user" required />
                        <label>Username</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                        <input type="password" class="form-control" id="password" name="password" placeholder="*****"
                            minlength="4" required />
                        <label>Password</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                        <input type="password" class="form-control invalid" id="password_confirmation"
                            name="password_confirmation" placeholder="******" minlength="4" required />
                        <label>Konfirmasi Password</label>
                    </div>
                </div>
            </div>


            <div class="d-flex justify-content-center col-10 my-3">
                <button type="submit" class="btn btn-primary btn-lg ">{{ $right_button }}</button>
            </div>
        </div>
    </form>




</div>
