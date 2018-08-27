<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
		
	public function __construct ()
	{
		parent::__construct();
		$this->load->model('Model_customer');
		$this->load->model('Model_settings');
		$this->load->model('Model_users');
		$this->load->helper('bot');
	}

	public function index()
	{	
			
	}
	public function payment_confirmation($invoice_id = 0 )
	{
		
		$data['get_sitename'] = $this->Model_settings->sitename_settings();
		$data['get_footer'] = $this->Model_settings->footer_settings();
			
		$this->form_validation->set_rules('invoice_id_input','Invoice id','required|integer');
		$this->form_validation->set_rules('amount_input','Amount Transfered','required|integer');
		if($this->form_validation->run()	==	FALSE)
		{
			if($this->input->post('invoice_id_input'))
			{
				$data['invoice_id'] =set_value('invoice_id_input');
			}else{	
					$data['invoice_id'] = $invoice_id;
					
					
				}
			$this->load->view('Customer/form_payment_confirmation',$data);
		}else{
				$is_valid = $this->Model_customer->mark_invoice_paid_confirmed(set_value('invoice_id_input'),
					$data['invoice_id'] =set_value('invoice_id_input'),
					$invoice_id1 = $data['invoice_id'],
					set_value('amount_input'));
				if ($is_valid)
				{
							
							
						$this->session->set_flashdata('message','Terimakasih ..... Kami Akan Segera Check Konfirmasi Pembayaran Anda');

						$config = Array(
				            'protocol' => 'smtp',
				            'smtp_host' => 'ssl://smtp.gmail.com',
				            'smtp_port' => 465,
				            'smtp_user' => 'armydinasty8@gmail.com',
				            'smtp_pass' => 'armydinasty1',
				        );

						$msg = "ada order dari no id : ".$invoice_id1;

				        $this->load->library('email', $config);
				        $this->email->set_newline("\r\n");
				        $this->email->from('armydinasty8@gmail.com', 'Kelompok 7-8');
				        $this->email->to('ahmadfaisol500@gmail.com');
				        $this->email->subject('This is an email');
				        $this->email->message($msg);
							
							$this->email->send();
							sendTelegram($msg);
							sendLine($msg);
				 		redirect('Customer/shopping_history');
				}

				else{
						$this->session->set_flashdata('message','Worng amount or invoice id.... ! please try again ');
						redirect('Customer/payment_confirmation/'.set_value('invoice_id_input'));
					}
					
			 }
	}
	public function shopping_history()
	{
		$data['get_sitename'] = $this->Model_settings->sitename_settings();
		$data['get_footer'] = $this->Model_settings->footer_settings();	
		
		$user=$this->session->userdata('username');
		$data['history'] = $this->Model_customer->get_shopping_history($user);
		$this->load->view('Customer/shopping_history_list',$data);
	}
	
	
	
}//end class
