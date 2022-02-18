<?php 

class Dashboard_user extends CI_Controller{

	public function index()
	{
		$this->load->view('template_user/header');
		$this->load->view('template_user/sidebar');
		$this->load->view('user/dashboard_user');
		$this->load->view('template_user/footer');
	}
}