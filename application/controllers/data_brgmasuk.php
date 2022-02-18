<?php

class Data_brgmasuk extends CI_Controller{
	
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
	
		$this->load->model('model_brgmasuk');
		$this->load->helper(array('url'));
	}

	public function index()
	{
		$data['brgmasuk'] = $this->model_brgmasuk->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_brgmasuk', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_opsi(){
		$kd_barang 			= $this->input->post('kd_barang');
		$tgl_masuk 		= $this->input->post('tgl_masuk');
		$jumlah 			= $this->input->post('jumlah');
		$kd_supplier 		= $this->input->post('kd_supplier');

		$data = array(
			'kd_barang'			=> $kd_barang,
			'tgl_masuk' 		=> $tgl_masuk,
			'jumlah' 			=> $jumlah,
			'kd_supplier' 		=> $kd_supplier
		);

		$this->model_brgmasuk->tambah_brgmasuk($data, 'tb_brgmasuk');
		redirect('data_brgmasuk/index');
	}

	public function edit($id){
		$where = array('id_brgmasuk' =>$id);
		$data['brgmasuk'] = $this->model_brgmasuk->edit_brgmasuk($where, 'tb_brgmasuk')
		->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit_brgmasuk', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$id_brgmasuk 			= $this->input->post('id_brgmasuk');
		$kd_barang 			= $this->input->post('kd_barang');
		$tgl_masuk 		= $this->input->post('tgl_masuk');
		$jumlah 			= $this->input->post('jumlah');
		$kd_supplier 		= $this->input->post('kd_supplier');

		$data = array(
			'id_brgmasuk'			=> $id_brgmasuk,
			'kd_barang'			=> $kd_barang,
			'tgl_masuk' 		=> $tgl_masuk,
			'jumlah' 			=> $jumlah,
			'kd_supplier' 		=> $kd_supplier
		);

		$where = array(
				'id_brgmasuk' => $id_brgmasuk);

		$this->model_brgmasuk->update_data($where,$data, 'tb_brgmasuk');
		redirect('data_brgmasuk/index');

	}

	public function hapus ($id_brgmasuk){
		$where = array('id_brgmasuk' => $id_brgmasuk);
		$this->model_brgmasuk->hapus_data($where, 'tb_brgmasuk');
		redirect('data_brgmasuk/index');
	}

	public function print(){
		$data['brgmasuk'] = $this->model_brgmasuk->tampil_data("tb_brgmasuk")->result();
		$this->load->view('print_brgmasuk', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['brgmasuk'] = $this->model_brgmasuk->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_brgmasuk', $data);
		$this->load->view('templates/footer');
	}
}