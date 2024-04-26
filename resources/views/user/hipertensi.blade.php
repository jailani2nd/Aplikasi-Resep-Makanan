@extends('layouts.user.index')
@section('content')
<main id="main">
      <!-- ======= Menu Section ======= -->
      <section id="menu" class="menu section-bg" style="background: white">
        <div class="container" data-aos="fade-up">
          <div class="section-title text-center mt-5">
            <h2 class="text-dark">Resep Penyakit Hipertensi</h2>
            <p class="text-dark">Beberapa Resep Dari Kami Untuk Penyakit Hipertensi!!</p>
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
</main>
@endsection
