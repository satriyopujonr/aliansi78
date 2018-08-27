<?php defined('BASEPATH') OR exit('No direct script acces allowed');
class C_f_user extends CI_Controller {
	function __construct() {
	parent ::__construct();
	if ($this->session->userdata('logged')<>1) {
		redirect(site_url('admin'));
	}
	//jika belum login redirect ke halaman login
	
	}
	public function index ()
	{ 
	$this->load->view('user/form_user');
	}
}