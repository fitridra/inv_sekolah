<?php 

class Model_peminjaman extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_peminjaman');
	}

	public function tambah_peminjaman($data, $table){
		$this->db->insert($table, $data);
	}

	public function edit_peminjaman($where,$table){
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
		$this->db->from('tb_peminjaman');
		$this->db->like('kd_peminjaman', $keyword);
		$this->db->or_like('nm_peminjam',$keyword);
		$this->db->or_like('kd_barang',$keyword);
		$this->db->or_like('jumlah',$keyword);
		$this->db->or_like('kondisi',$keyword);
		$this->db->or_like('tgl_pinjam',$keyword);
		$this->db->or_like('tgl_kembali',$keyword);
		$this->db->or_like('status',$keyword);
		return $this->db->get()->result();

	}
}