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
	<!-- floating labels -->
	<script type="text/javascript" src="<?=base_url('assets/js/floating-labels.js')?>"></script>
	<!-- scripts -->
	<script type="text/javascript">
		$(document).ready(function(){
			base_url = '<?=base_url()?>';

			$('.formEdit').attr('disabled', true);

			$('.selectpicker').selectpicker();

			$('#btnEditFaculty').click(function(){
				if($(this).val()=='edit'){
					$(this).val('cancel');
					$(this).text('Cancel');
					$('.btnEdit').removeClass('invisible')
					$('#image_src').addClass('imgClick hand');
					$('.formEdit').attr('disabled', false);	
					$('.focus').select();
				} else {
					$(this).val('edit');
					$(this).text('Edit Faculty');
					$('.btnEdit').addClass('invisible')
					$('#image_src').removeClass('imgClick hand');
					$('.formEdit').attr('disabled', true);
				}
			});

			$('.sy').change(function(){
				$('.sy2').val(parseInt($(this).val())+1);
			});

			$(document).on('click', '.imgClick', function(){
				$('#imgFile').click();
			});

			$('#imgFile').change(function(){
				readURL(this);
			});

			$('#removePicture').click(function(){	
				$('.imgClick').attr('src', base_url+'assets/img/system/avatar.png');
			});

			function readURL(input){
				if(input.files[0].type=='image/jpeg'||input.files[0].type=='image/png'){
					if(input.files && input.files[0]){
						var reader = new FileReader();

						reader.onload = function(e){
							$('.imgClick').attr('src', e.target.result);
						}

						reader.readAsDataURL(input.files[0]);
					}	
				} else {
					alert('Invalid image format');
				}
			}

			$('.identification').on('input', function(){
				a = $('#f_name').val();
				b = $('#l_name').val();
				c = $('#birth_date').val();
				c = c.split('-');
				c = c[0]+c[1]+c[2];
				d = '';

				if(a==''&&b=='') {
					d = c;
				} else if(a==''&&c=='undefinedundefined') {
					d = b.charAt(0);
				} else if(b==''&&c=='undefinedundefined') {
					d = a.charAt(0);
				} else if(a==''){
					d = b.charAt(0)+c;
				} else if(b==''){
					d = a.charAt(0)+c;
				} else if(c=='undefinedundefined') {
					d = a.charAt(0)+b.charAt(0);
				} else {
					d = a.charAt(0)+b.charAt(0)+c;
				}
				
				$('#identification').val(d);
			});

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

			$('.assign').click(function(){
				$.alert({
					title: 'Confirmation',
					content: 'Are you sure do you want to assign this room?',
					type: 'blue',
					icon: 'fa fa-question-circle',
					draggable: true,
					autoClose: 'cancel|5000',
					backgroundDismiss: true,
					escapekey: true,
					buttons: {
						confirm: {
							text: 'Confirm',
							btnClass: 'btn-blue',
							keys: ['enter'],
							action: function(){
								window.location.replace(link);
							}
		 				},
						cancel: {}
					}
				});	
			});// $('.assign').click()

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
				$('#course_abbr').val(id[4]);
				populateDepartments(id[2], id[3]);
			}); // $('.updateCourse').click()

			$('.updateCollege').click(function(){
				id = this.id;
				id = id.split('//');
				$('#college_id').val(id[0]);
				$('#college_name').val(id[1]);
				$('#college_abbr').val(id[2]);
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
				$('.selectpicker').selectpicker('refresh')
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
				$('#room_description').val(id[2]);
			}); // $('.updateRoomType').click()

			$('.updateSubject').click(function(){
				id = this.id;
				id = id.split('//');
				$('#subject_id').val(id[0]);
				$('#subject_code').val(id[1]);
				$('#subject_description').val(id[2]);
				$('#subject_type').val(id[3]);
				$('#subject_unit').val(id[4]);
				$('#course_id').val(id[5]);
				$('.selectpicker').selectpicker('refresh')
			}); // $('.updateSubject').click()		

			$('.updateSY').click(function(){
				id = this.id;
				id = id.split('//');
				$('#sy_id').val(id[0]);
				sy = id[1].split('-');
				$('#sy_update').val(sy[0]);
				$('#sy2_update').val(sy[1]);
			}); // $('.updateUserType').click()	

			$('.college_id').change(function(){
				if($(this).val()==0){
					option = '<option value="0">-- select college first --</option>';
					$('.department_id').empty().append(option);
				} else {
					populateDepartments($(this).val());	
				}
			});

			$('.updateSchedule').click(function(){
				id = this.id;
				id = id.split('//');
				$('input[name="schedule_id"]').val(id[0]);
				$('select[name="sy_id"]').val(id[1]);
				$('select[name="semester_id"]').val(id[2]);
				$('select[name="faculty_id"]').val(id[3]);
				$('select[name="subject_id"]').val(id[4]);
				$('select[name="room_id"]').val(id[5]);
				$('select[name="day"]').val(id[6]);
				if(id[7].charAt(0)=='0'){
					id[7] = id[7].substring(1, id[7].length)
				}
				if(id[8].charAt(0)=='0'){
					id[8] = id[8].substring(1, id[8].length)
				}
				$('.time_start').val(id[7]);
				$('.time_end').val(id[8]);
				$('.selectpicker').selectpicker('refresh');
			}); // $('.updateSchedule').click()

			$('.modal').on('hidden.bs.modal', function (e) {
			  $('.selectpicker').selectpicker('deselectAll');
			  $('.selectpicker').selectpicker('val', '');
			  $('.selectpicker').selectpicker('refresh');
			})

			$(document).on('submit', '.frm_course_submit', function(event){
				if(this.id=='frm_course_add'){
					college_id = $('#college_id_add').val();
					department_id = $('#department_id_add').val();
				} else {
					college_id = $('#college_id').val();
					department_id = $('#department_id').val();
				}
				
				if(college_id==0){
					if(this.id=='frm_course_add'){
						alert('add');
						$('#college_id_add').focus();
					} else {
						alert('update');
						$('#college_id').focus();
					}

					event.preventDefault();
					return false;
				}
				
				if(department_id==0){
					if(this.id=='frm_course_add'){
						alert('add');
						$('#department_id_add').focus();
					} else {
						alert('update');
						$('#department_id').focus();
					}
					event.preventDefault();
					return false;
				}

				$('.selectpicker').selectpicker('refresh')

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


			// $('.time_start').on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
			//   $('.time_end').prop('disabled');
			// });


		}); // $(document).ready()
	</script>
</footer>
</html>