<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('username'))
		{
			redirect('Login');
		}
		$this->load->model('Model_settings');
		$this->load->model('Model_orders');
		$this->load->model('Model_users');
	}
	
	public function index()
	{
		
		$is_processed = $this->Model_orders->process();
		if($is_processed)
		{
			$this->cart->destroy();
			redirect('Order/success');
		}else{
				$this->session->set_flashdata('error','Failed To Processed Your Order ! , please try again');
				redirect('Home/cart');
			
			 }
	}
	
	public function success()
	{
		$data['get_sitename'] = $this->Model_settings->sitename_settings();
		$data['get_footer'] = $this->Model_settings->footer_settings();	
	
		$this->load->view('order_success',$data);
			
	}
	
}//end  class