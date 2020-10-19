@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{route('backend.kegiatan.update', $kegiatan->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success')}}
                                </div>
                            @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kode Kegiatan</label>
                                    <input type="text" name="kode_kegiatan" class="form-control" value="{{$kegiatan->kode_kegiatan}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Kegiatan</label>
                                    <input type="text" name="nama_kegiatan" class="form-control" value="{{$kegiatan->nama_kegiatan}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" value="{{$kegiatan->tanggal}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <input type="text" name="status_kegiatan" class="form-control" value="{{$kegiatan->status_kegiatan}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="text" name="harga_tiket" class="form-control" value="{{$kegiatan->harga_tiket}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="images" class="form-control" value="{{$kegiatan->images}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kapasitas</label>
                                    <input type="number" name="kapasitas" class="form-control" value="{{$kegiatan->kapasitas}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Informasi</label>
                                    <textarea name="keterangan" id="" class="form-control">{{$kegiatan->keterangan}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-outline-info">Simpan</button>
                            <a href="{{route('backend.kegiatan.index')}}" class="btn btn-outline-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection