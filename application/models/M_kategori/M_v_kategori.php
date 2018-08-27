<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_v_kategori extends CI_Model {
	function tampil_data_kategori()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$query=$this->db->get();
		if ($query->num_rows()>0) { return $query->result(); }
			else {return array(); }
	}
}
?>