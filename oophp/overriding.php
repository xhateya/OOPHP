<?php
class Siswi{
    function biodata(){
        echo "Ayunita Dewi";
    }
    function ttl(){
        echo"Lahir diAceh,30 mei 2000 \n";
    }
}

//child class
//isi functionnya disesuaikan dengan kebutuhan
class Mahasiswi extends Siswi{
    function ttl(){
        echo "Selamat anda lolos di UGM";
    }
}

$siswi = new Siswi;
$siswi->biodata();
$siswi->ttl();
$siswi2 = new Mahasiswi;
$siswi2->ttl();
?>