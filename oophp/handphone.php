<?php

class Handphone{
    public $jumlah_pulsa;

    public function __construct($pulsa)
    {
        $this->jumlah_pulsa= $pulsa;
        
    }

    public function mengirimPesan($tarif, $jumlah_pulsa = 1){
        $this->jumlah_pulsa -= $tarif*$jumlah_pulsa;

    }

    public function __destruct()
    {
        echo"sjndfjksnskdjf";
        echo $this->jumlah_pulsa;
    }
}

$hp_maryam = new Handphone(5000);
echo "Ju,lah piedafkhksflkef";
echo $hp_maryam->jumlah_pulsa;

$hp_maryam->mengirimPesan(200);










?>