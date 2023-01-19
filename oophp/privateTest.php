<?php

class Tofu{
   private $origin;
   private function ori(){
        return " produksi cina";
    }
    public function  setOrigin($origin){
        $this->origin = $origin;
    } 
    public function getPrivate(){
        return $this->origin. "" .$this->ori();
    }
}


$tofu = new Tofu();
$tofu->setOrigin("Tahu");
echo $tofu->getPrivate();


?>