<?php defined('BASEPATH') OR exit('No direct script access allowed');
class C_v_user extends CI_Controller {
	function __construct() {
	parent::__construct();
		
		$this->load->model("M_user/M_v_user");
		$this->load->helper("url");
        $this->load->library("pagination");
	}
	
public function index($offset=NULL)
	{
 
		$config['base_url'] = base_url() . 'index.php/C_user/C_v_user/index';
		$config['total_rows'] = $this->M_v_user->record_count();
		$config['per_page'] = 5;
		
		//berfungsi untuk melampirkan markup
  $config['full_tag_open'] = '';
  $config['full_tag_close'] = '';
  
  //berfungsi untuk Menyesuaikan "first" Link
  $config['first_link'] = '« First';
  $config['first_tag_open'] = '<li><span aria-hidden="true"><i class="fa fa-chevron-left"></i>';
  $config['first_tag_close'] = '</span></li>';
  
  //berfungsi untuk Menyesuaikan Link terakhir
  $config['last_link'] = 'Last »';
  $config['last_tag_open'] = '<li><span aria-hidden="true">';
  $config['last_tag_close'] = '<i class="fa fa-chevron-right"></i></span></li>';
  
  //berfungsi untuk Menyesuaikan "next" Link
  $config['next_link'] = 'Next <i class="fa fa-chevron-right"></i>';
  $config['next_tag_open'] = '<li>';
  $config['next_tag_close'] = '</li>';
  
  //berfungsi untuk Menyesuaikan "previous" Link
  $config['prev_link'] = '<i class="fa fa-chevron-left"></i> Previous';
  $config['prev_tag_open'] = '<li>';
  $config['prev_tag_close'] = '</li>';
  
  //berfungsi untuk Menyesuaikan "Current Page" Link
  $config['cur_tag_open'] = '<li class="active"><a href="">';
  $config['cur_tag_close'] = '</a></li>';
  
  //berfungsi untuk Menyesuaikan "digit angka" Link
  $config['num_tag_open'] = '<li>';
  $config['num_tag_close'] = '</li>';
  $data['offset'] = $offset;
  $limit = $this->uri->segment('3');
  $data['results'] = $this->M_v_user->fetch_data($config['per_page'],$offset);
  $this->pagination->initialize($config);
		
		
		$this->load->view('backend/customer/View_customer',$data);
 
	}
	}