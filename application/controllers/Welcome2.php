<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome2 extends CI_Controller {
	function __construct()
	 {
		parent::__construct();

				$this->load->model('Count');
	 }

		public function index()
		{
			$data['JP']= $this->Count->JP();
			$data['JK']= $this->Count->JK();
			$data['JPEL']= $this->Count->JPEL();
			$data['JI']= $this->Count->JI();

			$data['CON']= $this->Count->CON();
			$data['UNCON']= $this->Count->UNCON();

			$data['R1']= $this->Count->R1();
			$data['R2']= $this->Count->R2();
			$data['R3']= $this->Count->R3();
			$data['R4']= $this->Count->R4();
			$data['R5']= $this->Count->R5();
			$data['R6']= $this->Count->R6();
			$data['R7']= $this->Count->R7();
			$data['R8']= $this->Count->R8();
			$data['R9']= $this->Count->R9();
			$data['R10']= $this->Count->R10();
			$data['R11']= $this->Count->R11();
			$data['R12']= $this->Count->R12();

			$this->load->view('backend/dashboard',$data);
		}
}
