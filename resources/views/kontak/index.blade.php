@extends('layouts.admin')
@section('title', 'Data Kontak')


@section('content')
<div class="container">
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
                <th>Nama Aplikasi</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Maps</th>
                <th>Jam Buka</th>
                <th>Email</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1
            @endphp
            @foreach ($kontaks as $kontak)
            <tr>
            <td>{{$i++}}</td>
            <td>{{$kontak->nama}}</td>
            <td>{{$kontak->nomortelepon}}</td>
            <td>{{$kontak->alamat}}</td>
            <td>{{$kontak->maps}}</td>
            <td>{{$kontak->jambuka}}</td>
            <td>{{$kontak->email}}</td>
            <td><img src="/image/{{$kontak->image}}" alt="" class="img-fluid" width="90"></td>
            <td>
                <a href="{{ route('kontaks.edit', $kontak->id) }}" class="btn btn-warning btn-sm "><i class="fas fa-edit"></i></a>
                <form action="{{route('kontaks.destroy', $kontak->id)}}" method="POST">
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
