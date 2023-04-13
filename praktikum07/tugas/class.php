<?php

class PersegiPanjang
{
    // property
    public $luas;
    public $keliling;
    public $panjang;
    public $lebar;
    public $diagonal;

    // method
    public function __construct($L, $k, $p, $l, $d)
    {
        
        $this->luas = $l;
        $this->keliling = $k;
        $this->panjang = $p;
        $this->lebar = $l;
        $this->diagonal = $d;
    }

    public function Luas()
    {
        return  $this->panjang * $this->lebar;
    }

    public function Keliling()
    {
        return 2 * ($this->panjang + $this->lebar);
    }

    public function Panjang()
    {
        return $this->luas / $this->lebar;
    }

    public function Lebar()
    {
        return $this->luas / $this->panjang;
    }

    public function Diagonal()
    {
        return  $this->panjang ^ 2 / $this->lebar ^ 2;
    }
}

// objek
 //$PP = new PersegiPanjang(5, 6, 7, 8, 10);
//echo "Luas Persegi Panjang = " . $PP->getLuas();
//echo "<br>";
//echo "Keliling Persegi Panjang = " . $PP->getKeliling();
//echo "<br>";
//echo "Panjang Persegi Panjang = " . $PP->getPanjang();
//echo "<br>";
//echo "Lebar Persegi Panjang = " . $PP->getLebar();
//echo "<br>";
//echo "Diagonal Persegi Panjang = " . $PP->getDiagonal();
//echo "<br>";
