<?php 

class Model_barang extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_barang');
	}

	public function tambah_barang($data, $table){
		$this->db->insert($table, $data);
	}

	public function edit_barang($where,$table){
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
		$this->db->from('tb_barang');
		$this->db->like('kd_barang', $keyword);
		$this->db->or_like('nm_barang',$keyword);
		$this->db->or_like('spesifikasi',$keyword);
		$this->db->or_like('lokasi',$keyword);
		$this->db->or_like('kondisi',$keyword);
		$this->db->or_like('stok',$keyword);
		$this->db->or_like('sumber_dana',$keyword);
		$this->db->or_like('keterangan',$keyword);
		$this->db->or_like('jns_barang',$keyword);
		return $this->db->get()->result();

	}
}