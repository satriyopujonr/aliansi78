<?php defined('BASEPATH') OR exit('No direct script access allowed');
class C_v_kategori extends CI_Controller {
	function __construct() {
		parent::__construct();
     
	 $this->load->model('M_kategori/M_v_kategori');
	}
		public function index()
{
			$data['data'] = $this->M_v_kategori->tampil_data_kategori();
			$this->load->view('kategori/view_kategori',$data);
	}
}
?>