<?php
// class
class Rumah{
    // properti
public $nama_pemilik = "kosong";
public $warna_rumah = "kosong";
public $merk_tv = "kosong";
    // method
private function getRumah($nama_pemilik,$warna_rumah, $merk_tv){
echo "Rumah ini milik: ". $nama_pemilik;
echo "</br>";
echo "Warna Rumah ini adalah ". $warna_rumah;
echo "</br>";
echo "Merk TV nya " . $merk_tv;
}

public function getDetail(){
    echo $this->getRumah("Nunez","Merah","LG");
}
}
// object 1
$rumah1 = new Rumah();
$rumah1->nama_pemilik = "Aul";
$rumah1->warna_rumah = "Abu";
$rumah1->merk_tv = "Tosiba";
var_dump($rumah1);

echo "</br>";
echo "</br>";
echo "<hr>";
// object 2
$rumah2 = new Rumah();
$rumah2->getDetail();
echo "</br>";
echo "</br>";
var_dump($rumah2);