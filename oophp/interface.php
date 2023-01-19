<?php 

interface Buah{
    public function makan();
    public function setWarna($warna);
}
interface Benda{
    public function setUkuran($ukuran);
}

class Mangga implements Buah, Benda{
    protected $warna;
    protected $ukuran;//property

    public function makan()
    {
        //kunyah
        //sampai bagian tengah
    }
    public function setWarna($warna)
    {
        $this->warna= $warna;
    }
    //variable function atau method
    public function setUkuran($ukuran){
        $this->ukuran= $ukuran;
    }
    

}











?>