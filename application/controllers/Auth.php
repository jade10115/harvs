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
	  $username = $this->input->post('username');
    $password = $this->input->post('password');
    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->where('username',$username);
    $this->db->where('password',$password);
		  
    $query = $this->db->get();
    $result = $query->result_array();
    
    if($query->num_rows() > 0){
      $this->session->set_userdata('user_id',$result);

      if($query->row('user_type_id') == 5){
        redirect('Admin');
      }elseif ($query->row('user_level') == 'student') {
        redirect('event_user');
      } elseif ($query->row('user_level') == 'stud_pres') {
        redirect('event_pres');
      } else{
        redirect('login');
      }
    } else {
      echo "<p style='color: red;font-weight: bold;'>Wrong username or password! </p>";
    }
  }
}
