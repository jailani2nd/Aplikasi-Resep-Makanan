@extends('layouts.admin')
@section('title', 'Data Resep')
@section('content')
<div class="container">
    <a href="/admin/reseps" class="btn btn-primary mb-2">Kembali</a>
    <div class="row">
        <div class="col-md-8 md-12">
            <form action="{{route('reseps.update', $resep->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul Indo</label>
                    <input type="text" class="form-control" name="judulindo" placeholder="JudulIndo" value="{{$resep->judulindo}}">
                </div>
                @error('judulindo')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul Eng</label>
                    <input type="text" class="form-control" name="juduleng" placeholder="JudulEng" value="{{$resep->juduleng}}">
                </div>
                @error('juduleng')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="Judul" value="{{$resep->slug}}">
                </div>
                @error('slug')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi Pendek Indo</label>
                    <textarea name="deskripsipendekindo" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi pendek Indo">{{$resep->deskripsipendekindo}}</textarea>
                    </div>
                    @error('deskripsipendekindo')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi Pendek Eng</label>
                        <textarea name="deskripsipendekeng" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi Pendek eng">{{$resep->deskripsipendekeng}}</textarea>
                        </div>
                        @error('deskripsipendekeng')
                        <small style="color:red">{{$message}}</small>
                        @enderror
                <div class="form-group">
                    <label for="">Deskripsi Indo</label>
                    <textarea name="deskripsiindo" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi Indo">{{$resep->deskripsiindo}}</textarea>
                    </div>
                    @error('deskripsiindo')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi Eng</label>
                        <textarea name="deskripsieng" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi eng">{{$resep->deskripsieng}}</textarea>
                        </div>
                        @error('deskripsieng')
                        <small style="color:red">{{$message}}</small>
                        @enderror
                        <div class="form-group">
                            <label for="">Kategori</label>
                            <input type="text" class="form-control" name="categori" placeholder="categori" value="{{$resep->categori}}">
                        </div>
                        @error('categori')
                        <small style="color:red">{{$message}}</small>
                        @enderror
                    <img src="/image/{{$resep->image}}" style="width: 90px" height="90px" alt="">
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
