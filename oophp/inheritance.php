<?php



class Langit {
    public $nama;
    public $cahaya;


    public function __construct($nama, $cahaya){
        $this -> nama = $nama;
        $this -> cahaya = $cahaya;
        
    }

    public function namabintang(){
        echo "Contoh nama bintang yaitu{$this->nama} dan warnanya {$this->cahaya}";
    }
   
}

//membuat kelas pewarisan
//keyword inheritance/pewatisan adalah extends

class Bintang extends Langit{
    public function pesan(){
        echo"Benda-benda langit";
    }
}

//inisiasi objek
$bintang = new Bintang("Canopus, capella,vega", "terang");
$bintang->pesan();
$bintang->namabintang();




?>