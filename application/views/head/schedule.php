<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side-head');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$title?>
          <a href="#" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#modal_schedule_add">Add Schedule</a>  
        </h5>
			  <div class="card-body">
          <!-- body -->
          body
			  </div>
			</div>
   </main>
  </div>
</div>

<!-- Modal Add -->
<div class="modal fade" id="modal_schedule_add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Add Schedule</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('head/addSchedule', 'id="frm_schedule_add"');?>
          <div class="row">
            <div class="form-group col-md-6">
              <label>School Year</label>
              <select class="selectpicker" title="Select School Year" data-width="100%" name="sy_id" required>
                <?php foreach ($sy as $row) {?>
                <option value="<?=$row['sy_id']?>"><?=$row['school_year']?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label>Semester</label>
              <select class="selectpicker" title="Select Semester" data-width="100%" name="semester_id" required>
                <?php foreach ($semesters as $row) {?>
                <option value="<?=$row['semester_id']?>"><?=$row['semester_type']?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Employee</label>
                <select class="selectpicker" title="Select Employee" data-width="100%" data-live-search="true" name="faculty_id" required>
                  <?php foreach ($faculties as $row) {?>
                  <option value="<?=$row['faculty_id']?>" data-subtext="<?=$row['department_name']?> Department" data-tokens="<?=$row['l_name']?>,<?=$row['f_name']?>,<?=$row['m_name']?>,<?=$row['department_name']?>"><?=$row['l_name']?>, <?=$row['f_name']?> <?=$row['m_name']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Subject</label>
                <select class="selectpicker" title="Select Subject" data-width="100%" data-live-search="true" name="subject_id" required>
                  <?php foreach ($subjects as $row) {?>
                  <option value="<?=$row['subject_id']?>" data-subtext="<?=$row['subject_description']?>" data-tokens="<?=$row['subject_code']?>,<?=$row['subject_description']?>,<?=$row['subject_type']?>"><?=$row['subject_code']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Room</label>
                <select class="selectpicker" title="Select Room" data-width="100%" data-live-search="true" name="room_id" required>
                  <?php foreach ($rooms as $row) {?>
                  <?php 
                    $acronym = "";
                    $words = explode(" ", $row['building_name']);
                    foreach ($words as $w) {
                      $acronym .= $w[0];
                    }
                   ?>
                  <option value="<?=$row['room_id']?>" data-subtext="<?=$row['building_name']?>" data-tokens="Room <?=$row['room_number']?>,<?=$row['building_name']?>,<?=$acronym?>">Room <?=$row['room_number']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Time Start</label>
                <select class="selectpicker" title="Select Time Start" data-width="100%" data-live-search="true" name="time_start" required>
                  <optgroup label="Morning Time">
                    <?php for ($i=7; $i <= 12; $i++) { ?>
                      <?php $t=7;?>
                        <?php if($i!=12){ ?>
                        <option value="<?=$t?>:00:00"><?=$i?>:00 PM</option>
                        <option value="<?=$t?>:30:00"><?=$i?>:30 PM</option>
                        <?php } else { ?>
                        <option value="<?=$t?>:00:00"><?=$i?>:00 NN</option>
                        <?php } ?>
                      <?php $t++;?>
                    <?php } ?>
                  </optgroup>

                  <optgroup label="Afternoon Time">
                    <?php for ($i=1; $i <= 8; $i++) { ?>
                      <?php $t=13;?>
                      <option value="<?=$t?>:00:00"><?=$i?>:00 PM</option>
                      <option value="<?=$t?>:30:00"><?=$i?>:30 PM</option>
                      <?php $t++;?>
                    <?php } ?>
                  </optgroup>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Time End</label>
                <select class="selectpicker" title="Select Room" data-width="100%" data-live-search="true" name="time_end" required>
                  <optgroup label="Morning Time">
                    <?php for ($i=7; $i <= 12; $i++) { ?>
                      <?php $t=7;?>
                        <?php if($i!=12){ ?>
                        <option value="<?=$t?>:00:00"><?=$i?>:00 PM</option>
                        <option value="<?=$t?>:30:00"><?=$i?>:30 PM</option>
                        <?php } else { ?>
                        <option value="<?=$t?>:00:00"><?=$i?>:00 NN</option>
                        <?php } ?>
                      <?php $t++;?>
                    <?php } ?>
                  </optgroup>

                  <optgroup label="Afternoon Time">
                    <?php for ($i=1; $i <= 8; $i++) { ?>
                      <?php $t=13;?>
                      <option value="<?=$t?>:00:00"><?=$i?>:00 PM</option>
                      <option value="<?=$t?>:30:00"><?=$i?>:30 PM</option>
                      <?php $t++;?>
                    <?php } ?>
                  </optgroup>
                </select>
              </div>
            </div>
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_schedule_add">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>