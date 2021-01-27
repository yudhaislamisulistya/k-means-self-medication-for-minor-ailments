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
                                   <option value="1">Batuk</option>
                                   <option value="2">Flu</option>
                                   <option value="3">Gatal-Gatal</option>
                                   <option value="4">Cephalgia / Sakit Kepala</option>
                                   <option value="5">Myalgia / Nyeri otot</option>
                                   <option value="6">Dispepsia / Gangguan Pencernaan</option>
                                   <option value="7">Demam</option>
                                   <option value="8">Sakit Maag</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Gejala</label>
                                <select class="form-control mb-3" name="nilai_gejala">
                                   <option selected="">Pilih Gejala</option>
                                   <optgroup label="Batuk">
                                       <option value="1">Pengeluaran udara dari saluran pernapasan secara kuat, yang mungkin disertai dengan pengeluaran dahak</option>
                                       <option value="2">Tenggorokan sakit dan gatal</option>
                                   </optgroup>
                                   <optgroup label="Flu">
                                       <option value="1">Bersin</option>
                                       <option value="2">Hidung Berair</option>
                                       <option value="3">Hidung Berair</option>
                                       <option value="4">Sakit Tenggorokan</option>
                                       <option value="5">Demam</option>
                                       <option value="6">Sakit Kepala</option>
                                       <option value="7">Batuk</option>
                                   </optgroup>
                                   <optgroup label="Gatal-Gatal">
                                       <option value="1">Bekas Yang Gatal</option>
                                       <option value="2">Menonjol</option>
                                       <option value="3">Merah</option>
                                       <option value="4">Berwarna Pada Permukaan Kulit</option>
                                       <option value="5">Bercak-Bercak</option>
                                       <option value="6">Ruam</option>
                                       <option value="7">Bentol</option>
                                   </optgroup>
                                   <optgroup label="Cephalgia / Sakit Kepala">
                                       <option value="1">Nyeri Kepala</option>
                                       <option value="2">Pusing/Vertigo</option>
                                   </optgroup>
                                   <optgroup label="Myalgia / Nyeri Otot">
                                    <option value="1">Rasa Sakit Pada Otot</option>
                                    <option value="2">Nyeri Otot</option>
                                    <option value="3">Rasa Tidak Nyaman Pada Otot</option>
                                    </optgroup>
                                   <optgroup label="Dispepsia / Gangguan Pencernaan">
                                    <option value="1">Ketidaknyamanan perut bagian atas, yang dijelaskan seperti sensasi terbakar</option>
                                    <option value="2">Kembung</option>
                                    <option value="3">Begah</option>
                                    <option value="4">Mual</option>
                                    <option value="5">Perasaan cepat kenyang setelah mulai makan</option>
                                    </optgroup>
                                   <optgroup label="Demam">
                                    <option value="1">kepala, leher dan tubuh akan terasa panas, sedangkan kaki dan tangan dingin</option>
                                    <option value="2">Merasa kedinginan dan menggigil</option>
                                    </optgroup>
                                   <optgroup label="Sakit Maag">
                                    <option value="1">Nyeri serta rasa panas pada ulu hati dan dada</option>
                                    <option value="2">Mual</option>
                                    <option value="3">kadang disertai muntah dan perut kembung</option>
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
                                    <td>{{$value->nilai_gejala}}</td>
                                    <td>{{$value->gejala}}</td>
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


