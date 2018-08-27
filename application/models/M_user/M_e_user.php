<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
class M_e_user extends CI_Model {
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
}
?>