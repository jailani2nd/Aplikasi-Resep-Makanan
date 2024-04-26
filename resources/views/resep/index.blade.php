@extends('layouts.admin')
@section('title', 'Data Resep')


@section('content')
<div class="container">
    <a href="reseps.create" class="btn btn-primary mb-2">Tambah Data</a>

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
                <th>Judul Indo</th>
                <th>Judul Eng</th>
                <th>Slug</th>
                <th>Deskripsi Pendek Indo</th>
                <th>Judul Pendek Eng</th>
                <th>Deskripsi Indo</th>
                <th>Deskripsi Eng</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1
            @endphp
            @foreach ($reseps as $resep)
            <tr>
            <td>{{$i++}}</td>
            <td>{{$resep->judulindo}}</td>
            <td>{{$resep->juduleng}}</td>
            <td>{{$resep->slug}}</td>
            <td>{{$resep->deskripsipendekindo}}</td>
            <td>{{$resep->deskripsipendekeng}}</td>
            <td>{{$resep->deskripsiindo}}</td>
            <td>{{$resep->deskripsieng}}</td>
            <td>{{$resep->categori}}</td>
            <td><img src="/image/{{$resep->image}}" alt="" class="img-fluid" width="90"></td>
            <td>
                <a href="{{ route('reseps.edit', $resep->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i></a>
                <form action="{{route('reseps.destroy', $resep->id)}}" method="POST">
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
