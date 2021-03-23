<?php

	//soal no 2
class kendaraan {
	public $jeniskendaraan;
	public $jumlahroda;
	public $jenismerk;
	public $bahanbakar;
	public $harga;
	public $tahunpembuatan;

	public function dapatSubsidi(){
	if($this->tahunpembuatan < 2005 && $this -> bahanbakar == "Premium")
	$status = 'Ya';
	else $status = 'Tidak';
	return $status;
	}

	//soal no 3
public function hargaSecond() {
		if ($this -> tahunpembuatan >= 2010) {
			$hargaAwal= $this -> harga;
			$hargaAkhir= ($hargaAwal*20)/100;
		} else if ($this -> tahunpembuatan < 2010 && $this -> tahunpembuatan >= 2005) {
			$hargaAwal= $this -> harga;
			$hargaAkhir= ($hargaAwal*30)/100;
		} else if ($this -> tahunpembuatan < 2005) {
			$hargaAwal= $this -> harga;
			$hargaAkhir= ($hargaAwal*40)/100;
		}
		return $hargaAkhir;
	}

}

$bmw = new kendaraan ();
echo $bmw -> jenismerk="BMW";
echo "<br>";
echo $bmw -> tahunpembuatan=2007;
echo "<br>";
echo $bmw -> bahanbakar="Premium";
echo "<br>";
echo $bmw -> harga="4000"; echo " $";
echo "<br>";
echo $bmw -> hargaSecond(); echo " $";
echo "<br>";


echo "Mendapat Subsidi ?";
echo $bmw -> dapatSubsidi();


?>
	
