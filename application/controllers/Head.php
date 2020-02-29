<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Head extends CI_Controller {

	public function index(){
		$data['title'] = "Dashboard";
		$this->load->view('templates/header', $data);
		$this->load->view('head/dashboard');
		$this->load->view('templates/footer');
	}

	public function schedule(){
		$data['title'] = "Schedule";
		$data['colleges'] = $this->main_model->getColleges();
		$this->load->view('templates/header', $data);
		$this->load->view('head/schedule');
		$this->load->view('templates/footer');
	}

}