<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
class M_t_user extends CI_Model {
	function tambah_($data){
		$this->db->set('nama_user',$data['nama_user']);
		$this->db->set('email',$data['email']);
		$this->db->set('username',$data['username']);
		$this->db->set('password',$data['password']);
		$this->db->set('level_pengguna',$data['level_pengguna']);
		$this->db->insert('tb_user');
		return $this->db->affected_rows();
	}
}
?>