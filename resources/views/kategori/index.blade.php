@extends('layouts.admin')
@section('title', 'Data Kategori')


@section('content')
<div class="container">
    <a href="categoris.create" class="btn btn-primary mb-2">Tambah Data</a>

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
                <th>Nomor Urut</th>
                <th>Judul Indo</th>
                <th>Judul Eng</th>
                <th>Deskripsi Indo</th>
                <th>Judul Eng</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1
            @endphp
            @foreach ($categoris as $categori)
            <tr>
            <td>{{$i++}}</td>
            <td>{{$categori->nomor}}</td>
            <td>{{$categori->judulindo}}</td>
            <td>{{$categori->juduleng}}</td>
            <td>{{$categori->deskripsiindo}}</td>
            <td>{{$categori->deskripsieng}}</td>
            <td><img src="/image/{{$categori->image}}" alt="" class="img-fluid" width="90"></td>
            <td>
                <a href="{{ route('categoris.edit', $categori->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i></a>
                <form action="{{route('categoris.destroy', $categori->id)}}" method="POST">
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
