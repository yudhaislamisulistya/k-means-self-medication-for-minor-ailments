@extends('layouts.master')
@section('title', 'Admin Panel K-MEANS - Hasil Pemilihan Obat')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Hasil Pemilihan Obat</h4>
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
                             $result = sqrt(pow($nilai_atribut-$value->nilai_atribut, 2) + pow($nilai_obat-$value->nilai_obat, 2));
                             array_push($arrayD, $result);
                         @endphp
                         <p>Cluster ({{$value->cluster}})  D (1, {{++$key}}) = SQRT(({{$nilai_atribut}} - {{$value->nilai_atribut}})<sup>2</sup> + ({{$nilai_obat}} - {{$value->nilai_obat}})<sup>2</sup>) = {{$result}}
                         @endforeach
                        <br>
                        <br>
                        <br>
                         <p>Nilai Obat : <b>{{$nilai_obat}}</b></p>
                         <p>Berdasarkan Perhitungan Diatas, Didapatkan <b>{{min($arrayD)}}</b> Merupakan Jarak Terdekat Dari Cluster. Silahkan Cek Secara Mandiri Nilai {{min($arrayD)}} Berada Dalam Cluster Berapa</p>
                         <form action="{{route('postSimpanRiwayat')}}" method="POST">
                            @csrf
                            <input type="hidden" name="nilai_atribut" value="{{$nilai_atribut}}">
                            <input type="hidden" name="nilai_obat" value="{{$nilai_obat}}">
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


