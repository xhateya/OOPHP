<?php 

include ('negara/Arab.php');
class Arab{
    public $test;
    public function __construct(){
        $this->test=new \OOPHP\negara\Arab();
        echo"Capital : " .$this->test->ibuKota('Riyadh');
        echo "\n";
        echo"Language : " .$this->test->ibuKota('Riyadh');
    }
}

$jalan = new Arab();
?>