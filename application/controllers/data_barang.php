<?php

class Data_barang extends CI_Controller{
	
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
	}

	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_barang', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_opsi(){
		$kd_barang 		= $this->input->post('kd_barang');
		$nm_barang 		= $this->input->post('nm_barang');
		$spesifikasi 	= $this->input->post('spesifikasi');
		$lokasi 		= $this->input->post('lokasi');
		$kondisi 		= $this->input->post('kondisi');
		$stok 		= $this->input->post('stok');
		$sumber_dana 	= $this->input->post('sumber_dana');
		$keterangan 	= $this->input->post('keterangan');
		$jns_barang 	= $this->input->post('jns_barang');

		$data = array(
			'kd_barang' 	=> $kd_barang,
			'nm_barang' 	=> $nm_barang,
			'spesifikasi'	=> $spesifikasi,
			'lokasi' 		=> $lokasi,
			'kondisi' 		=> $kondisi,
			'stok' 		=> $stok,
			'sumber_dana' 	=> $sumber_dana,
			'keterangan' 	=> $keterangan,
			'jns_barang' 	=> $jns_barang
		);

		$this->model_barang->tambah_barang($data, 'tb_barang');
		redirect('data_barang/index');
	}

	public function edit($kd){
		$where = array('kd_barang' =>$kd);
		$data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')
		->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit_barang', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$kd_barang 		= $this->input->post('kd_barang');
		$nm_barang 		= $this->input->post('nm_barang');
		$spesifikasi 	= $this->input->post('spesifikasi');
		$lokasi 		= $this->input->post('lokasi');
		$kondisi 		= $this->input->post('kondisi');
		$stok 		= $this->input->post('stok');
		$sumber_dana 	= $this->input->post('sumber_dana');
		$keterangan 	= $this->input->post('keterangan');
		$jns_barang 	= $this->input->post('jns_barang');

		$data = array(
			'kd_barang' 	=> $kd_barang,
			'nm_barang' 	=> $nm_barang,
			'spesifikasi'	=> $spesifikasi,
			'lokasi' 		=> $lokasi,
			'kondisi' 		=> $kondisi,
			'stok' 		=> $stok,
			'sumber_dana' 	=> $sumber_dana,
			'keterangan' 	=> $keterangan,
			'jns_barang' 	=> $jns_barang
		);

		$where = array(
				'kd_barang' => $kd_barang);

		$this->model_barang->update_data($where,$data, 'tb_barang');
		redirect('data_barang/index');

	}

	public function hapus ($kd_barang){
		$where = array('kd_barang' => $kd_barang);
		$this->model_barang->hapus_data($where, 'tb_barang');
		redirect('data_barang/index');
	}

	public function print(){
		$data['barang'] = $this->model_barang->tampil_data("tb_barang")->result();
		$this->load->view('print_barang', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['barang'] = $this->model_barang->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_barang', $data);
		$this->load->view('templates/footer');
	}
}