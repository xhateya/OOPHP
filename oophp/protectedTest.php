<?php

class Kangaroo2{
    //parent class
    protected $species = " O.rufus";
    protected function kingdom(){
        return " from kingdom animalia";
    }
}

//membuat kelas warisan/child
class BabyRoo extends Kangaroo2{
    public function getKangaroo(){
        return $this->kingdom() . "" . $this->species;
    }
}

$kangaroo = new BabyRoo();
echo $kangaroo->getKangaroo();



?>