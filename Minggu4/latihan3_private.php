<?php

class Tablet {
    private $merk, $camera, $memory;

    public function setMerk( $merk ) {
        $this->merk = $merk;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setCamera( $camera ) {
        $this->camera = $camera;
    }

    public function getCamera() {
        return $this->camera;
    }

    public function setMemory( $memory ) {
        $this->memory = $memory;
    }

    public function getMemory() {
        return $this->memory;
    }

    public function getInfoProduk()
    {
        $str = "Merk = {$this->merk} <br> Camera = {$this->camera} Mp <br> Memory = {$this->memory} Gb";

        return $str;
    }

}

class Handphone extends Tablet {
    public $nama;

    public function __construct( $nama = "nama", $merk = "merk", $camera = 0, $memory = 0 ) {

        $this->nama = $nama;
        $this->setMerk($merk);
        $this->setCamera($camera);
        $this->setMemory($memory);
    }

    public function getInfoProduk()
    {
        $str = "Nama = {$this->nama} <br>" . parent::getInfoProduk();
        return $str;
    }
}

$hp = new Handphone("iPhone 12 Pro Max", "Apple", 12, 512);
echo $hp->getInfoProduk();

/*
Keterangan :
Karena property pada kelas parent (Tablet) memiliki Visibility private, maka untuk mengakses propery parent kelas child (Handphone) ataupun diluar kelas Tablet hanya bisa dilakukan jika menggunakan metode setter dan getter. 
Karena Property dengan Visibility private hanya dapat diakses dari dalam class tersebut.
*/