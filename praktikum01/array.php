<?php

// Buat Array
$animals = ["kucing", "nyamuk", "singa", "ayam"];
echo $animals[3] . "<br>";
echo $animals[1];

foreach ($animals as $animal) {
    echo $animal . "<br>";
}

// Buat Array asosiatif
$mahasiswa = ["nama"=>"jia", "jurusan"=>"SI", "semester"=>2];
echo $mahasiswa["jurusan"] . "<br>";

foreach ($mahasiswa as $key=>$value) {
    echo "key nya adalah" . $key . "value:" . $value . "<br>";
}

// Buat Array Multidimensi
$dosen = [
    ["pa rojul", "WEB"],
    ["pa nasrul", "DDP"],
    ["pa lukman", "SO"]
];
// 00 01 10 11 20 21
echo $dosen[0][0] . "<br";
echo $dosen[0][1];
echo $dosen[1][0];
echo $dosen[1][1];
echo $dosen[2][0];
echo $dosen[2][1];


?>
