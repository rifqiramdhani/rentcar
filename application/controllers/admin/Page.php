<?php defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('My_model', 'crud_model');
		$this->load->helper('form');
		$this->load->helper('fungsi');
		//
		cek_user('Admin');
	}


	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function template()
	{
		$this->load->view('template');
	}

	public function dashboard()
	{
		$data['level'] = strtolower($this->session->userdata('level'));
		$this->template->load('template', 'admin/dashboard', $data);
	}

	public function mobil()
	{
		$data['level'] = strtolower($this->session->userdata('level'));
		$this->template->load('template', 'admin/mobil', $data);
	}

}
