@extends('layouts.admin')
@section('title', 'Data slide')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 md-12">
            @if($message = Session::get('message'))
            <div class="alert alert-success">
                <strong>Berhasil</strong>
                <p>{{$message}}</p>
            </div>
            @endif
            <form action="/admin/slides/{{$slide->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="">Judul Indo</label>
                    <input type="text" class="form-control" name="judulindo" placeholder="Judul Indo" value="{{$slide->judulindo}}">
                </div>
                @error('judulindo')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul Eng</label>
                    <input type="text" class="form-control" name="juduleng" placeholder="Judul English" value="{{$slide->juduleng}}">
                </div>
                @error('juduleng')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi Indo </label>
                    <input type="text" class="form-control" name="deskripsiindo" placeholder="Deskripsi Indo" value="{{$slide->deskripsiindo}}">
                </div>
                @error('deskripsiindo')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi Eng</label>
                    <textarea name="deskripsieng" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi Eng">{{$slide->deskripsieng}}</textarea>
                    </div>
                    @error('deskripsieng')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                    <img src="/image/{{$slide->image}}" style="width: 90px" height="90px" alt="">
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
