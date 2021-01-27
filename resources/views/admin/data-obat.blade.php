@extends('layouts.master')

@section('title', 'Admin Panel K-MEANS - Data Obat')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Data Obat</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Penyakit</th>
                                <th scope="col">Obat</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Batuk</td>
                                <td>Obat Batuk Hitam(OBH) 1 sendok makan 4x1 untuk dewasa dan 1 sendok the untuk anak</td>
                            </tr>
                            <tr>
                                <td>Flu</td>
                                <td>CTM3x1 difenhidramin HCL 3x1</td>
                            </tr>
                            <tr>
                                <td>Gatal-Gatal</td>
                                <td>CTM 2x1 dexametasone 2x1 Vit C 2x1</td>
                            </tr>
                            <tr>
                                <td>Cephalgia/Sakit Kepala</td>
                                <td>Paracetamol 3x1</td>
                            </tr>
                            <tr>
                                <td>Nyeri Otot</td>
                                <td>Natrium diclofenat 3x1, B Com 3x1</td>
                            </tr>
                            <tr>
                                <td>Dispepsia/Gangguan Pencernaan</td>
                                <td>Antasida doen 3x1, Ranitidin 2x1, B6 2x1</td>
                            </tr>
                            <tr>
                                <td>Demam</td>
                                <td>Paracetamol 3x1 asetosal(aspirin) 500mg setiap 4jam</td>
                            </tr>
                            <tr>
                                <td>Sakit Maag</td>
                                <td>Promaag 3x1 1-2 jam sebelum makan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
