<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Main_model extends CI_Model{

	// ------------------------------------------------------------------------------------------------------ //

	// -------------------------------------- MISC FUNCTIONS ------------------------------------------------ //

	public function getLastId($id, $table){
		$last_id = $this->db->order_by($id, 'DESC')->limit(1)->get($table)->result_array();
		return $last_id[0][$id];
	}

	public function checkDuplicate($where, $data, $table){
		return $this->db->where($where, $data)->count_all_results($table);
	}

	// -------------------------------------- MISC FUNCTIONS ------------------------------------------------ //

	// ------------------------------------------------------------------------------------------------------ //

	// -------------------------------------- ADD FUNCTIONS ------------------------------------------------- //

	public function addBuilding(){
		$this->db->insert('tbl_building', $_POST);
	}

	public function addCollege(){
		$this->db->insert('tbl_college', $_POST);
	}

	public function addCourse(){
		$this->db->insert('tbl_course', $_POST);
	}

	public function addRoom(){
		$this->db->insert('tbl_room', $_POST);
	}

	public function addFaculty($img){
		$faculty = array(
			'identification' => $_POST['identification'],
			'f_name' => $_POST['f_name'],
			'l_name' => $_POST['l_name'],
			'm_name' => $_POST['m_name'],
			'suffix_name' => $_POST['suffix_name'],
			'ext_name' => $_POST['ext_name'],
			'contact_no' => $_POST['contact_no'],
			'email' => $_POST['email'],
			'birth_date' => $_POST['birth_date'],
			'address' => $_POST['address'],	
			'department_id' => $_POST['department_id'],
			'rank_id' => $_POST['rank_id'],
			'designation_id' => $_POST['designation_id'],
			'image_src' => $img
		);
		$this->db->insert('tbl_faculty', $faculty);

		$faculty_id = $this->getLastId('faculty_id', 'tbl_faculty');

		$user = array(
			'username' => $_POST['username'],
			'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
			'faculty_id' => $faculty_id,
			'user_type_id' => $_POST['user_type_id'],
		);

		$this->db->insert('tbl_user', $user);
	}

	public function addDesignation(){
		$this->db->insert('tbl_designation', $_POST);
	}

	public function addDepartment(){
		$this->db->insert('tbl_department', $_POST);
	}

	public function addRank(){
		$this->db->insert('tbl_rank', $_POST);
	}

	public function addSemester(){
		$this->db->insert('tbl_semester', $_POST);
	}

	public function addSchedule(){
		$this->db->insert('tbl_schedule', $_POST);
		return $this->getFaculty($_POST['faculty_id']);
	}

	public function addSY(){
		$data = array(
			'school_year' => $_POST['sy_from'].'-'.$_POST['sy_to']
		);
		$this->db->insert('tbl_sy', $data);
	}

	public function addUserType(){
		$this->db->insert('tbl_user_type', $_POST);
	}

	public function addRoomType(){
		$this->db->insert('tbl_room_type', $_POST);
	}

	public function addSubject(){
		$this->db->insert('tbl_subject', $_POST);
	}

	public function addLog($action){
		$data = array(
			'log_name' => $action,
			'user_id' => 1
		);
		$this->db->insert('tbl_logs', $data);
	}

	// -------------------------------------- ADD FUNCTIONS ------------------------------------------------- //

	// ------------------------------------------------------------------------------------------------------ //

	// -------------------------------------- GET FUNCTIONS ------------------------------------------------- //

	public function checkTimeConflict($time){
		return $this->db->where('time_start<=',$time)
										->where('time_end>=',$time)
										->where('day', $_POST['day'])
										->where('room_id', $_POST['room_id'])
										->where('sy_id', $_POST['sy_id'])
										->where('semester_id', $_POST['semester_id'])
										->get('tbl_schedule')->result_array();
	}

	public function getBuildings(){
		return $this->db->get('tbl_building')->result_array();
	}

	public function getRooms(){
		return $this->db->join('tbl_building', 'tbl_building.building_id = tbl_room.building_id')
										->join('tbl_room_type', 'tbl_room_type.room_type_id = tbl_room.room_type_id')
										->get('tbl_room')->result_array();
	}

	public function getFaculties(){
		// return $this->db->select('tbl_instructor.instructor_id, tbl_instructor.instructor_name, tbl_instructor.instructor_added, tbl_instructor.instructor_updated, count(tbl_subject.subject_id)')->from('tbl_instructor')->join('tbl_subject', 'tbl_instructor.instructor_id = tbl_subject.instructor_id', 'left')->group_by('tbl_instructor.instructor_id')->get()->result_array();	
		// return $this->db->get('tbl_faculty')->result_array();
		return $this->db->join('tbl_department', 'tbl_department.department_id=tbl_faculty.department_id')
										->join('tbl_rank', 'tbl_rank.rank_id=tbl_faculty.rank_id')
										->join('tbl_designation', 'tbl_designation.designation_id=tbl_faculty.designation_id')
										->get('tbl_faculty')->result_array();
	}

	public function getFaculty($id){
		return $this->db->join('tbl_department', 'tbl_department.department_id=tbl_faculty.department_id')
										->join('tbl_rank', 'tbl_rank.rank_id=tbl_faculty.rank_id')
										->join('tbl_designation', 'tbl_designation.designation_id=tbl_faculty.designation_id')
										->where('tbl_faculty.faculty_id', $id)
										->get('tbl_faculty')->result_array();
	}

	public function getSubjects(){
		return $this->db->join('tbl_course', 'tbl_course.course_id=tbl_subject.course_id')->get('tbl_subject')->result_array();
	}

	public function getColleges(){
		return $this->db->get('tbl_college')->result_array();
	}

	public function getDesignations(){
		return $this->db->get('tbl_designation')->result_array();
	}

	public function getCourses(){
		return $this->db->join('tbl_college', 'tbl_college.college_id = tbl_course.college_id')
										->join('tbl_department', 'tbl_department.department_id = tbl_course.department_id')
										->get('tbl_course')->result_array();
	}

	public function getDepartments(){
		return $this->db->join('tbl_college', 'tbl_college.college_id = tbl_department.college_id')->get('tbl_department')->result_array();
	}

	public function getDepartment($id){
		return $this->db->where('college_id', $id)->get('tbl_department')->result_array();
	}

	public function getRoomTypes(){
		return $this->db->get('tbl_room_type')->result_array();
	}

	public function getRanks(){
		return $this->db->get('tbl_rank')->result_array();
	}

	public function getSemesters(){
		return $this->db->get('tbl_semester')->result_array();
	}

	public function getSchoolYear(){
		return $this->db->get('tbl_sy')->result_array();
	}

	public function getSchedules(){
		return $this->db->join('tbl_room', 'tbl_room.room_id=tbl_schedule.room_id')
										->join('tbl_building', 'tbl_building.building_id=tbl_room.building_id')
										->join('tbl_subject', 'tbl_subject.subject_id=tbl_schedule.subject_id')
										->join('tbl_course', 'tbl_course.course_id=tbl_subject.course_id')
										->join('tbl_faculty', 'tbl_faculty.faculty_id=tbl_schedule.faculty_id')
										->join('tbl_semester', 'tbl_semester.semester_id=tbl_schedule.semester_id')
										->join('tbl_sy', 'tbl_sy.sy_id=tbl_schedule.sy_id')
										->get('tbl_schedule')->result_array();
	}
	
	public function getuserTypes(){
		return $this->db->get('tbl_user_type')->result_array();
	}

	public function getLogs(){
		return $this->db->join('tbl_user', 'tbl_logs.user_id = tbl_user.user_id')
										->join('tbl_faculty', 'tbl_user.faculty_id = tbl_faculty.faculty_id')
										->join('tbl_user_type', 'tbl_user.user_type_id = tbl_user_type.user_type_id')
										->join('tbl_department', 'tbl_faculty.department_id = tbl_department.department_id')
										->get('tbl_logs')->result_array();
	}

	public function getDeletedDataName($name, $id) {
		switch ($name) {
			case 'faculty':
				$columnName = 'faculty_id';
				break;
			case 'rank':
				$columnName = 'rank_type';
				break;
			case 'room':
				$columnName = 'room_number';
				break;
			case 'room_type':
				$columnName = 'room_type';
				break;
			case 'semester':
				$columnName = 'semester_type';
				break;
			case 'subject':
				$columnName = 'subject_code';
				break;
			case 'sy':
				$columnName = 'school_year';
				break;
			case 'user':
				$columnName = 'user_id';
				break;
			case 'user_type':
				$columnName = 'user_type';
				break;
			default:
				$columnName = $name.'_name';
				break;
		}
		return $this->db->where($name.'_id', $id)->get('tbl_'.$name)->row_array()[$columnName];
	}

	// -------------------------------------- GET FUNCTIONS ------------------------------------------------- //

	// ------------------------------------------------------------------------------------------------------ //

	// -------------------------------------- LOGIN AUTHENTICATION ------------------------------------------ // 

	public function userAuthentication(){
		$username = $this->input->post('username');
    	$password = $this->input->post('password');//sha1($this->input->post('password'));
    	$res = $this->db->join('tbl_user', 'tbl_user_type.user_type_id = tbl_user.user_type_id')->
						join('tbl_faculty', 'tbl_user.faculty_id = tbl_faculty.faculty_id')->
						join('tbl_department', 'tbl_faculty.department_id = tbl_department.department_id')->
						join('tbl_designation', 'tbl_faculty.designation_id = tbl_designation.designation_id')->
						where('tbl_user.username', $username)->
						get('tbl_user_type')->result_array();
		if (count($res) > 0) {
			if (password_verify($password, $res[0]['password'])) {
				$this->session->set_userdata('user', $res[0]);
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	// -------------------------------------- LOGIN AUTHENTICATION ------------------------------------------ //

	// ------------------------------------------------------------------------------------------------------ //

	// -------------------------------------- DELETE FUNCTIONS ---------------------------------------------- // 

	public function delete($name, $id){
		$this->db->where($name.'_id', $id)->delete('tbl_'.$name);
	}
	
	// -------------------------------------- DELETE FUNCTIONS ---------------------------------------------- //

	// ------------------------------------------------------------------------------------------------------ //

	// -------------------------------------- UPDATE FUNCTIONS ---------------------------------------------- // 

	public function updateBuilding(){
		$data = array(
			'building_name' => $_POST['building_name'],
			'no_of_rooms' => $_POST['no_of_rooms'],
			'no_of_floors' => $_POST['no_of_floors']
		);
		$this->db->where('building_id', $_POST['building_id'])->update('tbl_building', $data);
	}

	public function updateCollege(){
		$data = array(
			'college_name' => $_POST['college_name'],
			'college_abbr' => $_POST['college_abbr']
		);
		$this->db->where('college_id', $_POST['college_id'])->update('tbl_college', $data);
	}

	public function updateRank(){
		$this->db->where('rank_id', $_POST['rank_id'])->update('tbl_rank', array('rank_type' => $_POST['rank_type']));
	}

	public function updateSemester(){
		$this->db->where('semester_id', $_POST['semester_id'])->update('tbl_semester', array('semester_type' => $_POST['semester_type']));
	}

	public function updateUserType(){
		$this->db->where('user_type_id', $_POST['user_type_id'])->update('tbl_user_type', array('user_type' => $_POST['user_type']));
	}

	public function updateRoomType(){
		$data =  array(
			'room_type' => $_POST['room_type'],
			'room_description' => $_POST['room_description']
		);
		$this->db->where('room_type_id', $_POST['room_type_id'])->update('tbl_room_type', $data);
	}

	public function updateCourse(){
		$data = array(
			'college_id' => $_POST['college_id'],
			'course_name' => $_POST['course_name'],
			'course_abbr' => $_POST['course_abbr']
		);

		$this->db->where('course_id', $_POST['course_id'])->update('tbl_course', $data);
	}

	public function updateDesignation(){
		$data = array(
			'designation_name' => $_POST['designation_name'],
			'regular_unit' => $_POST['regular_unit']
		);

		$this->db->where('designation_id', $_POST['designation_id'])->update('tbl_designation', $data);
	}

	public function updateRoom(){
		$data = array(
			'building_id' => $_POST['building_id'],
			'room_type_id' => $_POST['room_type_id'],
			'room_number' => $_POST['room_number'],
			'room_floor' => $_POST['room_floor']
		);
		$this->db->where('room_id', $_POST['room_id'])->update('tbl_room', $data);
	}

	public function updateDepartment(){
		$data = array(
			'college_id' => $_POST['college_id'],
			'department_name' => $_POST['department_name']
		);
		$this->db->where('department_id', $_POST['department_id'])->update('tbl_department', $data);
	}

	public function updateSubject(){
		$data = array(
			'subject_code' => $_POST['subject_code'],
			'subject_description' => $_POST['subject_description'],
			'subject_type' => $_POST['subject_type'],
			'subject_unit' => $_POST['subject_unit']
		);
		$this->db->where('subject_id', $_POST['subject_id'])->update('tbl_subject', $data);
	}

	public function updateFaculty(){
		$data = array(
			'f_name' => $_POST['f_name'],
			'l_name' => $_POST['l_name'],
			'm_name' => $_POST['m_name'],
			'suffix_name' => $_POST['suffix_name'],
			'ext_name' => $_POST['ext_name'],
			'contact_no' => $_POST['contact_no'],
			'email' => $_POST['email'],
			'birth_date' => $_POST['birth_date'],
			'address' => $_POST['address'],	
			'department_id' => $_POST['department_id'],
			'rank_id' => $_POST['rank_id'],
			'designation_id' => $_POST['designation_id']
		);
		$this->db->where('faculty_id', $_POST['faculty_id'])->update('tbl_faculty', $data);
	}

	// -------------------------------------- UPDATE FUNCTIONS ---------------------------------------------- // 



	
}