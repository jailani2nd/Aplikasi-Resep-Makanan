@extends('layouts.user.index')
@section('content')
    <main id="main">
        <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="background: white">
        <div class="container" data-aos="fade-up">

          <div class="section-title text-center mt-5">
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
    </main>
@endsection
