<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()	{
		$data['title'] = "Authentication";
		$this->load->view('templates/login', $data);
	}

	public function login(){ 
		header('location:'.base_url('admin'));
	}

	public function logout(){
    $_SESSION = [];
    session_destroy();
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
        if ($_SESSION['user']['user_type'] == 'Administrator') {
          redirect('admin');
        } else {
          redirect('auth/selectSySem');
        }
      } else {
        $this->session->set_flashdata('toast', "Login failed! Incorrect username or password");
        redirect('auth');
      }    
    }
  }

  public function selectSySem() {
    $data['schoolYears'] = $this->main_model->getSchoolYear();
    $data['semesters'] = $this->main_model->getSemesters();

    $this->load->view('head/select_sy_sem', $data);
  }

  public function redirectUser() {
    $this->load->library('form_validation');
    if (isset($_POST['proceed'])) {
      $this->form_validation->set_rules('sy_id', 'School Year', 'trim|required');
      $this->form_validation->set_rules('semester_id', 'Semester', 'trim|required');

      if ($this->form_validation->run() == FALSE){
        $this->session->set_flashdata('toast', validation_errors());
        redirect('auth/selectSySem');
      } else {
        $_SESSION['sy'] = $this->main_model->getSchoolYearName($_POST['sy_id']);
        $_SESSION['semester'] = $this->main_model->getSemester($_POST['semester_id']);
        // User redirection
        if ($_SESSION['user']['user_type'] == 'Head') {
          redirect('head');
        }
      }
    } else {
      $_SESSION['user'] = "";
      redirect('auth');
    }
  }

}