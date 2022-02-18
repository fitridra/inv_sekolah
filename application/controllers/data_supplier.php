<?php

class Data_supplier extends CI_Controller{
	
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
		$data['supplier'] = $this->model_supplier->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_supplier', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_opsi(){
		$kd_supplier	= $this->input->post('kd_supplier');
		$nm_supplier 	= $this->input->post('nm_supplier');
		$alamat 		= $this->input->post('alamat');
		$no_telp 		= $this->input->post('no_telp');

		$data = array(
			'kd_supplier' 	=> $kd_supplier,
			'nm_supplier' 	=> $nm_supplier,
			'alamat'		=> $alamat,
			'no_telp' 		=> $no_telp
		);

		$this->model_supplier->tambah_supplier($data, 'tb_supplier');
		redirect('data_supplier/index');
	}

	public function edit($kd){
		$where = array('kd_supplier' =>$kd);
		$data['supplier'] = $this->model_supplier->edit_supplier($where, 'tb_supplier')
		->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit_supplier', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$kd_supplier	= $this->input->post('kd_supplier');
		$nm_supplier 	= $this->input->post('nm_supplier');
		$alamat		 	= $this->input->post('alamat');
		$no_telp 		= $this->input->post('no_telp');

		$data = array(
			'kd_supplier' 	=> $kd_supplier,
			'nm_supplier' 	=> $nm_supplier,
			'alamat'		=> $alamat,
			'no_telp' 		=> $no_telp
		);

		$where = array(
				'kd_supplier' => $kd_supplier);

		$this->model_supplier->update_data($where,$data, 'tb_supplier');
		redirect('data_supplier/index');

	}

	public function hapus ($kd_supplier){
		$where = array('kd_supplier' => $kd_supplier);
		$this->model_supplier->hapus_data($where, 'tb_supplier');
		redirect('data_supplier/index');
	}

	public function print(){
		$data['supplier'] = $this->model_supplier->tampil_data("tb_supplier")->result();
		$this->load->view('print_supplier', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['supplier'] = $this->model_supplier->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_supplier', $data);
		$this->load->view('templates/footer');
	}
}