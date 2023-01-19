<?php

//materi konstanta 

//define()

// define('NAMA', 'Nina');
// echo NAMA;

//Contoh Konstanta

class Laptop{
    const DOLLAR = 14000;

    public function beliLaptop($harga){
        return "Beli Laptop Baru RP. ". $harga*self::DOLLAR;
    }



}
//akses konstanta lewat objek
$laptop_baru = new Laptop();
echo $laptop_baru->beliLaptop(5000000);
echo Laptop::DOLLAR;

echo __LINE__;


function coba(){
    return __FUNCTION__;
}

echo coba();

echo __FILE__;
?>