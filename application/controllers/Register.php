<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//nama class harus sama dengan nama file dan diawali dengan huruf besar
class Register extends CI_Controller {

    public function index()
    {
		$this->load->helper('form');
		$this->load->view('v_register');
		$this->load->library('encryption');
		$this->load->library('encrypt'); 
		
		$usr_password = $this->encrypt->post('password');
		$usr_password = $this->encrypt->post('password');
		$usr_password = $this->encryption->post('password');
	}
	
	public function submit(){
		//passing post data dari view
		$this->load->library('encryption');
		$this->load->library('encrypt'); 
		$this->load->helper(array('form', 'url'));
		 
		$usr_nama		= $this->input->post('nama');
		$usr_name		= $this->input->post('username');
		$usr_password	= md5($this->input->post('password'));		
		$usr_email		= $this->input->post('email');
		$usr_address	= $this->input->post('alamat');
		$usr_telp 		= $this->input->post('telp');
		$usr_gender		= $this->input->post('gender');
		
		
		$this->load->helper(array('form','url'));
		$this->load->library('session');
		$usr_nama = $this->input->post('nama');
		$captcha = $this->input->post('captcha');
		if(md5($captcha)==$this->session->userdata('keycode')){
			$data['nama'] = $usr_nama;
			$data['captcha']= $captcha;
			$this->session->unset_userdata('keycode');
		}else{
			redirect('captcha?cap_error=1','refresh');
		}
		
		
		//memasukan ke array
		$data = array(

			'usr_nama' => $usr_nama,
			'usr_name' => $usr_name,
			'usr_password' => $usr_password,
			'usr_email' => $usr_email,
			'usr_address' => $usr_address,
			'usr_telp' => $usr_telp,			
			'usr_gender' => $usr_gender,
			'stuts' => 0,
			'usr_group' =>'3'
		);
		//tambahkan akun ke database
		$this->load->model('M_register');
		$id = $this->M_register->add_account($data);
		
		
		
	//enkripsi id
    $encrypted_id = md5($id);
  
    $this->load->library('email');
    $config = array();
    $config['charset'] = 'utf-8';
    $config['useragent'] = 'Codeigniter';
    $config['protocol']= "smtp";
    $config['mailtype']= "html";
    $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
    $config['smtp_port']= "465";
    $config['smtp_timeout']= "400";
    $config['smtp_user']= "armydinasty8@gmail.com"; // isi dengan email kamu
    $config['smtp_pass']= "armydinasty1"; // isi dengan password kamu
    $config['crlf']="\r\n"; 
    $config['newline']="\r\n"; 
    $config['wordwrap'] = TRUE;
    //memanggil library email dan set konfigurasi untuk pengiriman email
			
		$this->email->initialize($config);
		//konfigurasi pengiriman
		$this->email->from($config['smtp_user']);
		$this->email->to($usr_email);
		$this->email->subject("Verifikasi Akun");
		$this->email->message(
			"terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>".
			site_url("register/verification/$encrypted_id")
		);
		
		if($this->email->send())
		{
			 echo $this->session->set_flashdata('message', 'Success, silahkan cek email Anda !!!');
            redirect('Login');
		}else
		{
			echo $this->session->set_flashdata('message', 'Success, namun gagal mengirim verifikasi email');
            redirect('Admin');
		}
		
		
	}
	
	public function verification($key)
	{
		$this->load->helper('url');
		$this->load->model('m_register');
		$this->m_register->changeActiveState($key);
		echo "Selamat kamu telah memverifikasi akun kamu";
		echo "<br><br><a href='".site_url("Login")."'>Kembali ke Menu Login</a>";
	}
}

