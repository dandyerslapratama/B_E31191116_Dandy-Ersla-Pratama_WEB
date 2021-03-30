<?php 
class Mahasiswa_model extends CI_Model {
	public function get_data(){
		$data_mahasiswa = [
			["nama"=>"Adya Zalfa","prodi"=>"MIF"],
			["nama"=>"Rizky Febian","prodi"=>"TKK"],
			["nama"=>"Angga Yunanda","prodi"=>"TIF"]
		];
		return $data_mahasiswa;
	}
}
?>