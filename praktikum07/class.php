<?php
// buat class
class bmiPasien
{
    // buat property
    public $nama, $berat, $tinggi, $umur, $jk;

    // bikin construct : data diset user
    function __construct($nama, $berat, $tinggi, $umur, $jk)
    {
        // masukin data ke property
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;
    }

    // buat method (fungsi)
    public function hasilBMI()
    {
        // buat data tinggi dalam meter
        $tinggi_m = $this->tinggi / 100;
        // buat rumus bmi
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        // balikin data
        return round($bmi);
    }
    public function statusBMI()
    {

        $bmi = $this->hasilBMI();
        // cek data  jadi status
        if ($bmi < 18.5) {
            return "Kekurangan berat badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Berat badan normal";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan berat badan";
        } else {
            return "Obesitas";
        }
    }
}
// buat objek
// $pasien = new bmiPasien("Kholidajia fajriah", "49", "162", "19", "P");
// // tampilin data
// echo $pasien->nama . "<br>";
// echo $pasien->berat . "<br>";
// echo $pasien->tinggi . "<br>";
// echo $pasien->umur . "<br>";
// echo $pasien->jk . "<br>";
// echo $pasien->hasilBMI() . "<br>";
// echo $pasien->statusBMI() . "<br>";
