<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	// -------------------------------------- VIEWS -------------------------------------- //

	public function index(){
		$data['title'] = "Dashboard";
		$this->load->view('templates/header', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('templates/footer');
	}

	public function building(){
		$data['title'] = "Buildings";
		$data['buildings'] = $this->main_model->getBuildings();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/building');
		$this->load->view('templates/footer');
	}

	public function college(){
		$data['title'] = "Colleges";
		$data['colleges'] = $this->main_model->getColleges();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/college');
		$this->load->view('templates/footer');
	}

	public function course(){
		$data['title'] = "Courses";
		$data['colleges'] = $this->main_model->getColleges();
		$data['courses'] = $this->main_model->getCourses();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/course');
		$this->load->view('templates/footer');
	}

	public function department(){
		$data['title'] = "Departments";
		$data['departments'] = $this->main_model->getDepartments();
		$data['colleges'] = $this->main_model->getColleges();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/department');
		$this->load->view('templates/footer');
	}

	public function designation(){
		$data['title'] = "Designations";
		$data['designations'] = $this->main_model->getDesignations();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/designation');
		$this->load->view('templates/footer');
	}

	public function faculty(){
		$data['title'] = "Faculties";
		$data['faculties'] = $this->main_model->getFaculties();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/faculty');
		$this->load->view('templates/footer');
	}

	public function faculty_add(){
		$data['title'] = "Faculties";
		$data['user_types'] = $this->main_model->getUserTypes();
		$data['departments'] = $this->main_model->getDepartments();
		$data['ranks'] = $this->main_model->getRanks();
		$data['designations'] = $this->main_model->getDesignations();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/faculty_add');
		$this->load->view('templates/footer');
	}

	public function faculty_view($id){
		$data['title'] = "Faculties";
		$data['faculty'] = $this->main_model->getFaculty($id);

		if($data['faculty']){
			$data['name'] = $data['faculty'][0]['f_name'] . ' '. $data['faculty'][0]['m_name'] . ' ' . $data['faculty'][0]['l_name'];
			$data['departments'] = $this->main_model->getDepartments();
			$data['ranks'] = $this->main_model->getRanks();
			$data['designations'] = $this->main_model->getDesignations();
			$this->load->view('templates/header', $data);
			$this->load->view('admin/faculty_view');
			$this->load->view('templates/footer');
		} else {
			echo '404 Faculty not found';
		}
	}

	public function rank(){
		$data['title'] = "Ranks";
		$data['ranks'] = $this->main_model->getRanks();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/rank');
		$this->load->view('templates/footer');
	}

	public function room(){
		$data['title'] = "Rooms";
		$data['buildings'] = $this->main_model->getBuildings();
		$data['rooms'] = $this->main_model->getRooms();
		$data['room_types'] = $this->main_model->getRoomTypes();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/room');
		$this->load->view('templates/footer');
	}

	public function room_type(){
		$data['title'] = "Room Types";
		$data['room_types'] = $this->main_model->getRoomTypes();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/room_type');
		$this->load->view('templates/footer');
	}	

	public function semester(){
		$data['title'] = "Semesters";
		$data['semesters'] = $this->main_model->getSemesters();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/semester');
		$this->load->view('templates/footer');
	}

	public function sy(){
		$data['title'] = "School Year";
		$data['sy'] = $this->main_model->getSchoolYear();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/sy');
		$this->load->view('templates/footer');
	}

	public function subject(){
		$data['title'] = "Subjects";
		$data['courses'] = $this->main_model->getCourses();
		$data['subjects'] = $this->main_model->getSubjects();
		$data['room_types'] = $this->main_model->getRoomTypes();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/subject');
		$this->load->view('templates/footer');
	}

	public function user(){
		$data['title'] = "Users";
		$data['user'] = $this->main_model->getUsers();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/user');
		$this->load->view('templates/footer');
	}

	public function user_type(){
		$data['title'] = "User Types";
		$data['user_types'] = $this->main_model->getUserTypes();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/user_type');
		$this->load->view('templates/footer');
	}

	public function sched_layout(){
		$data['title'] = "Sample Schedule Layout";
		$this->load->view('templates/header', $data);
		$this->load->view('admin/schedule_layout');
		$this->load->view('templates/footer');
	}

	public function logs(){
		$data['title'] = "Logs";
		$data['logs'] = $this->main_model->getLogs();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/logs');
		$this->load->view('templates/footer');
	}

	// -------------------------------------- VIEWS -------------------------------------- //

	// ----------------------------------------------------------------------------------- //	

	// -------------------------------------- JSON --------------------------------------- //

	public function getDepartmentsJSON($id){
		$departments = $this->main_model->getDepartment($id);
		if($departments){
			echo json_encode($departments);	
		} else {
			echo 0;
		}
	}

	// -------------------------------------- JSON --------------------------------------- //

	// ----------------------------------------------------------------------------------- //	

	// -------------------------------------- INSERT ------------------------------------- //

	public function addBuilding(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('building_name', 'Building Name', 'trim|required|is_unique[tbl_building.building_name]');
    $this->form_validation->set_rules('no_of_rooms', 'No. of Rooms', 'trim|required|integer');
    $this->form_validation->set_rules('no_of_floors', 'No. of Floors', 'trim|required|integer');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addBuilding();	
    	$action = 'New building successfully added: '.$_POST['building_name'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/building'));
	}

	public function addDepartment(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('college_id', 'College', 'trim|required|integer');
    $this->form_validation->set_rules('department_name', 'Department Name', 'trim|required|is_unique[tbl_department.department_name]');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addDepartment();	
    	$action = 'New department successfully added: '.$_POST['department_name'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/department'));
	}

	public function addCollege(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('college_name', 'College Name', 'trim|required|is_unique[tbl_college.college_name]');
    $this->form_validation->set_rules('college_abbr', 'Abbreviation', 'trim|required|is_unique[tbl_college.college_abbr]');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addCollege();	
    	$action = 'New college successfully added: '.$_POST['college_name'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/college'));
	}

	public function addDesignation(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('designation_name', 'Designation Name', 'trim|required|is_unique[tbl_designation.designation_name]');
    $this->form_validation->set_rules('regular_unit', 'Regular Unit', 'trim|required|integer');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addDesignation();	
    	$action = 'New designation successfully added: '.$_POST['designation_name'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/designation'));
	}

	function ee($data){
		echo "<pre>";print_r(var_dump($data));die;
	}

	public function addCourse(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('college_id', 'College', 'trim|required|integer');
    $this->form_validation->set_rules('department_id', 'Department', 'trim|required|integer');
    $this->form_validation->set_rules('course_name', 'Course Name', 'trim|required|is_unique[tbl_course.course_name]');
    $this->form_validation->set_rules('course_abbr', 'Abbreviation', 'trim|required|is_unique[tbl_course.course_abbr]');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addCourse();	
    	$action = 'New course successfully added: '.$_POST['course_name'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/course'));
	}

	public function addRoom(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('building_id', 'Building Name', 'trim|required|integer');
    $this->form_validation->set_rules('room_type_id', 'Room Type', 'trim|required|integer');
    $this->form_validation->set_rules('room_number', 'Floor Number', 'trim|required');
    $this->form_validation->set_rules('room_floor', 'Room Number', 'trim|required|integer');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addRoom();	
    	$action = 'New room successfully added: '.$_POST['room_number'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }
    header('location:'.base_url('admin/room'));
	}

	public function addFaculty(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('identification', 'Identification', 'trim|required|is_unique[tbl_faculty.identification]|callback_id_check');
 		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[tbl_user.username]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    $this->form_validation->set_rules('f_name', 'First Name ', 'trim|required');
    $this->form_validation->set_rules('l_name', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('m_name', 'Middle Name ', 'trim');
    $this->form_validation->set_rules('suffix_name', 'Suffix Name ', 'trim');
    $this->form_validation->set_rules('ext_name', 'Extension Name ', 'trim');
    $this->form_validation->set_rules('email', 'Email Address', 'trim|required|is_unique[tbl_faculty.email]');
    $this->form_validation->set_rules('contact_no', 'Contact Number', 'trim|required|integer|is_unique[tbl_faculty.contact_no]');
    $this->form_validation->set_rules('address', 'Address', 'trim');
    $this->form_validation->set_rules('department_id', 'Select Department', 'trim|required|integer');
    $this->form_validation->set_rules('rank_id', 'Select Rank', 'trim|required|integer');
    $this->form_validation->set_rules('designation_id', 'Select Designation', 'trim|required|integer');
    
    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addFaculty($_FILES['image_src']['name']);
    	move_uploaded_file($_FILES['image_src']['tmp_name'], 'assets/img/users/'.$_FILES['image_src']['name']);

    	$action = 'Faculty successfully added: '.$_POST['f_name'].' '.$_POST['l_name'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/faculty_add'));
	}

	public function id_check($str){
		$birth_date = explode('-', $_POST['birth_date']);
  	$birth_date = implode('', $birth_date);
  	$identification = substr($_POST['f_name'],0,1).substr($_POST['l_name'],0,1).$birth_date;

  	if($str==$identification){
  		return true;
  	} else {
  		$this->form_validation->set_message('id_check', 'Invalid faculty identification number.');
      return false;
  	}
	}

	public function addRank(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('rank_type', 'Rank Type', 'trim|required|is_unique[tbl_rank.rank_type]');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addRank();	
    	$action = 'New rank successfully added: '.$_POST['rank_type'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/rank'));
	}

	public function addSemester(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('semester_type', 'Semester Type', 'trim|required|is_unique[tbl_semester.semester_type]');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addSemester();	
    	$action = 'New semester successfully added: '.$_POST['semester_type'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/semester'));
	}

	public function addSY(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('sy_from', 'School Year', 'trim|required|callback_sy_check');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addSY();	
    	$action = 'New school year successfully added: '.$_POST['sy_from'].'-'.$_POST['sy_to'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/sy'));
	}

	public function sy_check($str){
		$schoolYear = $_POST['sy_from'].'-'.$_POST['sy_to'];
		$duplicate = $this->main_model->checkDuplicate('school_year', $schoolYear, 'tbl_sy');
		
		if($duplicate==0){
			return true;
		} else {
			$this->form_validation->set_message('sy_check', 'School year already exist.');
      return false;
		}
	}

	public function addUserType(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('user_type', 'User Type', 'trim|required|is_unique[tbl_user_type.user_type]');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addUserType();	
    	$action = 'New user type successfully added: '.$_POST['user_type'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/user_type'));
	}

	public function addRoomType(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('room_type', 'Room Type', 'trim|required|is_unique[tbl_room_type.room_type]');
    $this->form_validation->set_rules('room_description', 'Room Description', 'trim|required');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addRoomType();	
    	$action = 'New room type successfully added: '.$_POST['room_type'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/room_type'));
	}

	public function addSubject(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('course_id', 'Course', 'trim|required|integer');
    $this->form_validation->set_rules('subject_code', 'Subject Code', 'trim|required|is_unique[tbl_subject.subject_code]');
    $this->form_validation->set_rules('subject_description', 'Subject Description', 'trim|required');
    $this->form_validation->set_rules('subject_type', 'Subject Type', 'trim|required|integer');
    $this->form_validation->set_rules('subject_unit', 'Unit', 'trim|required|integer');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addSubject();	
    	$action = 'New subject successfully added: '.$_POST['subject_code'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/subject'));
	}

	// -------------------------------------- INSERT ------------------------------------- //

	// ----------------------------------------------------------------------------------- //	

	// -------------------------------------- DELETE ------------------------------------- //

	public function delete($name, $id, $img=''){
		if($name=='faculty'){
			unlink('assets/img/users/'.$img);
		}
		$action = 'Successfully deleted '.ucfirst($name).': '.$this->main_model->getDeletedDataName($name, $id);
		$this->main_model->addLog($action);
		$this->main_model->delete($name, $id);
		$this->session->set_flashdata($action);
		header('location:'.base_url('admin/'.$name));
	}

	// -------------------------------------- DELETE ------------------------------------- //

	// ----------------------------------------------------------------------------------- //

	// -------------------------------------- UPDATE ------------------------------------- //

	public function updateBuilding(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('building_name', 'Building Name', 'trim|required');
    $this->form_validation->set_rules('no_of_rooms', 'No. of Rooms', 'trim|required|integer');
    $this->form_validation->set_rules('no_of_floors', 'No. of Floors', 'trim|required|integer');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateBuilding();	
    	$action = 'Building successfully updated: '.$_POST['building_name'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/building'));
	}

	public function updateCollege(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('college_name', 'College Name', 'trim|required');
    $this->form_validation->set_rules('college_abbr', 'Abbreviation', 'trim|required');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateCollege();	
    	$action = 'College successfully updated: '.$_POST['college_name'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/college'));
	}

	public function updateDepartment(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('college_id', 'College', 'trim|required|integer');
    $this->form_validation->set_rules('department_name', 'Department Name', 'trim|required');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateDepartment();	
    	$action = 'Department successfully updated: '.$_POST['department_name'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/department'));
	}

	public function updateCourse(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('college_id', 'College', 'trim|required|integer');
    $this->form_validation->set_rules('department_id', 'Department', 'trim|required|integer');
    $this->form_validation->set_rules('course_name', 'Course Name', 'trim|required');
    $this->form_validation->set_rules('course_abbr', 'Abbreviation', 'trim|required');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateCourse();	
    	$action = 'Course successfully updated: '.$_POST['course_name'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/course'));
	}

	public function updateDesignation(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('regular_unit', 'Regular Unit', 'trim|required|integer');
    $this->form_validation->set_rules('designation_name', 'Designation Name', 'trim|required');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateDesignation();	
    	$action = 'Designation successfully updated: '.$_POST['designation_name'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/designation'));
	}

	public function updateRoom(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('building_id', 'Building Name', 'trim|required|integer');
    $this->form_validation->set_rules('room_type_id', 'Room Type', 'trim|required|integer');
    $this->form_validation->set_rules('room_number', 'Floor Number', 'trim|required');
    $this->form_validation->set_rules('room_floor', 'Room Number', 'trim|required|integer');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateRoom();	
    	$action = 'Room successfully updated: '.$_POST['room_number'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }
    header('location:'.base_url('admin/room'));
	}

	public function updateRank(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('rank_type', 'Rank Type', 'trim|required|is_unique[tbl_rank.rank_type]');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateRank();	
    	$action = 'Rank successfully updated: '.$_POST['rank_type'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/rank'));
	}

	public function updateSemester(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('semester_type', 'Semester Type', 'trim|required|is_unique[tbl_semester.semester_type]');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateSemester();	
    	$action = 'Semester successfully updated: '.$_POST['semester_type'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/semester'));
	}

	public function updateSY(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('sy_from', 'School Year', 'trim|required|callback_sy_check');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addSY();	
    	$action = 'New school year successfully updated: '.$_POST['sy_from'].'-'.$_POST['sy_to'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/sy'));
	}

	public function updateUserType(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('user_type', 'User Type', 'trim|required|is_unique[tbl_user_type.user_type]');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateUserType();	
    	$action = 'User type successfully updated: '.$_POST['user_type'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/user_type'));
	}

	public function updateRoomType(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('room_type', 'Room Type', 'trim|required');
    $this->form_validation->set_rules('room_description', 'Room Description', 'trim|required');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateRoomType();	
    	$action = 'Room type successfully updated: '.$_POST['room_type'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/room_type'));
	}

	public function updateSubject(){
	  $this->load->library('form_validation');

    $this->form_validation->set_rules('course_id', 'Course', 'trim|required|integer');
    $this->form_validation->set_rules('subject_code', 'Subject Code', 'trim|required');
    $this->form_validation->set_rules('subject_description', 'Subject Description', 'trim|required');
    $this->form_validation->set_rules('subject_type', 'Subject Type', 'trim|required|integer');
    $this->form_validation->set_rules('subject_unit', 'Unit', 'trim|required|integer');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateSubject();	
    	$action = 'Subject successfully updated: '.$_POST['subject_code'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/subject'));
	}

	public function updateFaculty(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('f_name', 'First Name ', 'trim|required');
    $this->form_validation->set_rules('l_name', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('m_name', 'Middle Name ', 'trim');
    $this->form_validation->set_rules('suffix_name', 'Suffix Name ', 'trim');
    $this->form_validation->set_rules('ext_name', 'Extension Name ', 'trim');
	  $this->form_validation->set_rules('email', 'Email Address', 'trim|required');
	  $this->form_validation->set_rules('contact_no', 'Contact Number', 'trim|required|integer');
	  $this->form_validation->set_rules('address', 'Address', 'trim');
	  $this->form_validation->set_rules('department_id', 'Select Department', 'trim|required|integer');
	  $this->form_validation->set_rules('rank_id', 'Select Rank', 'trim|required|integer');
	  $this->form_validation->set_rules('designation_id', 'Select Designation', 'trim|required|integer');

    if($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateFaculty();	
    	$action = 'Faculty successfully updated: '.$_POST['f_name'].' '.$_POST['l_name'];
    	$this->session->set_flashdata('toast', $action);
    	$this->main_model->addLog($action);
    }

    header('location:'.base_url('admin/faculty_view/'.$_POST['faculty_id']));
	}

	// -------------------------------------- UPDATE ------------------------------------- //


}