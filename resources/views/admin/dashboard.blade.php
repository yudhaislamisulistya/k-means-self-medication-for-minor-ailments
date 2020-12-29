@extends('layouts.master')
@section('title', 'Admin Panel K-MEANS - Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-sm-12">
          <div class="row">
             <div class="col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                   <div class="iq-card-body">
                      <div class="iq-progress-bar progress-bar-vertical iq-bg-primary">
                            <span class="bg-primary" data-percent="70"></span>
                        </div>
                      <h4 class="mb-2 mt-2">Data Penyakit</h4>
                      <p class="mb-0 text-secondary line-height">6</p>
                   </div>
                </div>
             </div>
             <div class="col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                   <div class="iq-card-body">
                      <div class="iq-progress-bar progress-bar-vertical iq-bg-danger">
                            <span class="bg-danger" data-percent="50"></span>
                        </div>
                      <h4 class="mb-2 mt-2">Data Obat</h4>
                      <p class="mb-0 text-secondary line-height">13</p>
                   </div>
                </div>
             </div>
             <div class="col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                   <div class="iq-card-body">
                      <div class="iq-progress-bar progress-bar-vertical iq-bg-danger">
                            <span class="bg-warning" data-percent="50"></span>
                        </div>
                      <h4 class="mb-2 mt-2">Riwayat</h4>
                      <p class="mb-0 text-secondary line-height">{{count($data_riwayat)}}</p>
                   </div>
                </div>
             </div>

             <div class="col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                   <div class="iq-card-body P-0 rounded" style="background: url({{asset('images/page-img/38.jpg')}}) no-repeat scroll center center; background-size: contain; min-height: 146px;">
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-4">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-user-profile-block">
             <div class="iq-card-body">
                <div class="user-details-block">
                   <div class="user-profile text-center">
                      <img src="{{asset('images/user/11.png')}}" alt="profile-img" class="avatar-130 img-fluid">
                   </div>
                   <div class="text-center mt-3">
                      <h4><b>Musdalifah. A</b></h4>
                      <p>Peneliti</p>
                      <p>APLIKASI PEMILIHAN OBAT SECARA SWAMEDIKASI UNTUK PENYAKIT RINGAN MENGGUNAKAN METODE K-MEANS CLUSTERING BERBASIS WEB</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-8">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">K-MEANS CLUSTERING</h4>
                </div>
             </div>
             <div class="iq-card-body">
             <p style="line-height: 35px;">K-means merupakan salah satu algoritma clustering [1]. Tujuan algoritma ini yaitu untuk membagi data menjadi beberapa kelompok. Algoritma ini menerima masukan berupa data tanpa label kelas. Hal ini berbeda dengan supervised learning yang menerima masukan berupa vektor (­x­1 , y1) , (­x­2 , y2) , …, (­x­i , yi), di mana xi merupakan data dari suatu data pelatihan dan yi merupakan label kelas untuk xi [2].

Pada algoritma pembelajaran ini, komputer mengelompokkan sendiri data-data yang menjadi masukannya tanpa mengetahui terlebih dulu target kelasnya[1]. Pembelajaran ini termasuk dalam unsupervised learning. Masukan yang diterima adalah data atau objek dan k buah kelompok (cluster) yang diinginkan.  Algoritma ini akan mengelompokkan data atau objek ke dalam k buah kelompok tersebut. Pada setiap cluster terdapat titik pusat (centroid) yang merepresentasikan cluster tersebut.

K-means ditemukan oleh beberapa orang yaitu Lloyd (1957, 1982), Forgey (1965) , Friedman and Rubin (1967) , and McQueen (1967) [1]. Ide dari clustering pertama kali ditemukan oleh Lloyd pada tahun 1957, namun hal tersebut baru dipublikasi pada tahun 1982. Pada tahun 1965, Forgey juga mempublikasi teknik yang sama sehingga terkadang dikenal sebagai Lloyd-Forgy pada beberapa sumber.</p>
             </div>
          </div>
       </div>
    </div>
    <div class="row">
       <div class="col-lg-12">
          <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Riwayat Terbaru</h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                   <div class="dropdown">
                      <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                      <i class="ri-more-fill"></i>
                      </span>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                         <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                         <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                         <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                         <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                         <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="iq-card-body">
                <div class="table-responsive">
                   <table class="table mb-0 table-borderless">
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
                        @foreach ($data_riwayat_5 as $key => $value)
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

 </div>
@endsection
