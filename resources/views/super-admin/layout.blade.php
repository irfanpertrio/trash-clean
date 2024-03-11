@extends('layouts.main')

@section('main-content')
    <section style="background-color: #eee;">
        <div class="container pb-5" data-aos="fade-up">
            
            <div class="section-title">
                <h2>Menu Super Admin</h2>
            </div>

            <div class="row">

                <div class="col-sm-4 col-lg-4 mb-4">
                    @include('super-admin.menu')
                </div>

                <div class="col-sm-8 col-lg-8 mb-4">
                    @yield('content-right')
                </div>
                    
            </div>
        </div>
    </section>
@endsection
