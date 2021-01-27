@extends('layouts.master')

@section('title', 'Admin Panel K-MEANS - Data Transormasi Nilai')

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
                                <th scope="col">Nilai</th>
                                <th scope="col">Atribut</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Gejala</th>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- Penyakit Batuk --}}

                            <tr>
                                <th rowspan="2">1</th>
                                <td rowspan="2">Batuk</td>
                                <td>1</td>
                                <td>Pengeluaran udara dari saluran pernapasan secara kuat, yang mungkin disertai dengan pengeluaran dahak</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tenggorokan sakit dan gatal</td>
                            </tr>

                            {{-- Penyakit Flu --}}

                            <tr>
                                <th rowspan="6">2</th>
                                <td rowspan="6">Flu</td>
                                <td>1</td>
                                <td>Bersin</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Hidung Berair</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sakit Tenggorokan</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Deamam</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Sakit Kepala</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Batuk</td>
                            </tr>

                            {{-- Penyakit Gatal-Gatal --}}

                            <tr>
                                <th rowspan="7">3</th>
                                <td rowspan="7">Gatal-Gatal</td>
                                <td>1</td>
                                <td>Bekas Yang Gatal</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Menonjol</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Merah</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Berwarna Pada Permukaan Kulit</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Bercak-Bercak</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Ruam</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Bentol</td>
                            </tr>

                            {{-- Penyakit Sakit Kepala --}}

                            <tr>
                                <th rowspan="2">4</th>
                                <td rowspan="2">Cephalgia/Sakit Kepala</td>
                                <td>1</td>
                                <td>Nyeri Kepala</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Pusing/Vertigo</td>
                            </tr>

                            {{-- Penyakit Nyeri Otot --}}

                            <tr>
                                <th rowspan="3">5</th>
                                <td rowspan="3">Myalgia/Nyeri Otot</td>
                                <td>1</td>
                                <td>Rasa Sakit Pada Otot</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nyeri Otot</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Rasa Tidak Nyaman Pada Otot</td>
                            </tr>

                            {{-- Penyakit Ganggunan Penceranaan --}}

                            <tr>
                                <th rowspan="5">6</th>
                                <td rowspan="5">Dispepsia/Ganggaun Pencernaan</td>
                                <td>1</td>
                                <td>Ketidaknyamanan perut bagian atas, yang dijelaskan seperti sensasi terbakar</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kembung</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Begah</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Mual</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>perasaan cepat kenyang setelah mulai makan</td>
                            </tr>

                            {{-- Penyakit Demam --}}

                            <tr>
                                <th rowspan="2">7</th>
                                <td rowspan="2">Demam</td>
                                <td>1</td>
                                <td>kepala, leher dan tubuh akan terasa panas, sedangkan kaki dan tangan dingin</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Merasa kedinginan dan menggigil</td>
                            </tr>

                            {{-- Penyakit Maag --}}

                            <tr>
                                <th rowspan="3">8</th>
                                <td rowspan="3">Sakit Maag</td>
                                <td>1</td>
                                <td>Nyeri serta rasa panas pada ulu hati dan dada</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mual</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>kadang disertai muntah dan perut kembung</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
