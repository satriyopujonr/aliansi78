<?php defined('BASEPATH') OR exit('No direct script acces allowed');
class C_t_user extends CI_Controller {
	function __construct() {
	parent ::__construct();
	if ($this->session->userdata('logged')<>1) {
		redirect(site_url('admin'));
	}
	
	$this->load->model('M_user/M_t_user');
	}
	function simpan(){
		$data = array (
			'id_user'			=> NULL,
			'nama_user'			=> $this->input->post('nama_user'),
			'email'				=> $this->input->post('email'),
			'username'			=> $this->input->post('username'),
			'password'			=> md5($this->input->post('password')),
			'level_pengguna'	=> $this->input->post('level_pengguna')
			);
		if($this->M_t_user->tambah_($data)){
			$this->session->set_flashdata('message', 'Data user berhasil di simpan');
			redirect('C_user/C_v_user','refresh');
		}
		else{
			$this->session->set_flashdata('message','Data user gagal di simpan');
			redirect('C_user/C_f_user','refresh');
		}
		}
	}
	?>