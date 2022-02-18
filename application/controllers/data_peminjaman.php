<?php

class Data_peminjaman extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda Belum Login!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('auth/login');
		}

		$this->load->model('model_peminjaman');
		$this->load->helper(array('url'));
	}

	public function index()
	{
		$data['peminjaman'] = $this->model_peminjaman->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_peminjaman', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_opsi(){
		$kd_peminjaman 		= $this->input->post('kd_peminjaman');
		$nm_peminjam 		= $this->input->post('nm_peminjam');
		$kd_barang 			= $this->input->post('kd_barang');
		$jumlah 			= $this->input->post('jumlah');
		$kondisi 			= $this->input->post('kondisi');
		$tgl_pinjam 		= $this->input->post('tgl_pinjam');
		$tgl_kembali 		= $this->input->post('tgl_kembali');
		$status 			= $this->input->post('status');

		$data = array(
			'kd_peminjaman' 	=> $kd_peminjaman,
			'nm_peminjam' 		=> $nm_peminjam,
			'kd_barang'			=> $kd_barang,
			'jumlah' 			=> $jumlah,
			'kondisi' 			=> $kondisi,
			'tgl_pinjam' 		=> $tgl_pinjam,
			'tgl_kembali' 		=> $tgl_pinjam,
			'status' 			=> $status
		);

		$this->model_peminjaman->tambah_peminjaman($data, 'tb_peminjaman');
		redirect('data_peminjaman/index');
	}

	public function edit($kd){
		$where = array('kd_peminjaman' =>$kd);
		$data['peminjaman'] = $this->model_peminjaman->edit_peminjaman($where, 'tb_peminjaman')
		->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit_peminjaman', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$kd_peminjaman 		= $this->input->post('kd_peminjaman');
		$nm_peminjam 		= $this->input->post('nm_peminjam');
		$kd_barang 			= $this->input->post('kd_barang');
		$jumlah 			= $this->input->post('jumlah');
		$kondisi 			= $this->input->post('kondisi');
		$tgl_pinjam 		= $this->input->post('tgl_pinjam');
		$tgl_kembali 		= $this->input->post('tgl_kembali');
		$status 			= $this->input->post('status');

		$data = array(
			'kd_peminjaman' => $kd_peminjaman,
			'nm_peminjam' 	=> $nm_peminjam,
			'kd_barang'		=> $kd_barang,
			'jumlah' 		=> $jumlah,
			'kondisi' 		=> $kondisi,
			'tgl_pinjam' 	=> $tgl_pinjam,
			'tgl_kembali' 	=> $tgl_kembali,
			'status' 		=> $status
		);

		$where = array(
				'kd_peminjaman' => $kd_peminjaman);

		$this->model_peminjaman->update_data($where,$data, 'tb_peminjaman');
		redirect('data_peminjaman/index');

	}

	public function hapus ($kd_peminjaman){
		$where = array('kd_peminjaman' => $kd_peminjaman);
		$this->model_peminjaman->hapus_data($where, 'tb_peminjaman');
		redirect('data_peminjaman/index');
	}

	public function print(){
		$data['peminjaman'] = $this->model_peminjaman->tampil_data("tb_peminjaman")->result();
		$this->load->view('print_peminjaman', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['peminjaman'] = $this->model_peminjaman->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_peminjaman', $data);
		$this->load->view('templates/footer');
	}
}