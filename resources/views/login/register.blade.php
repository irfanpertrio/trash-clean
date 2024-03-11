@extends('login.layout')

@php
    $title = 'Register';
    $form_action = '/register/store';
    $left_button_href = '/login';
    $left_button = 'Login saja';
    $right_button = 'Register';
@endphp


@section('content')
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
            <input type="number" class="form-control" name="no_telepon" placeholder="082311223344" required />
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
@endsection

@section('content-right')
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
            <input type="password" class="form-control" id="password" name="password" placeholder="*****" minlength="8"
                required />
            <label>Password</label>
        </div>
    </div>
    <div class="d-flex flex-row align-items-center mb-4">
        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
        <div class="form-floating flex-fill mb-0">
            <input type="password" class="form-control invalid" id="password_confirmation" name="password_confirmation"
                placeholder="******" minlength="8" required />
            <label>Konfirmasi Password</label>
        </div>
    </div>
@endsection
