<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()	{
		$data['title'] = "Authentication";
		$this->load->view('templates/header', $data);
		$this->load->view('admin/index');
		$this->load->view('templates/footer');
	}

	public function login(){
		header('location:'.base_url('admin'));
	}

	public function logout(){
		header('location:'.base_url('/'));
	}
}
