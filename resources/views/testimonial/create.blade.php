@extends('layouts.admin')
@section('title', 'Data Testimonial')


@section('content')
<div class="container">
    <a href="/admin/testis" class="btn btn-primary mb-2">Kembali</a>
    <div class="row">
        <div class="col-md-8 md-12">
            <form action="{{route('testis.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="nama">
                </div>
                @error('nama')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Profesi</label>
                    <input type="text" class="form-control" name="posisi" placeholder="posisi">
                </div>
                @error('posisi')
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
