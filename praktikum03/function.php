<?php 

// Buat Fungsi
function hitungumur($thn_lahir) {
    $thn_sekarang = 2023;
    // hitung umur
    $umur = $thn_sekarang - $thn_lahir;
    // Panggil Umur
    return $umur;
}
echo hitungumur(2005);



?>