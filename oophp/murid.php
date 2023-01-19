<?php


class Murid{
    public $nis, $nama, $kelas;
    public function set_nis($nis_murid){
        $this->nis = $nis_murid;
        return $this;
    }
    public function set_nama($nama_murid){
        $this->nama = $nama_murid;
        return $this;
    }
    public function set_kelas($kelas_murid){
        $this->nis = $kelas_murid;
        return $this;
    }
    public function get_bio(){
        return "Nama saya adalah".$this->nama . "d dengan nis ".$this->nis . "kelas" . $this->kelas;
    }
}

$murid_idn = new Murid();
$murid_idn->set_nis(12849084390);
$murid_idn->set_nama("makjirjr");
$murid_idn->set_kelas("erpeel");
echo $murid_idn->get_bio();

echo PHP_EOL;
//method chaining
$murid_idn2= new Murid();
echo $murid_idn2->set_nis(12849084390)->set_nama("makjirjr")->set_kelas("erpeel")->get_bio();
?>