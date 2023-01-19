<?php 
// function iteration(int $num, int $index = 1){
//     echo "Proses ke-{$index}\n";

//     if($index< $num){
//         iteration($num,$index + 1);
//     }
// }

// iteration(10);


//istilah mencapai akhir untuk di outoutkan 
//pada code ($index < $num)

//menggunakan perulangan

function iteration(int $num){
    for ($i=1; $i <= $num; $i++){
        echo "Perulangan ke-{$i}\n";
    }
}
iteration(10);







?>