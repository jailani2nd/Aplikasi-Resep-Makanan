@extends('layouts.admin')
@section('title', 'Data Kategori')
@section('content')
<div class="container">
    <a href="/admin/categoris" class="btn btn-primary mb-2">Kembali</a>
    <div class="row">
        <div class="col-md-8 md-12">
            <form action="{{route('categoris.update', $categori->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Nomor</label>
                    <input type="text" class="form-control" name="nomor" placeholder="Judul" value="{{$categori->nomor}}">
                </div>
                @error('nomor')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul Indo</label>
                    <input type="text" class="form-control" name="judulindo" placeholder="JudulIndo" value="{{$categori->judulindo}}">
                </div>
                @error('judulindo')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul Eng</label>
                    <input type="text" class="form-control" name="juduleng" placeholder="JudulEng" value="{{$categori->juduleng}}">
                </div>
                @error('juduleng')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi Indo</label>
                    <textarea name="deskripsiindo" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi Indo">{{$categori->deskripsiindo}}</textarea>
                    </div>
                    @error('deskripsiindo')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi Eng</label>
                        <textarea name="deskripsieng" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi eng">{{$categori->deskripsieng}}</textarea>
                        </div>
                        @error('deskripsieng')
                        <small style="color:red">{{$message}}</small>
                        @enderror
                    <img src="/image/{{$categori->image}}" style="width: 90px" height="90px" alt="">
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
