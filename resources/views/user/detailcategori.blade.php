@extends('layouts.user.index')
@section('content')
<section class="bg-light text-dark">
<div class="container">
    <div class="row">
        <h1 class="mt-5">{{$categoris->judulindo}}</h1>
        <div class="col-lg-8">
            <img src="/image/{{$categoris->image}}" class="img-fluid" alt="Gambar Makanan">
             <p>{{$categoris->deskripsiindo}}</p>
            <h2 class="mt-3">Bahan-Bahan</h2>
            <ul>
                <li>Bahan 1</li>
                <li>Bahan 2</li>
                <li>Bahan 3</li>
                <!-- Tambahkan bahan lainnya -->
            </ul>
            <h2>Cara Membuat</h2>
            <ol>
                <li>Langkah 1</li>
                <li>Langkah 2</li>
                <li>Langkah 3</li>
                <!-- Tambahkan langkah-langkah lainnya -->
            </ol>
        </div>
      
    </div>
</div>
</section>
@endsection
