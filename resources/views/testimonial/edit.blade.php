@extends('layouts.admin')
@section('title', 'Data Rekomendasi Resep')
@section('content')
<div class="container">
    <a href="/admin/rekoms" class="btn btn-primary mb-2">Kembali</a>
    <div class="row">
        <div class="col-md-8 md-12">
            <form action="{{route('rekoms.update', $rekom->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Jenis Penyakit Indo</label>
                    <input type="text" class="form-control" name="jenispenyakitindo" placeholder="Jenis Penyakit Indo" value="{{$rekom->jenispenyakitindo}}">
                </div>
                @error('jenispenyakitindo')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Jenis Penyakit English</label>
                    <input type="text" class="form-control" name="jenispenyakiteng" placeholder="Jenis Penyakit English" value="{{$rekom->jenispenyakiteng}}">
                </div>
                @error('jenispenyakiteng')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul Indo</label>
                    <input type="text" class="form-control" name="judulindo" placeholder="JudulIndo" value="{{$rekom->judulindo}}">
                </div>
                @error('judulindo')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul Eng</label>
                    <input type="text" class="form-control" name="juduleng" placeholder="JudulEng" value="{{$rekom->juduleng}}">
                </div>
                @error('juduleng')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Biologis</label>
                    <input type="text" class="form-control" name="biologis" placeholder="biologis" value="{{$rekom->biologis}}">
                </div>
                @error('biologis')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi Indo</label>
                    <textarea name="deskripsiindo" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi Indo">{{$rekom->deskripsiindo}}</textarea>
                    </div>
                    @error('deskripsiindo')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi Eng</label>
                        <textarea name="deskripsieng" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi eng">{{$rekom->deskripsieng}}</textarea>
                        </div>
                        @error('deskripsieng')
                        <small style="color:red">{{$message}}</small>
                        @enderror
                    <img src="/image/{{$rekom->image}}" style="width: 90px" height="90px" alt="">
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
