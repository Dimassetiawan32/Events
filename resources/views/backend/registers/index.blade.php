@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="d-flex px-2 py-2">
                        <div>
                            <a href="{{route('registers.ambil-formulir')}}" class="btn btn-outline-primary ">Daftar</a>
                        </div>
                        <div></div>
                    </div>
                    <div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Pendaftaran</th>
                                    <th>Kode Kegiatan</th>
                                    <th>Nama</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Status</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Reg200052003</td>
                                    <td>DZ22121314</td>
                                    <td>Diims</td>
                                    <td>17082020</td>
                                    <td>Menunggu</td>
                                    <td>
                                        <a href="{{route('registers.show')}}" class="btn btn-sm btn-outline-primary">Show</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection