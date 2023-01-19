<?php 

class A{
    public static function who(){
        echo __CLASS__;
    }
    public static function test(){
        self::who();
    }
}
class B extends A{
    public static function who(){
        echo __CLASS__;
    }
}
B::test();


// class A{
//     public static function who(){
//         echo __CLASS__;
//     }
//     public static function test(){
//         static::who(); //penggunaan late static binding
//     }
// }
// class B extends A{
//     public static function who(){
//         echo __CLASS__;
//     }
// }
// B::test();






?>