<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
class M_u_user extends CI_Model {
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
?>