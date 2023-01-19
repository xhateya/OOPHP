<?php 
// 1. menggunakan scalar type

// declare(strict_types=1);
// function setNumber(int $num){
//     echo $num;
// }

// setNumber(1);

//2.return Type
// function getNumber() : int{
//     return 9;
// }
// echo getNumber();


//3. Menggunakan Array
function getNumber() :array{
    return [1,2,3,4,5,6,7,8,9];
}
print_r(getNumber());


?>