<?php


class shape{
    function __call($name_function, $arguments){
        //mencocokan nama fungsi

        if($name_function == 'area'){
            switch(count(($arguments))){
                //untuk membuat circle
                case 1 :
                    return 3.14 * $arguments[0];


                case 2 :
                    return $arguments[0]*$arguments[1];

            }
        }
    }
  
}
//inisiasi objek kelas shape
$shape = new Shape;
//memanggil lingkaran
echo($shape->area(2));
echo "\n";

//memanggil persegi
echo($shape->area(4,2));








?>