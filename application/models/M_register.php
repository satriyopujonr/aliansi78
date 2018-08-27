<?php
	
	class M_register extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
		}
		
		function add_account($data)
		{
			
            $this->load->database();
			$this->db->insert_id('users',$data);
			$this->db->insert('users',$data);
			$id=$this->db->insert_id();
			
			return  $id;
		}
		
		function changeActiveState($key)
		{
			$this->load->database();
			$data = array(
               'stuts' => 1
            );

			$this->db->where('md5(usr_id)', $key);
			$this->db->update('users', $data);

			return true;
		}
	}
?>