<?php 

// Buat Looping
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

// Bat Looping Pertama
echo "<h3> Looping Pertama </h3>";

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " - I Love PHP <br>";
}

// Bat Looping Kedua
echo "<h3> Looping Pertama </h3>";

for ($i = 20; $i >= 2; $i -= 2) {
    echo $i . " - I Love PHP <br>";
}

// Buat Array 
$buah = ["anggur", "mangga", "melon"];

foreach ($buah as $b ) {
    echo $b . "<br>";
}


?>