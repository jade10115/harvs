<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()	{
		$data['title'] = "Authentication";
		// $this->load->view('templates/header', $data);   
		$this->load->view('admin/index', $data);
		// $this->load->view('templates/footer');
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
      $this->form_validation->set_rules('sy', 'School Year', 'trim|required');
      $this->form_validation->set_rules('sem', 'Semester', 'trim|required');

      if ($this->form_validation->run() == FALSE){
        $this->session->set_flashdata('toast', validation_errors());
        redirect('auth/selectSySem');
      } else {
        $_SESSION['sy_id'] = $_POST['sy'];
        $_SESSION['sem_id'] = $_POST['sem'];
        $_SESSION['schoolyear'] = $this->main_model->getSchoolYearName($_POST['sy']);
        $_SESSION['semester'] = $this->main_model->getSemester($_POST['sem']);
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

  function ee($data){
    echo "<pre>";print_r(var_dump($data));die;
  }
}