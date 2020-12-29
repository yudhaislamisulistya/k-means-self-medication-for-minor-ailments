@extends('layouts.master')

@section('title', 'Admin Panel K-MEANS - Data Riwayat')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Data Transormasi Nilai</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nomor</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nilai Atribut</th>
                                <th scope="col">Nilai Obat</th>
                                <th scope="col">Cluster</th>
                                <th scope="col">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_riwayat as $key => $value)
                                <tr>
                                    <th>{{++$key}}</th>
                                    <td>{{$value->nama}}</td>
                                    <td>{{$value->nilai_atribut}}</td>
                                    <td>{{$value->nilai_obat}}</td>
                                    <td>{{$value->nilai_atribut}}</td>
                                    <td>{{$value->created_at}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
