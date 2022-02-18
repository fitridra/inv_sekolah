<?php 

class Model_brgkeluar extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_brgkeluar');
	}

	public function tambah_brgkeluar($data, $table){
		$this->db->insert($table, $data);
	}

	public function edit_brgkeluar($where,$table){
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
		$this->db->from('tb_brgkeluar');
		$this->db->like('id_brgkeluar', $keyword);
		$this->db->or_like('kd_barang',$keyword);
		$this->db->or_like('tgl_keluar',$keyword);
		$this->db->or_like('jumlah',$keyword);
		$this->db->or_like('lokasi',$keyword);
		$this->db->or_like('penerima',$keyword);
		$this->db->or_like('keterangan',$keyword);
		return $this->db->get()->result();

	}
}