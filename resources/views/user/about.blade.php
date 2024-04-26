@extends('layouts.user.index')
@section('content')
<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="background: white">
        <div class="container" data-aos="fade-up">
          <div class="section-title text-center mt-5">
            <h2 class="text-dark">Contact</h2>
            <p class="text-dark">Silahkan Hubungi Kami</p>
          </div>
        </div>
          <div class="row mt-5">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
              <div class="about-img">
                <img src="image/{{$about->image}}"  alt="">
              </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content mt-5">
              <h3 class="text-dark">{{$about->judulindo}}</h3>
              <p class="fst-italic text-dark">
                {{$about->deskripsiindo}}
              </p>
              <p class="text-dark">
               {{$about->kelebihanindo}}
              </p>
            </div>
          </div>

        </div>
      </section><!-- End About Section -->

</main>
@endsection
