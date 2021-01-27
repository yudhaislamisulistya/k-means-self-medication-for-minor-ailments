<?php

namespace App;


class Helper{


    public static function getStatusObatByGejala($nilai_gejala)
    {
        $status = "";
        if ($nilai_gejala == 1) {
            $status = "Batuk";
        }else if ($nilai_gejala == 2) {
            $status = "Flu";
        }else if ($nilai_gejala == 3) {
            $status = "Gatal-Gatal";
        }else if ($nilai_gejala == 4) {
            $status = "Cephalgia/Sakit Kepala";
        }else if ($nilai_gejala == 5) {
            $status = "Myalgia/Nyeri Otot";
        }else if ($nilai_gejala == 6) {
            $status = "Dispepsia/Gangguan Pencernaan";
        }else if ($nilai_gejala == 7) {
            $status = "Demam";
        }else if ($nilai_gejala == 8) {
            $status = "Sakit Maag";
        }

        return $status;
    }

    public static function getSaranObatByGejala($nilai_gejala)
    {
        $status = "";
        if ($nilai_gejala == 1) {
            $status = "Obat Batuk Hitam(OBH) 1 sendok makan 4x1 untuk dewasa dan 1 sendok the untuk anak";
        }else if ($nilai_gejala == 2) {
            $status = "CTM3x1 difenhidramin HCL 3x1";
        }else if ($nilai_gejala == 3) {
            $status = "CTM 2x1 dexametasone 2x1 Vit C 2x1";
        }else if ($nilai_gejala == 4) {
            $status = "Paracetamol 3x1";
        }else if ($nilai_gejala == 5) {
            $status = "Natrium diclofenat 3x1, B Com 3x1";
        }else if ($nilai_gejala == 6) {
            $status = "Antasida doen 3x1, Ranitidin 2x1, B6 2x1";
        }else if ($nilai_gejala == 7) {
            $status = "Paracetamol 3x1 asetosal(aspirin) 500mg setiap 4jam";
        }else if ($nilai_gejala == 8) {
            $status = "Promaag 3x1 1-2 jam sebelum makan";
        }

        return $status;
    }
}

?>
