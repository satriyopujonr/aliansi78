<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Count extends CI_Model {



	public function JP()
	{
		$this->db->select('*');
		$this->db->from('products');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function JK()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function JPEL()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('usr_group','3');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function JI()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function CON()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('status','confirmed');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function UNCON()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('status','unpaid');
		$query = $this->db->get();
		return $query->num_rows();
	}

public function EX()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('status','expired');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function R1()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('data <','2017-01-31 00:00:00');
		$this->db->where('data >','2017-01-01 00:00:00');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function R2()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('data <','2017-02-31 00:00:00');
		$this->db->where('data >','2017-02-01 00:00:00');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function R3()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('data <','2017-03-31 00:00:00');
		$this->db->where('data >','2017-03-01 00:00:00');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function R4()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('data <','2017-04-31 00:00:00');
		$this->db->where('data >','2017-04-01 00:00:00');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function R5()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('data <','2017-05-31 00:00:00');
		$this->db->where('data >','2017-05-01 00:00:00');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function R6()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('data <','2017-06-31 00:00:00');
		$this->db->where('data >','2017-06-01 00:00:00');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function R7()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('data <','2017-07-31 00:00:00');
		$this->db->where('data >','2017-07-01 00:00:00');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function R8()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('data <','2017-08-31 00:00:00');
		$this->db->where('data >','2017-08-01 00:00:00');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function R9()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('data <','2017-09-31 00:00:00');
		$this->db->where('data >','2017-09-01 00:00:00');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function R10()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('data <','2017-10-31 00:00:00');
		$this->db->where('data >','2017-10-01 00:00:00');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function R11()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('data <','2017-11-31 00:00:00');
		$this->db->where('data >','2017-11-01 00:00:00');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function R12()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->where('data <','2017-12-31 00:00:00');
		$this->db->where('data >','2017-12-01 00:00:00');
		$query = $this->db->get();
		return $query->num_rows();
	}




	}///end class  ///


?>
