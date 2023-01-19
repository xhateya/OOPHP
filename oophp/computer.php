<?php

// class Computer{

//     public $processor = "Core i5";

//     public function played_video(){
//         return "Computer Played Video". self::$processor;
//     }



//STATIC//
// }
// echo Computer::$processor;
// echo Computer::played_video();


// $computer_khesya = new Computer();
// echo $computer_khesya->processor;
// echo $computer_khesya->played_video();



// class Nilai{
//     public static $angka =1;
//     public static function halo(){
//         return "Halo". self::$angka++ ."Kali <br>";
//     }
// }

// $obj = new Nilai();
// echo $obj->halo();
// echo $obj->halo();
// echo $obj->halo();

// echo "<br>";

// $obj2 = new Nilai();
// echo $obj2->halo();
// echo $obj2->halo();
// echo $obj2->halo();


class Nilai{
    public  $angka =1;
    public  function halo(){
        return "Halo". $this->angka++ ."Kali <br>";
    }
}

$obj = new Nilai();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<br>";

$obj2 = new Nilai();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();








?>