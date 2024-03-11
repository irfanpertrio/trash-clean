@php
    $title = 'Edit akun admin';
    $form_action = '/super_admin/update-admin';
    $right_button = 'Update';
@endphp

<div class="row d-flex justify-content-center">

    <form class="mx-1 mx-md-4" action="{{ $form_action }}" method="post">
        @csrf
        <p class="text-center h4 fw-bold mb-5 mx-1 mx-md-4 mt-4">{{ $title }}</p>
        <div class="row justify-content-center d-flex align-items-center">

            @if ($errors->any())
                <div class="alert alert-danger alert-block d-flex justify-content-between align-items-center">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <button class="btn close" data-dismiss="alert" type="button">×</button>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block d-flex justify-content-between align-items-center">
                    <strong>{{ $message }}</strong>
                    <button class="btn close" data-dismiss="alert" type="button">×</button>
                </div>
            @endif

            <div class="col-10 col-xl-5">
                <input class="form-control" name="id" type="text" value="{{ $admin->id }}" hidden />

                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                        <input class="form-control" name="nama" type="text" value="{{ $admin->nama }}"
                            placeholder="Nama Anda" required />
                        <label>Nama Lengkap</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                        <input class="form-control" name="no_telepon" type="number" value="{{ $admin->no_telepon }}"
                            placeholder="082311223344" required />
                        <label>No Telepon</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-location-dot fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                        <input class="form-control" name="alamat" type="text" value="{{ $admin->alamat }}" required
                            placeholder="Alamat Anda" />
                        <label>Alamat</label>
                    </div>
                </div>
            </div>

            <div class="col-10 col-xl-5">
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                        <input class="form-control" name="username" type="text" value="{{ $admin->username }}"
                            placeholder="user" required />
                        <label>Username</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                        <input class="form-control" id="password" name="password" type="password" placeholder="*****"
                            minlength="4" required />
                        <label>Password</label>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                        <input class="form-control" id="password_confirmation" name="password_confirmation"
                            type="password" placeholder="*****" minlength="4" required />
                        <label>Konfirmasi Password</label>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center col-10 my-3">
                <button class="btn btn-primary btn-lg " type="submit">{{ $right_button }}</button>
            </div>
        </div>
    </form>

</div>
