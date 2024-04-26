@extends('layouts.user.index')
@section('content')
<section class="bg-light text-dark">
<div class="container">
    <div class="row">
        <h1 class="mt-5">{{$rekoms->judulindo}}</h1>
        <div class="col-lg-8">
            <img src="/image/{{$rekoms->image}}" class="img-fluid" alt="Gambar Makanan">
             <p>{{$rekoms->deskripsiindo}}</p>
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
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informasi</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Waktu Persiapan: <span class="fw-bold">30 menit</span></li>
                        <li class="list-group-item">Waktu Memasak: <span class="fw-bold">45 menit</span></li>
                        <li class="list-group-item">Porsi: <span class="fw-bold">4</span></li>
                    </ul>
                    <div class="mt-3">
                        <button type="button" class="btn btn-primary">Simpan Resep</button>
                        <button type="button" class="btn btn-success">Bagikan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
