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
  
	public function available_rooms(){
		$data['title'] = "Schedule";
		$data['faculty'] = $this->main_model->getFaculty($_SESSION['available_rooms']['faculty_id']);
		$data['building'] = $this->main_model->getBuilding($_SESSION['available_rooms']['room_id']);
		$data['semester'] = $this->main_model->getSemester($_SESSION['available_rooms']['semester_id']);
		$data['sy'] = $this->main_model->getSchoolYearName($_SESSION['available_rooms']['sy_id']);
		$data['room'] = $this->main_model->getRoom($_SESSION['available_rooms']['room_id']);
		$rooms = $this->main_model->getBuildingRooms($data['building'][0]['building_id']);
		$available_rooms = [];

		foreach ($rooms as $row) {
			$conflictStart = $this->main_model->checkTimeConflict($_SESSION['available_rooms']['time_start'], $_SESSION['available_rooms']['day'], $row['room_id'], $_SESSION['available_rooms']['sy_id'], $_SESSION['available_rooms']['semester_id']);
			$conflictEnd = $this->main_model->checkTimeConflict2($_SESSION['available_rooms']['time_end'], $_SESSION['available_rooms']['day'], $row['room_id'], $_SESSION['available_rooms']['sy_id'], $_SESSION['available_rooms']['semester_id']);
			if($conflictStart||$conflictEnd){

	  	} else {
	  		array_push($available_rooms, $row);
	  	}
		}

		$data['available_rooms'] = $available_rooms;

		$this->load->view('templates/header', $data);
		$this->load->view('head/available_rooms');
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
		$conflictStart = $this->main_model->checkTimeConflict($_POST['time_start'], $_POST['day'], $_POST['room_id'], $_POST['sy_id'], $_POST['semester_id']);
		$conflictEnd = $this->main_model->checkTimeConflict2($_POST['time_end'], $_POST['day'], $_POST['room_id'], $_POST['sy_id'], $_POST['semester_id']);

  	if($conflictStart||$conflictEnd){
  		$_SESSION['available_rooms']['faculty_id'] = $_POST['faculty_id'];
  		$_SESSION['available_rooms']['room_id'] = $_POST['room_id'];
  		$_SESSION['available_rooms']['day'] = $_POST['day'];
  		$_SESSION['available_rooms']['sy_id'] = $_POST['sy_id'];
  		$_SESSION['available_rooms']['semester_id'] = $_POST['semester_id'];
  		$_SESSION['available_rooms']['time_start'] = $_POST['time_start'];
  		$_SESSION['available_rooms']['time_end'] = $_POST['time_end'];

  		$action = 'The room is currently not available in the said time frame. These are the rooms available in the same building.';
	  	$this->session->set_flashdata('toast', $action);

  		redirect('/head/available_rooms', 'refresh');
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

	public function addSchedule($route="", $id=""){
		if ($route == null) {
			$route = 'schedule';
		} else {
			$route = "$route/$id";
		}
		$this->load->library('form_validation');

    $this->form_validation->set_rules('sy_id', 'School Year', 'trim|required');
    $this->form_validation->set_rules('time_start', 'Start Time', 'trim|required|callback_time_check|callback_schedule_check');

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