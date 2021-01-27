@extends('layouts.master')
@section('title', 'Admin Panel K-MEANS - Hasil Pemilihan gejala')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Hasil Pemilihan gejala</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                     <div class="iq-card-body">
                         Menghitung Jarak Ke n dari Titik Pusat
                         @php
                             $arrayD = array();
                             $result = 0;
                         @endphp
                         @foreach ($data_transformasi_nilai as $key => $value)
                         @php
                             $result = sqrt(pow($nilai_atribut-$value->nilai_atribut, 2) + pow($nilai_gejala-$value->nilai_gejala, 2));
                             array_push($arrayD, $result);
                         @endphp
                         <p>Cluster ({{$value->cluster}})  D (1, {{++$key}}) = SQRT(({{$nilai_atribut}} - {{$value->nilai_atribut}})<sup>2</sup> + ({{$nilai_gejala}} - {{$value->nilai_gejala}})<sup>2</sup>) = {{$result}}
                         @endforeach
                        <br>
                        <br>
                        <br>
                         <p>Nilai gejala : <b>{{$nilai_gejala}}</b></p>
                         <p>Berdasarkan Perhitungan Diatas, Didapatkan <b>{{min($arrayD)}}</b> Merupakan Jarak Terdekat Dari Cluster. {{Helper::getStatusObatByGejala($nilai_gejala)}} Merupakan Claster dan Saran Obat <b>{{Helper::getSaranObatByGejala($nilai_gejala)}}</b></b></p>
                         <form action="{{route('postSimpanRiwayat')}}" method="POST">
                            @csrf
                            <input type="hidden" name="nilai_atribut" value="{{$nilai_atribut}}">
                            <input type="hidden" name="nilai_gejala" value="{{$nilai_gejala}}">
                            <input type="hidden" name="nama" value="{{$nama}}">
                            <input type="hidden" name="hasil" value="{{min($arrayD)}}">
                            <button type="submit" class="btn btn-primary">Submit</button>
                         </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


