<?php

class Tablet {
    protected $merk, $camera, $memory;

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

    public function setMemory( $camera ) {
        $this->camera = $camera;
    }

    public function getMemory() {
        return $this->camera;
    }

    public function getInfoProduk()
    {
        $str = "Merk = {$this->merk} <br> Camera = {$this->camera} Gb <br> Memory = {$this->memory} Mp";

        return $str;
    }

}

class Handphone extends Tablet {
    public $nama;

    public function __construct( $nama = "nama", $merk = "merk", $camera = 0, $memory = 0 ) {

        $this->nama = $nama;
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
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
Penjelasan :
Karena property pada kelas parent (Tablet) memiliki Visibility protected, jadi untuk mengakses propery parent pada
kelas child (Handphone) hanya dapat dilakukan secara langsung dari dalam kelas child (Handphone).
Property dengan Visibility protected bisa dikases oleh child class, tapi tidak bisa diakses di luar kelas yang tidak termasuk child class.
*/
