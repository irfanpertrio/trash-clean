<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TrashClean</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href={{ url('assets/img/iconTrashClean.png') }} rel="icon">
    <link href={{ url('assets/img/apple-touch-icon.png') }} rel="apple-touch-icon">

    <!-- Google Fonts -->

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href={{ url('assets/vendor/aos/aos.css') }} rel="stylesheet">
    <link href={{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
    <link href={{ url('assets/vendor/boxicons/css/boxicons.min.css') }} rel="stylesheet">
    <link href={{ url('assets/vendor/glightbox/css/glightbox.min.css') }} rel="stylesheet">
    <link href={{ url('assets/vendor/swiper/swiper-bundle.min.css') }} rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href={{ url('assets/css/style.css') }} rel="stylesheet">
    <link href={{ url('assets/css/style-custom.css') }} rel="stylesheet">

    {{-- cdn --}}
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>

</head>

<body>

    @include('layouts.header')

    <main id="main" style="min-height:90vh; background-color: #eee;">

        @yield('main-content')

    </main><!-- End #main -->

    @include('layouts.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>



    <!-- Vendor JS Files -->
    <script src={{ url('assets/vendor/purecounter/purecounter_vanilla.js') }}></script>
    <script src={{ url('assets/vendor/aos/aos.js') }}></script>
    <script src={{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ url('assets/vendor/glightbox/js/glightbox.min.js') }}></script>
    <script src={{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}></script>
    <script src={{ url('assets/vendor/swiper/swiper-bundle.min.js') }}></script>
    <script src={{ url('assets/vendor/php-email-form/validate.js') }}></script>

    <!-- Template Main JS File -->
    <script src={{ url('assets/scss/style.scss') }}></script>
    <script src={{ url('assets/js/jquery-3.6.1.js') }}></script>
    <script src={{ url('assets/js/main.js') }}></script>
    <script src={{ url('assets/js/main-custom.js') }}></script>


    @yield('custom-js')

</body>

</html>
