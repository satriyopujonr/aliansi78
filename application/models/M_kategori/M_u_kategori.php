<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_u_kategori extends CI_model {
	function update_data($where,$data_kategori,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data_kategori);
	}
}
?>