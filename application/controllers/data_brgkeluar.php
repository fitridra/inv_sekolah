<?php

class Data_brgkeluar extends CI_Controller{
	
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
		
		$this->load->model('model_brgkeluar');
		$this->load->helper(array('url'));
	}

	public function index()
	{
		$data['brgkeluar'] = $this->model_brgkeluar->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_brgkeluar', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_opsi(){
		$kd_barang 			= $this->input->post('kd_barang');
		$tgl_keluar 		= $this->input->post('tgl_keluar');
		$jumlah 			= $this->input->post('jumlah');
		$lokasi 			= $this->input->post('lokasi');
		$penerima 		= $this->input->post('penerima');
		$keterangan 			= $this->input->post('keterangan');

		$data = array(
			'kd_barang'			=> $kd_barang,
			'tgl_keluar' 		=> $tgl_keluar,
			'jumlah' 			=> $jumlah,
			'lokasi' 			=> $lokasi,
			'penerima' 		=> $penerima,
			'keterangan' 			=> $keterangan
		);

		$this->model_brgkeluar->tambah_brgkeluar($data, 'tb_brgkeluar');
		redirect('data_brgkeluar/index');
	}

	public function edit($id){
		$where = array('id_brgkeluar' =>$id);
		$data['brgkeluar'] = $this->model_brgkeluar->edit_brgkeluar($where, 'tb_brgkeluar')
		->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit_brgkeluar', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$id_brgkeluar 			= $this->input->post('id_brgkeluar');
		$kd_barang 			= $this->input->post('kd_barang');
		$tgl_keluar 		= $this->input->post('tgl_keluar');
		$jumlah 			= $this->input->post('jumlah');
		$lokasi 			= $this->input->post('lokasi');
		$penerima 		= $this->input->post('penerima');
		$keterangan 			= $this->input->post('keterangan');

		$data = array(
			'id_brgkeluar'			=> $id_brgkeluar,
			'kd_barang'			=> $kd_barang,
			'tgl_keluar' 		=> $tgl_keluar,
			'jumlah' 			=> $jumlah,
			'lokasi' 			=> $lokasi,
			'penerima' 		=> $penerima,
			'keterangan' 			=> $keterangan
		);

		$where = array(
				'id_brgkeluar' => $id_brgkeluar);

		$this->model_brgkeluar->update_data($where,$data, 'tb_brgkeluar');
		redirect('data_brgkeluar/index');

	}

	public function hapus ($id_brgkeluar){
		$where = array('id_brgkeluar' => $id_brgkeluar);
		$this->model_brgkeluar->hapus_data($where, 'tb_brgkeluar');
		redirect('data_brgkeluar/index');
	}

	public function print(){
		$data['brgkeluar'] = $this->model_brgkeluar->tampil_data("tb_brgkeluar")->result();
		$this->load->view('print_brgkeluar', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['brgkeluar'] = $this->model_brgkeluar->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_brgkeluar', $data);
		$this->load->view('templates/footer');
	}
}