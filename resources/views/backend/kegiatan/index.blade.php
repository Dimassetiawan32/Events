@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{route('backend.kegiatan.create')}}" class="btn btn-outline-primary">Tambah Kegiatan</a>
            </div>

            <div class="card border-0 shadow">
                <div class="px-3 py-3">
                    <h4 class="text muted">Master Kegiatan</h4>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode kegiatan</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal</th>
                                <th>Informasi</th>
                                <th>Status</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2342</td>
                                <td>Pengajian</td>
                                <td>10/10/10</td>
                                <td>ada</td>
                                <td>operasi</td>
                                <td>
                                    <a href="{{route('backend.kegiatan.formEdit')}}" class="btn btn-outline-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-outline-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 