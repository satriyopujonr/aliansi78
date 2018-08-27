<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_t_kategori extends CI_model {
	function tambah_($data){
		$this->db->set('nama_kategori',$data['nama_kategori']);
		$this->db->insert('kategori');
		return $this->db->affected_rows();	
}	
}
?>