<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Head extends CI_Controller {

	// -------------------------------------- VIEWS -------------------------------------- //

	public function index(){
		$data['title'] = "Dashboard";
		$this->load->view('templates/header', $data);
		$this->load->view('head/dashboard');
		$this->load->view('templates/footer');
	}

	public function schedule(){
		$data['title'] = "Schedule";
		$data['sy'] = $this->main_model->getSchoolYear();
		$data['semesters'] = $this->main_model->getSemesters();
		$data['faculties'] = $this->main_model->getFaculties();
		$data['subjects'] = $this->main_model->getSubjects();
		$data['rooms'] = $this->main_model->getRooms();
		$data['schedules'] = $this->main_model->getSchedules();
		$this->load->view('templates/header', $data);
		$this->load->view('head/schedule');
		$this->load->view('templates/footer');
	}

	// -------------------------------------- VIEWS -------------------------------------- //

	// ----------------------------------------------------------------------------------- //	

	// -------------------------------------- INSERT-------------------------------------- //

	public function addSchedule(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('sy_id', 'School Year', 'trim|required');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$faculty = $this->main_model->addSchedule();
    	$action = 'New schedule successfully added to: '.$faculty[0]['fname'].' '.$faculty[0]['mname'].' '.$faculty[0]['lname'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/schedule'));
	}

	// -------------------------------------- INSERT-------------------------------------- //
}