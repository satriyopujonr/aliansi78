<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
class C_h_kategori extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_kategori/M_h_kategori');
	}
	function hapus () {
		$where = array('id_kategori' => $this->uri->segment(4));
		$this->M_h_kategori->hapus_data($where,'kategori');
		redirect('C_kategori/C_v_kategori','refresh');
	}
}
?>