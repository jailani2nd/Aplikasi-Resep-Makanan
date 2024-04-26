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
<main id="main">
     <!-- ======= Menu Section ======= -->
     <section id="menu" class="menu section-bg " style="background: white">
        <div class="container" data-aos="fade-up">
          <div class="section-title text-center mt-5">
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
                      <a href="" class="btn btn-primary">Read More</a>
                  </div>
              </div>
              @endforeach
          </div>
        </div>
      </section><!-- End Specials Section -->

</main>
@endsection
