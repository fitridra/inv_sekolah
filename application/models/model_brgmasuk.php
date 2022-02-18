<?php 

class Model_brgmasuk extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_brgmasuk');
	}

	public function tambah_brgmasuk($data, $table){
		$this->db->insert($table, $data);
	}

	public function edit_brgmasuk($where,$table){
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
		$this->db->from('tb_brgmasuk');
		$this->db->like('id_brgmasuk', $keyword);
		$this->db->or_like('kd_barang',$keyword);
		$this->db->or_like('tgl_masuk',$keyword);
		$this->db->or_like('jumlah',$keyword);
		$this->db->or_like('kd_supplier',$keyword);
		return $this->db->get()->result();

	}
}