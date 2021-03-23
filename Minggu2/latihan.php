<?php
// buat class laptop
class laptop {
  
   private $pemilik;
   private $merk;
  
   // constructor sebagai pembuat nilai awal
   public function __construct($pemilik, $merk) {
     $this->pemilik = $pemilik;
     $this->merk = $merk;
   }
  
   public function hidupkan_laptop() {
     return "Hidupkan laptop $this->merk milik $this->pemilik";
   }
   
   public function matikan_laptop() {
     return "Matikan laptop $this->merk milik $this->pemilik";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_A= new laptop("A", "ASUS");
  
echo $laptop_A->hidupkan_laptop();
echo "<br />";
  
$laptop_B= new laptop("B", "Acer");
  
echo $laptop_B->hidupkan_laptop();
echo "<br />";

$laptop_C= new laptop("C", "Lenovo");

//menampilkan
echo $laptop_C->Matikan_laptop(); echo $laptop_C->Hidupkan_laptop();

?>