@extends('layouts.master')
@section('title', 'Admin Panel K-MEANS - Pemilihan Obat')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Pemilihan Obat</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                     <div class="iq-card-body">
                        <form action="{{route('postHasilPemilihanObat')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="nama" name="nama" class="form-control" id="nama">
                             </div>
                            <div class="form-group">
                                <label>Penyakit</label>
                                <select class="form-control mb-3" id="IDPenyakit" name="nilai_atribut">
                                   <option selected="">Pilih Atribut Penyakit</option>
                                   <option value="1">Rematik</option>
                                   <option value="2">Hipertensi</option>
                                   <option value="3">Gatal-Gatal</option>
                                   <option value="4">Cephalgia / Sakit Kepala</option>
                                   <option value="5">Myalgia / Nyeri otot</option>
                                   <option value="6">Dispepsia / Gangguan Pencernaan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Obat</label>
                                <select class="form-control mb-3" name="nilai_obat">
                                   <option selected="">Pilih Obat</option>
                                   <optgroup label="Rematik">
                                       <option value="1">Natrium diclofenat 3X1</option>
                                       <option value="2">B Com 3X1</option>
                                   </optgroup>
                                   <optgroup label="Hipertensi">
                                       <option value="1">Amlodifin 1X1</option>
                                       <option value="2">Catropil 1X1</option>
                                   </optgroup>
                                   <optgroup label="Gatal-Gatal">
                                       <option value="1">CTM 2X1</option>
                                       <option value="2">Dexametasone 2X1</option>
                                       <option value="3">B Vit 2X1</option>
                                   </optgroup>
                                   <optgroup label="Cephalgia / Sakit Kepala">
                                       <option value="1">Paracetamol 3X1</option>
                                   </optgroup>
                                   <optgroup label="Myalgia / Nyeri Otot">
                                    <option value="1">Natrium diclofenat 3X1</option>
                                    <option value="2">B Com 3X1</option>
                                </optgroup>
                                   <optgroup label="Dispepsia / Gangguan Pencernaan">
                                    <option value="1">Antasida Doen 3X1</option>
                                    <option value="2">Ranitidin 2X1</option>
                                    <option value="3">B6 2X1</option>
                                </optgroup>
                                </select>
                             </div>
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                     </div>
                </div>
            </div>
        </div>
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
                                <th scope="col">Nilai Atribut / Cluster</th>
                                <th scope="col">Atribut</th>
                                <th scope="col">Nilai Obat</th>
                                <th scope="col">Obat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_transformasi_nilai as $key => $value)
                                <tr>
                                    <td>{{$value->nilai_atribut}}</td>
                                    <td>{{$value->atribut}}</td>
                                    <td>{{$value->nilai_obat}}</td>
                                    <td>{{$value->obat}}</td>
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


