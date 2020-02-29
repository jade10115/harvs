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
        <?=form_open('admin/addSchedule', 'id="frm_schedule_add"');?>
          <div class="row">
            <div class="form-group col-md-6">
              <label>College</label>
              <select class="selectpicker" title="Select College">
                <?php foreach ($colleges as $row) {?>
                <option value="0"><?=$row['college_name']?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label>Course</label>
              <select class="selectpicker" title="Select Course">
                <option value="0">asd</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label>Subject</label>
            <select class="selectpicker" title="Select">
              <option value="0">asd</option>
            </select>
          </div>
          <div class="form-group">
            <label>Employee</label>
            <select class="selectpicker" title="Select">
              <option value="0">asd</option>
            </select>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label>Building</label>
              <select class="selectpicker" title="Select">
                <option value="0">asd</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label>Room</label>
              <select class="selectpicker" title="Select">
                <option value="0">asd</option>
              </select>
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