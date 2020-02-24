<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Main_model extends CI_Model{

	// ------------------------------------------------------------------------------------------------------ //

	// -------------------------------------- MISC FUNCTIONS ------------------------------------------------ //

	

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

	public function addFaculty(){
		$this->db->insert('tbl_faculty', $_POST);
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

	public function addUserType(){
		$this->db->insert('tbl_user_type', $_POST);
	}

	public function addRoomType(){
		$this->db->insert('tbl_room_type', $_POST);
	}

	public function addSubject(){
		$this->db->insert('tbl_subject', $_POST);
	}

	// -------------------------------------- ADD FUNCTIONS ------------------------------------------------- //

	// ------------------------------------------------------------------------------------------------------ //

	// -------------------------------------- GET FUNCTIONS ------------------------------------------------- //

	public function getBuildings(){
		return $this->db->get('tbl_building')->result_array();
	}

	public function getRooms(){
		return $this->db->join('tbl_building', 'tbl_building.building_id = tbl_room.building_id')->join('tbl_room_type', 'tbl_room_type.room_type_id = tbl_room.room_type_id')->get('tbl_room')->result_array();
	}

	public function getFaculties(){
		// return $this->db->select('tbl_instructor.instructor_id, tbl_instructor.instructor_name, tbl_instructor.instructor_added, tbl_instructor.instructor_updated, count(tbl_subject.subject_id)')->from('tbl_instructor')->join('tbl_subject', 'tbl_instructor.instructor_id = tbl_subject.instructor_id', 'left')->group_by('tbl_instructor.instructor_id')->get()->result_array();	
		// return $this->db->get('tbl_faculty')->result_array();
		return $this->db->join('tbl_department', 'tbl_department.department_id=tbl_faculty.department_id')->join('tbl_rank', 'tbl_rank.rank_id=tbl_faculty.rank_id')->join('tbl_designation', 'tbl_designation.designation_id=tbl_faculty.designation_id')->get('tbl_faculty')->result_array();
	}

	public function getSubjects(){
		return $this->db->get('tbl_subject')->result_array();
	}

	public function getColleges(){
		return $this->db->get('tbl_college')->result_array();
	}

	public function getDesignations(){
		return $this->db->get('tbl_designation')->result_array();
	}

	public function getCourses(){
		return $this->db->join('tbl_college', 'tbl_college.college_id = tbl_course.college_id')->join('tbl_department', 'tbl_department.department_id = tbl_course.department_id')->get('tbl_course')->result_array();
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
	
	public function getuserTypes(){
		return $this->db->get('tbl_user_type')->result_array();
	}

	// -------------------------------------- GET FUNCTIONS ------------------------------------------------- //

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
		$this->db->where('college_id', $_POST['college_id'])->update('tbl_college', array('college_name' => $_POST['college_name']));
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
		$this->db->where('room_type_id', $_POST['room_type_id'])->update('tbl_room_type', array('room_type' => $_POST['room_type']));
	}

	public function updateCourse(){
		$data = array(
			'college_id' => $_POST['college_id'],
			'course_name' => $_POST['course_name']
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

	// public function updateInstructor(){
	// 	$this->db->where('instructor_id', $_POST['instructor_id'])->update('tbl_instructor', array('instructor_name' => $_POST['instructor_name']));
	// }

	// -------------------------------------- UPDATE FUNCTIONS ---------------------------------------------- // 



	
}