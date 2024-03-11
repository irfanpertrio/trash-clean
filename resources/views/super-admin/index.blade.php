@extends('home.identitas')

@section('role-based-content-left')
    @include('super-admin.menu')
@endsection

@section('role-based-content-right')
    @include('super-admin.landing-page.lpcontent')
@endsection
