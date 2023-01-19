<?php

use IceCream as GlobalIceCream;

class IceCream{
    public $flavor;
    public function cards(){
        return " ice cream from icy";
    }
}

$mobil = new IceCream();
echo $mobil->flavor="Oreo";
echo $mobil->cards();



?>