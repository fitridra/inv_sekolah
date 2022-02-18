<?php

class Data_barang_user extends CI_Controller{
	
	public function index()
	{
		$data['barang'] = $this->model_barang_user->tampil_data()->result();
		$this->load->view('template_user/header');
		$this->load->view('template_user/sidebar');
		$this->load->view('user/data_barang_user', $data);
		$this->load->view('template_user/footer');
	}

	public function print(){
		$data['barang'] = $this->model_barang_user->tampil_data("tb_barang")->result();
		$this->load->view('user/print_barang', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['barang'] = $this->model_barang_user->get_keyword($keyword);
		$this->load->view('template_user/header');
		$this->load->view('template_user/sidebar');
		$this->load->view('user/data_barang_user', $data);
		$this->load->view('template_user/footer');
	}

}