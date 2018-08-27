<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
class M_v_user extends CI_Model {
	function tampil_data_user()
	{
		$this->db->select('*');
		$this->db->from('users');
		$query=$this->db->get();
		if ($query->num_rows()>0) { return $query->result(); }
			else {return array(); }
	}
	
	function tampil_member()
	{
	$query = $this->db->query("SELECT * FROM users WHERE usr_group = '3'");
	}
	
	function hitungadmin()
	{
	$query = $this->db->query("SELECT * FROM tb_user WHERE level_pengguna = 'Super Admin'");
  	return $query->num_rows();
	}

	public function record_count() {
        return $this->db->count_all('users');
    }

	 public function fetch_data($limit, $offset)
	{
		$this->db->limit($limit, $offset);
		$data = $this->db->get('users');
		return $data->result();
	}
	
}
?>
		