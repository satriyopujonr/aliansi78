<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
class C_u_user extends CI_Controller {
	function __construct()
	{
	parent ::__construct();
		$this->load->model('M_user/M_u_user');
	}
	function update (){
		$usr_id=$this->input->post('id_user');
		$data = array (
			'usr_nama'			=> $this->input->post('rname'),
			'usr_name'			=> $this->input->post('rusername'),
			'usr_password'		=> md5($this->input->post('rpassword')),
			'usr_email'			=> $this->input->post('remail'),
			'usr_address'	 	=> $this->input->post('raddress'),
			'usr_telp'			=> $this->input->post('rtelp'),
			'usr_gender'		=> $this->input->post('rgender'),
			'stuts'				=> $this->input->post('rstuts'),
			'usr_group'			=>'3'


			);
			$where = array (
			'usr_id'	=> $usr_id
			);
			$this->M_u_user->update_data($where,$data,'users');
			$this->session->set_flashdata('message', 'Data user berhasil di update');
			redirect('C_user/C_v_user','refresh');
			
			
	}
}
?>
		