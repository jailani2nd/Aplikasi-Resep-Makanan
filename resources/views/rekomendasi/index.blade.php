@extends('layouts.admin')
@section('title', 'Data Rekomendasi Resep')


@section('content')
<div class="container">
    <a href="rekoms.create" class="btn btn-primary mb-2">Tambah Data</a>

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
                <th>Jenis Penyakit Indo</th>
                <th>Jenis Penyakit Eng</th>
                <th>Judul Indo</th>
                <th>Judul Eng</th>
                <th>Biologis</th>
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
            @foreach ($rekoms as $rekom)
            <tr>
            <td>{{$i++}}</td>
            <td>{{$rekom->jenispenyakitindo}}</td>
            <td>{{$rekom->jenispenyakiteng}}</td>
            <td>{{$rekom->judulindo}}</td>
            <td>{{$rekom->juduleng}}</td>
            <td>{{$rekom->biologis}}</td>
            <td>{{$rekom->deskripsiindo}}</td>
            <td>{{$rekom->deskripsieng}}</td>
            <td><img src="/image/{{$rekom->image}}" alt="" class="img-fluid" width="90"></td>
            <td>
                <a href="{{ route('rekoms.edit', $rekom->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i></a>
                <form action="{{route('rekoms.destroy', $rekom->id)}}" method="POST">
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
