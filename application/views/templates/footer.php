</body>
<footer>
	<script type="text/javascript" src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap-select.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/feather.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/dashboard.js')?>"></script>
	<!-- DataTables -->
	<script type="text/javascript" src="<?=base_url('assets/js/jquery.dataTables.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/dataTables.bootstrap4.min.js')?>"></script>
	<!-- jQuery Confirm -->
	<script type="text/javascript" src="<?=base_url('assets/js/jquery-confirm.min.js')?>"></script>
	<!-- scripts -->
	<script type="text/javascript">
		$(document).ready(function(){
			base_url = '<?=base_url()?>';


			$('.modal').on('shown.bs.modal', function () {
			    $('.focus').focus();
			})

		  $('.alert').alert();
		  $('[data-toggle="tooltip"]').tooltip();
		  $('[data-toggle="modal"][title]').tooltip();
		  $('.selectpicker').selectpicker();

		  $('.modal').on('shown.bs.modal', function () {
			  $('.focus').trigger('focus');
			});

		  $('.table').dataTable({
				responsive: true,
				stateSave: true,
				pageLength: 10
			});

			$('.delete').click(function(){
				link = this.id
				$.alert({
					title: 'Confirmation',
					content: 'Are you sure do you want to delete?',
					type: 'red',
					icon: 'fa fa-question-circle',
					draggable: true,
					autoClose: 'cancel|5000',
					backgroundDismiss: true,
					escapekey: true,
					buttons: {
						confirm: {
							text: 'Confirm',
							btnClass: 'btn-red',
							keys: ['enter'],
							action: function(){
								window.location.replace(link);
							}
		 				},
						cancel: {}
					}
				});
			}); // $('.delete').click()

			$('.updateBuilding').click(function(){
				id = this.id;
				id = id.split('//');
				$('#building_id').val(id[0]);
				$('#building_name').val(id[1]);
				$('#no_of_rooms').val(id[2]);
				$('#no_of_floors').val(id[3]);
			}); // $('.updateBuilding').click()

			$('.updateCourse').click(function(){
				id = this.id;
				id = id.split('//');
				$('#course_id').val(id[0]);
				$('#course_name').val(id[1]);
				$('#college_id').val(id[2]);
				populateDepartments(id[2], id[3]);
				console.log($('#department_id').val());
			}); // $('.updateCourse').click()

			$('.updateCollege').click(function(){
				id = this.id;
				id = id.split('//');
				$('#college_id').val(id[0]);
				$('#college_name').val(id[1]);
			}); // $('.updateCollege').click()

			$('.updateDesignation').click(function(){
				id = this.id;
				id = id.split('//');
				$('#designation_id').val(id[0]);
				$('#designation_name').val(id[1]);
				$('#regular_unit').val(id[2]);
			}); // $('.updateDesignation').click()

			$('.updateDepartment').click(function(){
				id = this.id;
				id = id.split('//');
				$('#department_id').val(id[0]);
				$('#department_name').val(id[1]);
				$('#college_id').val(id[2]);
			}); // $('.updateDepartment').click()

			$('.updateRoom').click(function(){
				id = this.id;
				id = id.split('//');
				$('#room_id').val(id[0]);
			  $('#building_id').val(id[1]);			  
				$('#room_type_id').val(id[2]);
				$('#room_number').val(id[3]);
				$('#room_floor').val(id[4]);
			}); // $('.updateRoom').click()

			$('.updateInstructor').click(function(){
				id = this.id;
				id = id.split('//');
				$('#instructor_id').val(id[0]);
				$('#instructor_name').val(id[1]);
			}); // $('.updateInstructor').click()

			$('.updateRank').click(function(){
				id = this.id;
				id = id.split('//');
				$('#rank_id').val(id[0]);
				$('#rank_type').val(id[1]);
			}); // $('.updateRank').click()

			$('.updateSemester').click(function(){
				id = this.id;
				id = id.split('//');
				$('#semester_id').val(id[0]);
				$('#semester_type').val(id[1]);
			}); // $('.updateSemester').click()

			$('.updateUserType').click(function(){
				id = this.id;
				id = id.split('//');
				$('#user_type_id').val(id[0]);
				$('#user_type').val(id[1]);
			}); // $('.updateUserType').click()

			$('.updateRoomType').click(function(){
				id = this.id;
				id = id.split('//');
				$('#room_type_id').val(id[0]);
				$('#room_type').val(id[1]);
			}); // $('.updateRoomType').click()

			$('.updateSubject').click(function(){
				id = this.id;
				id = id.split('//');
				$('#subject_id').val(id[0]);
				$('#subject_code').val(id[1]);
				$('#subject_description').val(id[2]);
				$('#subject_type').val(id[3]);
				$('#subject_unit').val(id[4]);
			}); // $('.updateSubject').click()			

			$('.college_id').change(function(){
				if($(this).val()==0){
					option = '<option value="0">-- select college first --</option>';
					$('.department_id').empty().append(option);
				} else {
					populateDepartments($(this).val());	
				}
			});

			$(document).on('submit', '#frm_course_add', function(event){
				college_id = $('#college_id_add').val();
				department_id = $('#department_id_add').val();
				if(college_id==0||department_id==0){
					$('.alert-modal').removeClass('invisible');
					event.preventDefault();
					return false;
				} 
			})

			function populateDepartments(college_id, department_id){
				$.ajax({
					url: base_url+'admin/getDepartmentsJSON/'+college_id,
					success:function(result){
						$('.department_id').empty();
						result = $.parseJSON(result);
						if(result==0){
							option = '<option value="0">-- select college first --</option>';
							$('.department_id').append(option);
						} else {
							$.each(result, function(i,o){
								option = '<option value="'+o.department_id+'">'+o.department_name+'</option>';
								$('.department_id').append(option);
							});
							$('#department_id').val(department_id);
						}
					}
				});
			}

		}); // $(document).ready()
	</script>
</footer>
</html>