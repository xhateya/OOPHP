<?php

class Mobil{
    public $merek;
    public function hello(){
        return " dari kelas mobil";
    }
}

$mobil = new Mobil();
echo $mobil->merek="Royce";
echo $mobil->hello();




?>