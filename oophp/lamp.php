<?php


class Lamp{
    public $nama ="nama";
    public $ukuran ="ukuran";
    public $merk ="merk";
    public $warna ="warna";

    public function lampuMati(){

    }
    public function lampuNyala(){

    }
    public function sayAye(){
        return "Aye Aye Captain";
    }
   
   
}
$lamp = new Lamp();
$lamp->nama = "Lampu Taman";
$lamp->merk = "gilboz";
$lamp->warna="warm";

echo $lamp->sayAye();
$lamp->sayAye();




?>