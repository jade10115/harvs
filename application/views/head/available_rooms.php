<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side-head');?>

    

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$building[0]['building_name'];?> 
          <a href="<?=base_url('head/schedule')?>" class="btn btn-outline-dark btn-sm">Back</a>  
        </h5>
			  <div class="card-body">
          <?=form_open('head/addSchedule/faculty_schedule/'.$_SESSION['available_rooms']['faculty_id'], 'id="frm_schedule_available"');?>
            <input type="hidden" name="room_id" value="">
            <input type="hidden" name="subject_id" value="<?=$_SESSION['available_rooms']['subject_id']?>">
            <input type="hidden" name="faculty_id" value="<?=$_SESSION['available_rooms']['faculty_id']?>">
            <input type="hidden" name="day" value="<?=$_SESSION['available_rooms']['day']?>">
            <input type="hidden" name="time_start" value="<?=$_SESSION['available_rooms']['time_start']?>">
            <input type="hidden" name="time_end" value="<?=$_SESSION['available_rooms']['time_end']?>">
            <input type="hidden" name="sy_id" value="<?=$_SESSION['available_rooms']['sy_id']?>">
            <input type="hidden" name="semester_id" value="<?=$_SESSION['available_rooms']['semester_id']?>">
          <?=form_close();?>
          <p><strong>Employee Name:</strong> <?=$faculty[0]['f_name']?> <?=$faculty[0]['m_name']?> <?=$faculty[0]['l_name']?></p>
          <p><strong>Scheduled Time:</strong> <?=date("g:i A", strtotime($_SESSION['available_rooms']['time_start']))?> - <?=date("g:i A", strtotime($_SESSION['available_rooms']['time_end']))?></p>
          <p><strong>Scheduled Day:</strong> <?=$_SESSION['available_rooms']['day']?></p>
          <p><strong>Room Not Available:</strong> <?=$room[0]['room_type']?> <?=$room[0]['room_number']?></p>
          <table class="table table-striped table-hover table-sm">
            <thead>
              <tr>
                <th>Room</th>
                <th>Room Type</th>
                <th>Floor Number</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($available_rooms as $row) {?>
              <tr>
                <td><?=$row['room_number']?></td>
                <td><?=$row['room_type']?></td>
                <td><?=$row['room_floor']?></td>
                <td width="10%">
                  <div class="btn-group" role="group">
                    <a href="#" id="<?=$row['room_id']?>" class="btn btn-sm btn-outline-primary action-btn assign" data-toggle="tooltip" data-placement="top" title="Assign to Room">
                      <span class="fa fa-calendar-check-o"></span>
                    </a>
                  </div>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
			  </div>
			</div>
   </main>
  </div>
</div>