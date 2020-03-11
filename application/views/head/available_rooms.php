<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side-head');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$building[0]['building_name'];?>
          <a href="#" class="btn btn-outline-dark btn-sm">Back</a>  
        </h5>
			  <div class="card-body">
          <table class="table table-striped table-hover table-sm">
            <thead>
              <tr>
                <th>Room</th>
                <th>Course</th>
                <th>Subject</th>
                <th>Employee</th>
                <th>Time</th>
                <th>School Year / Semester</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($schedules as $row) {?>
              <tr>
                <td><?=$row['room_number']?></td>
                <td><?=$row['course_abbr']?></td>
                <td><?=$row['subject_code']?></td>
                <td><?=$row['l_name']?> <?=$row['suffix_name']?>, <?=$row['f_name']?> <?=$row['m_name']?></td>
                <td><?=date('D', strtotime($row['day']))?> <?=date("g:i A", strtotime($row['time_start']))?> - <?=date("g:i A", strtotime($row['time_end']))?></td>
                <td><?=$row['school_year']?> <?=$row['semester_type']?></td>
                <td>
                  <div class="btn-group" role="group">
                    <a href="#" class="btn btn-sm btn-outline-success action-btn updateSchedule" id="<?=$row['schedule_id']?>//<?=$row['sy_id']?>//<?=$row['semester_id']?>//<?=$row['faculty_id']?>//<?=$row['subject_id']?>//<?=$row['room_id']?>//<?=$row['day']?>//<?=$row['time_start']?>//<?=$row['time_end']?>" data-toggle="modal" data-target="#modal_schedule_update" data-toggle="tooltip" data-placement="top" title="Update Schedule">
                      <span class="fa fa-pencil"></span>
                    </a>
                    <a href="#" id="<?=base_url('head/delete/schedule/'.$row['schedule_id'])?>" class="btn btn-sm btn-outline-danger action-btn delete" data-toggle="tooltip" data-placement="top" title="Delete Schedule">
                      <span class="fa fa-trash"></span>
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