<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getDashboard()
    {
        $data_riwayat = DB::table('tbl_riwayat')->get();
        $data_riwayat_5 = DB::table('tbl_riwayat')->limit(5)->get();
        return view('admin.dashboard', compact('data_riwayat', 'data_riwayat_5'));
    }

    public function getDataTransormasiNilai()
    {
        return view('admin.data-transormasi-nilai');
    }

    public function getDataPengguna()
    {
        $data = DB::table('users')->get();
        return view('admin.data-pengguna', compact('data'));
    }

    public function getPemilihanObat()
    {
        $data_transformasi_nilai = DB::table('tbl_transformasi')->get();
        return view('admin.pemilihan-obat', compact('data_transformasi_nilai'));
    }

    public function postHasilPemilihanObat(Request $request)
    {
        $data_transformasi_nilai = DB::table('tbl_transformasi')->get();
        $nilai_atribut = $request->nilai_atribut;
        $nilai_gejala = $request->nilai_gejala;
        $nama = $request->nama;
        return view('admin.hasil-pemilihan-obat', compact('data_transformasi_nilai', 'nilai_atribut', 'nilai_gejala', 'nama'));
    }

    public function postSimpanRiwayat(Request $request)
    {
        DB::table('tbl_riwayat')->insert(
            [
                'nama' => $request->nama,
                'nilai_atribut' => $request->nilai_atribut,
                'nilai_gejala' => $request->nilai_gejala,
                'hasil' => $request->hasil,
            ]
        );

        return redirect()->route('getPemilihanObat');
    }

    public function getSimpanRiwayat()
    {
        $data_riwayat = DB::table('tbl_riwayat')->get();
        return view('admin.data-riwayat', compact('data_riwayat'));
    }

    // Data Obat

    public function getDataObat()
    {
        return view('admin.data-obat');
    }
}
