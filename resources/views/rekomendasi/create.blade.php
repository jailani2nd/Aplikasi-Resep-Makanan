@extends('layouts.admin')
@section('title', 'Data Rekomendasi Resep')


@section('content')
<div class="container">
    <a href="/admin/rekoms" class="btn btn-primary mb-2">Kembali</a>
    <div class="row">
        <div class="col-md-8 md-12">
            <form action="{{route('rekoms.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Jenis Penyakit Indo</label>
                    <input type="text" class="form-control" name="jenispenyakitindo" placeholder="jenispenyakitindo">
                </div>
                @error('jenispenyakitindo')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Jenis Penyakit Eng</label>
                    <input type="text" class="form-control" name="jenispenyakiteng" placeholder="jenispenyakiteng">
                </div>
                @error('jenispenyakiteng')
                <small style="color:red">{{$message}}</small>
                @enderror
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
                    <label for="">Biologis</label>
                    <input type="text" class="form-control" name="biologis" placeholder="Biologis">
                </div>
                @error('biologis')
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
