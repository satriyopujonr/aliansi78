<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
//nama class harus diawali dengan kapital, walaupun nama file semua kecil
class Captcha extends CI_Controller {
	
	public function index(){
		$this->load->helper(array('captcha','form'));
		$this->load->library('session');
		$word = array_merge(range('1', '4'));
        $acak = shuffle($word);
        $str  = substr(implode($word), 0, 5);
 
        //Menyimpan huruf acak tersebut kedalam session
        $data_ses = array('captcha_str' => $str  );
        $this->session->set_userdata($data_ses);
		$vals = array(
			
			'word'  => $str, 
            'img_path'  => './capimg/',
            'img_url'   => '/aliansi78/capimg/',
            'img_width' => 200, //lebar gambar captcha
            'img_height' => 50, //tinggi gambar captcha
            'expiration' => 7200 //expired time per captcha
		
		);
		$cap = create_captcha($vals);
		$this->session->set_userdata('keycode',md5($cap['word']));
		$data['captcha_img'] = $cap['image'];
		$this->load->view('register1/v_register',$data);
	}
	
	public function sub(){
		$this->load->helper(array('form','url'));
		$this->load->library('session');
		$nama = $this->input->post('nama');
		$captcha = $this->input->post('captcha');
		if(md5($captcha)==$this->session->userdata('keycode')){
			$data['nama'] = $nama;
			$data['captcha']= $captcha;
			$this->session->unset_userdata('keycode');
			$this->load->view('v_success',$data);
		}else{
			redirect('captcha?cap_error=1','refresh');
		}
	}

}