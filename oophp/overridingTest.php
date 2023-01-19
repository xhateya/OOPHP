<?php
class Tupai{
    function ibuTupai(){
        echo "Qonita Masyitoh";
    }
    function kerjaan(){
        echo"Hobi Meloncat";
    }
}

class Loncat extends Tupai{
    function sound(){
        echo "hap hap hap qonita meloncat";
    }
}

$tupai = new Tupai;
$tupai->ibuTupai();
$tupai->kerjaan();
$tupai = new Loncat;
$tupai->sound();
?>