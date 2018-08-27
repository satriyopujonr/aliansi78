<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
class C_h_user extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_user/M_h_user');
	}
	function hapus () {
		$where = array('usr_id' => $this->uri->segment(4));
		$this->M_h_user->hapus_data($where,'users');
		redirect('C_user/C_v_user','refresh');
	}
}
?>