<?php 

class Model_peminjaman_user extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_peminjaman');
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