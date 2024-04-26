@extends('layouts.admin')
@section('title', 'Data Testimonial')


@section('content')
<div class="container">
    <a href="testis.create" class="btn btn-primary mb-2">Tambah Data</a>

    @if($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{$message}}</p>
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped table-fullwidth">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Deskripsi Indo</th>
                <th>Deskripsi Eng</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1
            @endphp
            @foreach ($testis as $testi)
            <tr>
            <td>{{$i++}}</td>
            <td>{{$testi->nama}}</td>
            <td>{{$testi->posisi}}</td>
            <td>{{$testi->deskripsiindo}}</td>
            <td>{{$testi->deskripsieng}}</td>
            <td><img src="/image/{{$testi->image}}" alt="" class="img-fluid" width="90"></td>
            <td>
                <a href="{{ route('testis.edit', $testi->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i></a>
                <form action="{{route('testis.destroy', $testi->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
@endsection
