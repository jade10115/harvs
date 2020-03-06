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

	public function validate(){
    $this->load->library('form_validation');
	  $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if ($this->form_validation->run() == FALSE){
      $this->session->set_flashdata('toast', validation_errors());
      redirect('auth');
    } else {
        if ($this->main_model->userAuthentication()) {
        // User role based redirect here
        redirect('Admin');
      } else {
        $this->session->set_flashdata('toast', "Login failed! Incorrect username or password");
        redirect('auth');
      }    
    }
  }
}
