<?php
class Kelas{
    //property
    private $koneksi;
    //method
    public function __construct(){
        global $conn;
        $this->koneksi = $conn;
    }

    public function TampilData(){
        $sql = "SELECT k. *, d.nama AS nama_dosen FROM kelas k
        INNER JOIN dosen d ON d.id = k.dosen_id
        ORDER BY K.id DESC" ;

        
        $siap = $this->koneksi->prepare($sql);
        $siap->execute();
        
        $data = $siap->fetchAll();
        return $data;
    }
}
