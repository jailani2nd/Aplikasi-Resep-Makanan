@extends('layouts.admin')
@section('title', 'Data Resep')


@section('content')
<div class="container">
    <a href="/admin/reseps" class="btn btn-primary mb-2">Kembali</a>
    <div class="row">
        <div class="col-md-8 md-12">
            <form action="{{route('reseps.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Judul indo</label>
                    <input type="text" class="form-control" name="judulindo" placeholder="Judul Indo">
                </div>
                @error('judulindo')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul English</label>
                    <input type="text" class="form-control" name="juduleng" placeholder="Judul English">
                </div>
                @error('juduleng')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="Slug">
                </div>
                @error('slug')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi Indo</label>
                    <textarea name="deskripsiindo" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsiindo"></textarea>
                    </div>
                    @error('deskripsiindo')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi English</label>
                        <textarea name="deskripsieng" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi English"></textarea>
                        </div>
                        @error('deskripsieng')
                        <small style="color:red">{{$message}}</small>
                        @enderror
                        <div class="form-group">
                            <label for="">Deskripsi Pendek Indo</label>
                            <textarea name="deskripsipendekindo" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsipendekindo"></textarea>
                            </div>
                            @error('deskripsipendekindo')
                            <small style="color:red">{{$message}}</small>
                            @enderror
                            <div class="form-group">
                                <label for="">Deskripsi Pendek English</label>
                                <textarea name="deskripsipendekeng" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi English"></textarea>
                                </div>
                                @error('deskripsipendekeng')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                                <div class="form-group">
                                    <label for="">Kategori</label>
                                    <input type="text" class="form-control" name="categori" placeholder="Kategori">
                                </div>
                                @error('categori')
                                <small style="color:red">{{$message}}</small>
                                @enderror
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
