 @extends('layouts.main')
 @section('main-content')
     <!-- ======= About Section ======= -->
     <section id="about" class="about">
         <div class="container">

             <div class="row">
                 <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                     <img src="assets/img/about.jpg" class="img-fluid" alt="">
                 </div>
                 <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content " data-aos="fade-right">
                     <h3 class="mb-3">Sampah seseorang bisa jadi harta bagi orang lain!</h3>
                     <div class="text-about-landing-page mb-2">
                         {{ Illuminate\Mail\Markdown::parse($post->konten_tentang) }}
                     </div>
                 </div>
             </div>

         </div>
     </section>
 @endsection
