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
		$data = $this->getAllDetails();
		$data['title'] = "Schedule";
		$data['faculties'] = $this->main_model->getFaculties();
		$data['schedules'] = $this->main_model->getSchedules();
		$this->load->view('templates/header', $data);
		$this->load->view('head/schedule');
		$this->load->view('templates/footer');
	}

	public function faculty(){
		$data['title'] = "Faculties";
		$data['faculties'] = $this->main_model->getFacultiesByDeptId();
		$this->load->view('templates/header', $data);
		$this->load->view('head/faculty');
		$this->load->view('templates/footer');
	}

	public function faculty_schedule($id){
		$data = $this->getAllDetails();
		$data['title'] = "Faculties";
		$data['schedules'] = $this->main_model->getSchedulesByFacultyId($id);
		$data['faculties'] = $this->main_model->getFaculty($id);
		$this->load->view('templates/header', $data);
		$this->load->view('head/faculty_schedule');
		$this->load->view('templates/footer');
	}

	// -------------------------------------- VIEWS -------------------------------------- //

	// ----------------------------------------------------------------------------------- //	

	// --------------------------------------- MISC -------------------------------------- //

	private function getAllDetails() {
		$data['sy'] = $this->main_model->getSchoolYear();
		$data['semesters'] = $this->main_model->getSemesters();
		$data['subjects'] = $this->main_model->getSubjects();
		$data['rooms'] = $this->main_model->getRooms();
		return $data;
	}



	// --------------------------------------- MISC -------------------------------------- //

	// ----------------------------------------------------------------------------------- //	

	// ------------------------------------- CALLBACK ------------------------------------ //

	public function schedule_check($str){
		$conflictStart = $this->main_model->checkTimeConflict($_POST['time_start']);
		$conflictEnd = $this->main_model->checkTimeConflict2($_POST['time_end']);

  	if($conflictStart||$conflictEnd){
  		$this->form_validation->set_message('schedule_check', 'This schedule is not available.');
      return false;
  	} else {
  		return true;
  	}
	}

	public function time_check($str){
		if($_POST['time_start']>=$_POST['time_end']||$_POST['time_start']==$_POST['time_end']){
  		$this->form_validation->set_message('time_check', 'Invalid time input.');
      return false;
  	} else {
  		return true;
  	}
	}

	// ------------------------------------- CALLBACK ------------------------------------ //

	// ----------------------------------------------------------------------------------- //

	// -------------------------------------- INSERT-------------------------------------- //

	public function addSchedule($route = "", $id = ""){
		if ($route == null) {
			$route = 'schedule';
		} else {
			$route = "$route/$id";
		}
		$this->load->library('form_validation');

	    $this->form_validation->set_rules('sy_id', 'School Year', 'trim|required');
	    $this->form_validation->set_rules('time_start', 'Start Time', 'trim|required|callback_schedule_check|callback_time_check');

	    if ($this->form_validation->run() == FALSE){
	    	$this->session->set_flashdata('toast', validation_errors());
	    } else {
	    	$faculty = $this->main_model->addSchedule();
	    	$action = 'New schedule successfully added to: '.$faculty[0]['f_name'].' '.$faculty[0]['m_name'].' '.$faculty[0]['l_name'];
	    	$this->session->set_flashdata('toast', $action);
	    	$this->main_model->addLog($action);
	    }

	    header('location:'.base_url('head/'.$route));
	}	

	// -------------------------------------- INSERT-------------------------------------- //

	// ----------------------------------------------------------------------------------- //	

	// -------------------------------------- DELETE-------------------------------------- //

	public function delete($name, $id, $img=''){
		$action = 'Successfully deleted '.$name.': '.$this->main_model->getDeletedDataName($name, $id);
		$this->main_model->addLog($action);
		$this->main_model->delete($name, $id);
		$this->session->set_flashdata('toast', ucfirst($name).' successfully deleted');
		header('location:'.base_url('head/'.$name));
	}

	// -------------------------------------- DELETE-------------------------------------- //

	// ----------------------------------------------------------------------------------- //	

	// -------------------------------------- UPDATE ------------------------------------- //


	public function updateSchedule(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('sy_id', 'School Year', 'trim|required');
    $this->form_validation->set_rules('time_start', 'Start Time', 'trim|required|callback_schedule_check|callback_time_check');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$faculty = $this->main_model->updateSchedule();
    	$action = 'Schedule of '.$faculty[0]['f_name'].' '.$faculty[0]['m_name'].' '.$faculty[0]['l_name']." successfully updated";
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('head/schedule'));
	}

	// -------------------------------------- UPDATE ------------------------------------- //
}