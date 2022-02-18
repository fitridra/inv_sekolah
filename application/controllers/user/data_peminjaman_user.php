<?php

class Data_peminjaman_user extends CI_Controller{

	public function __construct(){
	parent::__construct();
	$this->load->model('model_peminjaman');
	$this->load->helper(array('url'));
	}

	public function index()
	{
		$data['peminjaman'] = $this->model_peminjaman_user->tampil_data()->result();
		$this->load->view('template_user/header');
		$this->load->view('template_user/sidebar');
		$this->load->view('user/data_peminjaman_user', $data);
		$this->load->view('template_user/footer');
	}

	public function print(){
		$data['peminjaman'] = $this->model_peminjaman_user->tampil_data("tb_peminjaman")->result();
		$this->load->view('user/print_peminjaman', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['peminjaman'] = $this->model_peminjaman_user->get_keyword($keyword);
		$this->load->view('template_user/header');
		$this->load->view('template_user/sidebar');
		$this->load->view('user/data_peminjaman_user', $data);
		$this->load->view('template_user/footer');
	}
}