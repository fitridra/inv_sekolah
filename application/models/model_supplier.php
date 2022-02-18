<?php 

class Model_supplier extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_supplier');
	}

	public function tambah_supplier($data, $table){
		$this->db->insert($table, $data);
	}

	public function edit_supplier($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('tb_supplier');
		$this->db->like('kd_supplier', $keyword);
		$this->db->or_like('nm_supplier',$keyword);
		$this->db->or_like('alamat',$keyword);
		$this->db->or_like('no_telp',$keyword);
		return $this->db->get()->result();

	}
}