@extends('layouts.user.index')
@section('content')
<style>
    .custom-card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .custom-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 20px rgba(0, 0, 0, 0.1);
    }
</style>
  <!-- ======= Hero Section ======= -->
  <section id="hero" style="background: url('image/{{$slides->image}}') top center;" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1 class="mb-2">{{$slides->judulindo}}</h1>
          <h2>D{{$slides->deskripsiindo}}</h2>

          <div class="btns">
            <a href="/resep" class="btn-menu animated fadeInUp scrollto">Lihat Resep</a>
            <a href="/diabetes" class="btn-book animated fadeInUp scrollto">Lihat Category</a>
          </div>
        </div>


      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about bg-light">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="image/{{$about->image}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
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

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us" style="background: white">
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2 class="text-dark">Kategori Penyakit</h2>
          <p class="text-dark">Beberapa Kategori Penyakit</p>
        </div>
        <div class="row">
            @foreach ($categoris as $categori)
            <div class="card custom-card m-2" style="width: 18rem;">
                <img src="image/{{$categori->image}}" class="card-img-top mt-1" alt="...">
                <div class="card-body">
                    <h4 class="text-dark">{{$categori->judulindo}}</h4>
                    <p class="card-text text-dark">{{$categori->deskripsiindo}}</p>
                    <a href="categori/{{$categori->nomor}}" class="btn btn-primary">Read More</a>
                </div>
            </div>
            @endforeach
        </div>



      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg" style="background: white">
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2 class="text-dark">Resep</h2>
          <p class="text-dark">Beberapa Resep Dari Kami!!</p>
        </div>
        <div class="row">
            @foreach ($reseps as $resep)
            <div class="card custom-card m-2" style="width: 18rem;">
                <img src="image/{{$resep->image}}" style="width: 200px" height="200px" class="card-img-top mt-2 ms-4" alt="...">
                <div class="card-body">
                    <h4 class="text-dark">{{$resep->judulindo}}</h4>
                    <p class="card-text text-dark">{{$resep->deskripsipendekindo}}</p>
                    <a href="/resep/{{$resep->slug}}" class="btn btn-primary">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials" style="background: white">
      <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
          <h2 class="text-dark">Resep Rekomendasi</h2>
          <p class="text-dark">Beberapa Resep Rekomendasi</p>
        </div>
        <div class="row">
            @foreach ($rekoms as $rekom)
            <div class="card custom-card m-2" style="width: 18rem;">
                <img src="image/{{$rekom->image}}" style="width: 200px" height="200px" class="card-img-top mt-2 ms-4" alt="...">
                <div class="card-body">
                    <h4 class="text-dark">{{$rekom->judulindo}}</h4>
                    <p class="card-text text-dark">{{$rekom->jenispenyakitindo}}</p>
                    <p class="card-text text-dark">{{$rekom->biologis}}</p>
                    <p class="card-text text-dark">{{$rekom->deskripsiindo}}</p>
                    <a href="/rekom/{{$rekom->jenispenyakitindo}}" class="btn btn-primary">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg" style="background: white">
      <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
          <h2 class="text-dark">Testimonials</h2>
          <p class="text-dark">Apa Kata Pengguna Kami!!</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @foreach ($testis as $testi)
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{$testi->deskripsiindo}}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="image/{{$testi->image}}" style="width: 100px" height="100px" class="testimonial-img" alt="">
                <h3 class="text-dark">{{$testi->nama}}</h3>
                <h4 class="text-dark">{{$testi->posisi}}</h4>
              </div>
            </div><!-- End testimonial item -->
            @endforeach
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="background: white">
      <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
          <h2 class="text-dark">Contact</h2>
          <p class="text-dark">Silahkan Hubungi Kami</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="{{$kontaks->maps}}" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4 class="text-dark">Location:</h4>
                <p class="text-dark">{{$kontaks->alamat}}</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4 class="text-dark">Open Hours:</h4>
                <p class="text-dark">
                  Monday-Saturday:<br>
                 {{$kontaks->jambuka}}
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4 class="text-dark">Email:</h4>
                <p class="text-dark">{{$kontaks->email}}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4 class="text-dark">Call:</h4>
                <p class="text-dark">{{$kontaks->nomortelepon}}</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection
