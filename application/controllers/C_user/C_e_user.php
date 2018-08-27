<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
class C_e_user extends CI_Controller {
	function __construct() 
	{
	parent ::__construct();
	
	$this->load->model('M_user/M_e_user');
	}
	function edit(){
		$where = array('usr_id' =>$this->uri->segment(4));
		$data['data'] = $this->M_e_user->edit_data($where,'users')->result();
		$this->load->view('backend/customer/form_edit_customer',$data);
	}
}
?>