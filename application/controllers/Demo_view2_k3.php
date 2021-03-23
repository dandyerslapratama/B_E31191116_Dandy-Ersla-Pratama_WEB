<?php
class Demo_view2_k3 extends CI_Controller{
	public function __construct(){
	parent:: __construct();
	$this->load->helper('url');
	}

	public function index(){
	$this->load->view('demoview_k3');
	}
}
?>