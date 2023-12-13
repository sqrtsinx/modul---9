<?php
class kalkulator{

    public function tambah($angka1, $angka2) {
        return $angka1 + $angka2;
    }

    public function kurang($angka1, $angka2) {
        return $angka1 - $angka2;
    }

    public function kali($angka1, $angka2) {
        return $angka1 * $angka2;
    }

    public function bagi($angka1, $angka2) {
        if ($angka2 != 0) {
            return $angka1 / $angka2;
        } else {
            return "Error: Pembagian oleh nol.";
        }
    }
}
?>