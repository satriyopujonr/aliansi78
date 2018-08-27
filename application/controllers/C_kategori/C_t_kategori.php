<?php defined('BASEPATH') OR exit('No direct script acces allowed');
class C_t_kategori extends CI_Controller {
	function __construct() 
	{
	parent ::__construct();

	
	$this->load->model('M_kategori/M_t_kategori');
	$this->load->helper(array('form','url'));
	}
	function simpan() {
		$data = array(
		'id_kategori'		=> NULL,
		'nama_kategori'		=> $this->input->post('nama_kategori'));
	if($this->M_t_kategori->tambah_($data)){
		$this->session->set_flashdata('message', 'Data kategori berhasil di simpan');
		redirect('C_kategori/C_f_kategori','refresh');
	}
	else {
		$this->session->set_flashdata('message', 'Data kategori gagal di simpan');
		redirect('C_kategori/C_f_kategori','refresh');}
	}
}
?>