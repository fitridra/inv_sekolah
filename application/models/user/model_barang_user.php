<?php 

class Model_barang_user extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_barang');
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