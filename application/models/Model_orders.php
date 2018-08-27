<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
class Model_orders extends CI_Model {

	public function get_user_id_by_session()
	{
		$usr_name = $this->session->userdata('username');
		$gry = $this->db->where('usr_name',$usr_name)
						->select('usr_id')
						->limit(1)
						->get('users');
				if($gry->num_rows() > 0 )
					{
							return $gry->row()->usr_id;
					}else{

							return 0;
						 }
	}


	public function process()
	{


		//here for create new invoice
		$invoice = array(
						'data'		=>	date('Y-m-d H:i:s'),
						'due_date'	=>	date('Y-m-d H:i:s',mktime(date('H'),date('i'),date('s'),date('m'),date('d') + 1,date('Y'))),
						'user_id'	=> $this->get_user_id_by_session(),
						'status'	=>	'unpaid'
						);
		$this->db->insert('invoices',$invoice);
		$invoice_id = $this->db->insert_id();
		//here for put ordered items in orders table
		foreach ($this->cart->contents() as $item)
		{
			$data = array(
						'invoice_id'		=> $invoice_id,
						'product_id'		=> $item['id'],
						'product_type'		=> $item['name'],
						'product_title'		=> $item['title'],
						'qty'				=> $item['qty'],
						'price'				=> $item['price']

						 );
			$this->db->insert('orders',$data);
		}

		return TRUE;
	}

	public function all_invoices()
	{ // get all orders from orders tble

		$this->db->select ( '*' );
		$this->db->from ( 'invoices' );
		$this->db->join ( 'users', 'users.usr_id = invoices.user_id' , 'left' );
		$query = $this->db->get();
		return $query->result();
	}
	public function get_invoice_by_id($invoice_id)
	{
		$this->db->select ( '*' );
		$this->db->from ( 'invoices' );
		$this->db->join ( 'users', 'users.usr_id = invoices.user_id' , 'left' );
		$this->db->where('id',$invoice_id);
		$query = $this->db->get();
		return $query->result();


	}

	public function get_orders_by_invoice($invoice_id)
	{
		$get_orders_by = $this->db->where('invoice_id',$invoice_id)->get('orders');
		if($get_orders_by->num_rows() > 0 ) {
					return $get_orders_by->result();
			} else {
					 return FALSE;
					}
	}

	function bulan($a)
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('due_date=', $a);
		$query=$this->db->get();
		if ($query->num_rows()>0) { return $query->result(); }
		else {return array() ; }
	}


}//end class
