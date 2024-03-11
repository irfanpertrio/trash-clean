@extends('layouts.main')

@section('main-content')
    <section class="" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <form action="{{ $form_action }}" method="post" class="mx-1 mx-md-4">
                                @csrf
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">{{ $title }}</p>
                                <div class="row justify-content-center d-flex align-items-center">

                                    @if ($errors->any())
                                        <div
                                            class="alert alert-danger alert-block d-flex justify-content-between align-items-center">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                            <button type="button" class="btn close" data-dismiss="alert">×</button>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('success'))
                                        <div
                                            class="alert alert-success alert-block d-flex justify-content-between align-items-center">
                                            <strong>{{ $message }}</strong>
                                            <button type="button" class="btn close" data-dismiss="alert">×</button>
                                        </div>
                                    @endif

                                    <div class="col-10 col-xl-5">
                                        @yield('content')
                                    </div>

                                    <div class="col-10 col-xl-5">
                                        @yield('content-right')
                                    </div>
                                    <div class="d-flex justify-content-end col-10 my-3">
                                        <a href="{{ $left_button_href }}"
                                            class="btn btn-secondary btn-lg me-5">{{ $left_button }}</a>
                                        <button type="submit" class="btn btn-primary btn-lg ">{{ $right_button }}</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom-js')
    <script src={{ url('assets/js/password-confirmation.js') }}></script>
@endsection
