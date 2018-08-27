<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
class C_e_kategori extends CI_Controller {
	function __construct() 
	{
	parent ::__construct();
	
	$this->load->model('M_kategori/M_e_kategori');
	}
	function edit (){
	$where = array('id_kategori' =>$this->uri->segment(4));
	$data['data'] = $this->M_e_kategori->edit_data($where,'kategori')->result();
	$this->load->view('kategori/form_kategori - Copy',$data);
}
}
?>