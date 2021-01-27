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
                                <th scope="col">Obat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">1</th>
                                <td rowspan="2">Rematik</td>
                                <td>1</td>
                                <td>Natrium diclofenat 3X1</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>B Com 3X1</td>
                            </tr>
                            <tr>
                                <th rowspan="2">2</th>
                                <td rowspan="2">Hipertensi</td>
                                <td>1</td>
                                <td>Amlodifin 1X1</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Catropil 1X1</td>
                            </tr>
                            <tr>
                                <th rowspan="3">3</th>
                                <td rowspan="3">Gatal-Gatal</td>
                                <td>1</td>
                                <td>CTM 2X1</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Dexametasone 2X1</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>B Vit 2X1</td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>Cephalgia / Sakit Kepala</td>
                                <td>1</td>
                                <td>Paracetamol 3X1</td>
                            </tr>
                            <tr>
                                <th rowspan="2">4</th>
                                <td rowspan="2">Myalgia / Nyeri Otot</td>
                                <td>1</td>
                                <td>Natrium diclofenat 3X1</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>B Com 3X1</td>
                            </tr>
                            <tr>
                                <th rowspan="3">5</th>
                                <td rowspan="3">Dispepsia</td>
                                <td>1</td>
                                <td>Antasida Doen 3X1</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ranitidin 2X1</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>B6 2X1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
