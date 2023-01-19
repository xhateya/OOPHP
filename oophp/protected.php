<?php

class Mobile2{
    //parent class
    protected $namemerek = "nDaihatsu";
    protected function hellomobile(){
        return " dari kelas mobile";
    }
}

//membuat kelas warisan/child
class Mobile extends Mobile2{
    public function getmobile(){
        return $this->hellomobile() . "" . $this->namemerek;
    }
}

$mobile2 = new Mobile();
echo $mobile2->getmobile();



?>