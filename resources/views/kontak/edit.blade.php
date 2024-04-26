@extends('layouts.admin')
@section('title', 'Data Kontak')
@section('content')
<div class="container">
    <a href="/admin/kontaks" class="btn btn-primary mb-2">Kembali</a>
    <div class="row">
        <div class="col-md-8 md-12">
            <form action="{{route('kontaks.update', $kontak->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Nama Aplikasi</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Aplikasi" value="{{$kontak->nama}}">
                </div>
                @error('nama')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Nomor Telepon</label>
                    <input type="text" class="form-control" name="nomortelepon" placeholder="Nomor Telepon" value="{{$kontak->nomortelepon}}">
                </div>
                @error('nomortelepon')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Jam Buka</label>
                    <input type="text" class="form-control" name="jambuka" placeholder="Jam Buka" value="{{$kontak->jambuka}}">
                </div>
                @error('jambuka')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{$kontak->email}}">
                </div>
                @error('email')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" id="" cols="30" rows="10" class="form-control" placeholder="Alamat">{{$kontak->alamat}}</textarea>
                    </div>
                    @error('alamat')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Maps</label>
                        <textarea name="maps" id="" cols="30" rows="10" class="form-control" placeholder="Maps">{{$kontak->maps}}</textarea>
                        </div>
                        @error('maps')
                        <small style="color:red">{{$message}}</small>
                        @enderror
                    <img src="/image/{{$kontak->image}}" style="width: 90px" height="90px" alt="">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
