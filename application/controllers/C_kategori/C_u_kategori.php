<?php if ( ! defined ('BASEPATH')) exit('No direct script access allowed');
class C_u_kategori extends CI_Controller {
	function __construct() 
	{
	parent ::__construct();//jika belum login redirect ke halaman login
	
	$this->load->model('M_kategori/M_u_kategori');
	$this->load->helper(array('form','url'));
	}
	function update() {
		$id_kategori= $this->input->post('id_kategori');
		$data_kategori = array('nama_kategori'	=> $this->input->post('nama_kategori'));
		$where = array(	'id_kategori' => $id_kategori);
	$this->M_u_kategori->update_data($where,$data_kategori,'kategori');
		$this ->session->set_flashdata('message', 'Data kategori berhasil di rubah');
		redirect('C_kategori/c_v_kategori','refresh');
	}
}
?>