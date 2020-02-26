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
		$data['title2'] = "Add Faculty";
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
			$data['title2'] = $data['faculty'][0]['f_name'] . ' '. $data['faculty'][0]['m_name'] . ' ' . $data['faculty'][0]['l_name'];
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

	public function subject(){
		$data['title'] = "Subjects";
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

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addBuilding();	
    	$this->session->set_flashdata('toast', 'New building successfully added.');
    }

    header('location:'.base_url('admin/building'));
	}

	public function addDepartment(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('department_name', 'Department Name', 'trim|required|is_unique[tbl_department.department_name]');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addDepartment();	
    	$this->session->set_flashdata('toast', 'New department successfully added.');
    }

    header('location:'.base_url('admin/department'));
	}

	public function addCollege(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('college_name', 'College Name', 'trim|required|is_unique[tbl_college.college_name]');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addCollege();	
    	$this->session->set_flashdata('toast', 'New college successfully added.');
    }

    header('location:'.base_url('admin/college'));
	}

	public function addDesignation(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('designation_name', 'Designation Name', 'trim|required|is_unique[tbl_designation.designation_name]');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addDesignation();	
    	$this->session->set_flashdata('toast', 'New designation successfully added.');
    }

    header('location:'.base_url('admin/designation'));
	}

	function ee($data){
		echo "<pre>";print_r(var_dump($data));die;
	}

	public function addCourse(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('course_name', 'Course Name', 'trim|required|is_unique[tbl_course.course_name]');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addCourse();	
    	$this->session->set_flashdata('toast', 'New course successfully added.');
    }

    header('location:'.base_url('admin/course'));
	}

	public function addRoom(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('building_id', 'Building Name', 'trim|required');
    $this->form_validation->set_rules('room_type_id', 'Room Type', 'trim|required');
    $this->form_validation->set_rules('room_number', 'Floor Number', 'trim|required');
    $this->form_validation->set_rules('room_floor', 'Room Number', 'trim|required');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addRoom();	
    	$this->session->set_flashdata('toast', 'New room successfully added.');
    }
    header('location:'.base_url('admin/room'));
	}

	public function addFaculty(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('identification', 'Identification', 'trim|required|is_unique[tbl_faculty.identification]|callback_id_check');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addFaculty();
    	$this->session->set_flashdata('toast', 'New faculty successfully added.');
    }

    header('location:'.base_url('admin/faculty_add'));
	}

	public function id_check($str){
		$birth_date = explode('-', $_POST['birth_date']);
  	$birth_date = implode('', $birth_date);
  	$identification = substr($_POST['l_name'],0,1).substr($_POST['f_name'],0,1).$birth_date;

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

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addRank();	
    	$this->session->set_flashdata('toast', 'New rank successfully added.');
    }

    header('location:'.base_url('admin/rank'));
	}

	public function addSemester(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('semester_type', 'Semester Type', 'trim|required|is_unique[tbl_semester.semester_type]');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addSemester();	
    	$this->session->set_flashdata('toast', 'New semester successfully added.');
    }

    header('location:'.base_url('admin/semester'));
	}

	public function addUserType(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('user_type', 'User Type', 'trim|required|is_unique[tbl_user_type.user_type]');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addUserType();	
    	$this->session->set_flashdata('toast', 'New user type successfully added.');
    }

    header('location:'.base_url('admin/user_type'));
	}

	public function addRoomType(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('room_type', 'Room Type', 'trim|required|is_unique[tbl_room_type.room_type]');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addRoomType();	
    	$this->session->set_flashdata('toast', 'New room type successfully added.');
    }

    header('location:'.base_url('admin/room_type'));
	}

	public function addSubject(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('subject_code', 'Subject Code', 'trim|required|is_unique[tbl_subject.subject_code]');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->addSubject();	
    	$this->session->set_flashdata('toast', 'New subject successfully added.');
    }

    header('location:'.base_url('admin/subject'));
	}

	// -------------------------------------- INSERT ------------------------------------- //

	// ----------------------------------------------------------------------------------- //	

	// -------------------------------------- DELETE ------------------------------------- //

	public function delete($name, $id){
		$this->main_model->delete($name, $id);
		$this->session->set_flashdata('toast', ucfirst($name).' successfully deleted.');
		header('location:'.base_url('admin/'.$name));
	}

	// -------------------------------------- DELETE ------------------------------------- //

	// ----------------------------------------------------------------------------------- //

	// -------------------------------------- UPDATE ------------------------------------- //

	public function updateBuilding(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('building_name', 'Building Name', 'trim|required');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateBuilding();	
    	$this->session->set_flashdata('toast', 'Building successfully updated.');
    }

    header('location:'.base_url('admin/building'));
	}

	public function updateCollege(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('college_name', 'College Name', 'trim|required');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateCollege();	
    	$this->session->set_flashdata('toast', 'College successfully updated.');
    }

    header('location:'.base_url('admin/college'));
	}

	public function updateDepartment(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('department_name', 'Department Name', 'trim|required');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateDepartment();	
    	$this->session->set_flashdata('toast', 'Department successfully updated.');
    }

    header('location:'.base_url('admin/department'));
	}

	public function updateCourse(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('course_name', 'Course Name', 'trim|required');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateCourse();	
    	$this->session->set_flashdata('toast', 'Course successfully updated.');
    }

    header('location:'.base_url('admin/course'));
	}

	public function updateDesignation(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('designation_name', 'Designation Name', 'trim|required');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateDesignation();	
    	$this->session->set_flashdata('toast', 'Designation successfully updated.');
    }

    header('location:'.base_url('admin/designation'));
	}

	public function updateRoom(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('building_id', 'Building Name', 'trim|required');
    $this->form_validation->set_rules('room_type_id', 'Room Type', 'trim|required');
    $this->form_validation->set_rules('room_number', 'Floor Number', 'trim|required');
    $this->form_validation->set_rules('room_floor', 'Room Number', 'trim|required');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateRoom();	
    	$this->session->set_flashdata('toast', 'Room successfully Updated.');
    }
    header('location:'.base_url('admin/room'));
	}

	public function updateRank(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('rank_type', 'Rank Type', 'trim|required|is_unique[tbl_rank.rank_type]');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateRank();	
    	$this->session->set_flashdata('toast', 'Rank successfully updated.');
    }

    header('location:'.base_url('admin/rank'));
	}

	public function updateSemester(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('semester_type', 'Semester Type', 'trim|required|is_unique[tbl_semester.semester_type]');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateSemester();	
    	$this->session->set_flashdata('toast', 'Semester successfully updated.');
    }

    header('location:'.base_url('admin/semester'));
	}

	public function updateUserType(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('user_type', 'User Type', 'trim|required|is_unique[tbl_user_type.user_type]');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateUserType();	
    	$this->session->set_flashdata('toast', 'User type successfully updated.');
    }

    header('location:'.base_url('admin/user_type'));
	}

	public function updateRoomType(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('room_type', 'Room Type', 'trim|required|is_unique[tbl_room_type.room_type]');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateRoomType();	
    	$this->session->set_flashdata('toast', 'Room type successfully updated.');
    }

    header('location:'.base_url('admin/room_type'));
	}

	public function updateSubject(){
		$this->load->library('form_validation');

    $this->form_validation->set_rules('subject_code', 'Subject Code', 'trim|required');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateSubject();	
    	$this->session->set_flashdata('toast', 'Subject successfully updated.');
    }

    header('location:'.base_url('admin/subject'));
	}

	public function updateFaculty(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('l_name', 'Last Name', 'trim|required');

    if ($this->form_validation->run() == FALSE){
    	$this->session->set_flashdata('toast', validation_errors());
    } else {
    	$this->main_model->updateFaculty();	
    	$this->session->set_flashdata('toast', 'Faculty successfully updated.');
    }

    header('location:'.base_url('admin/faculty_view/'.$_POST['faculty_id']));
	}

	// -------------------------------------- UPDATE ------------------------------------- //


}