<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$title?>
          <a href="#" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#modal_course_add">Add Course</a>  
        </h5>
			  <div class="card-body">
          <table class="table table-striped table-hover table-sm">
            <thead>
              <tr>
                <th>College</th>
                <th>Department</th>
                <th>Course Name</th>
                <th>Date Added</th>
                <th>Date Updated</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($courses as $row) {?>
              <tr>
                <td><?=$row['college_name']?></td>
                <td><?=$row['department_name']?></td>
                <td><?=$row['course_name']?></td>
                <td><?=$row['course_added']?></td>
                <td><?=$row['course_modified']?></td>
                <td>
                  <div class="btn-group" role="group">
                    <a href="#" class="btn btn-sm btn-outline-success action-btn updateCourse" id="<?=$row['course_id']?>//<?=$row['course_name']?>//<?=$row['college_id']?>//<?=$row['department_id']?>" data-toggle="modal" data-target="#modal_course_update" data-toggle="tooltip" data-placement="top" title="Update Course">
                      <span class="fa fa-pencil"></span>
                    </a>
                    <a href="#" id="<?=base_url('admin/delete/course/'.$row['course_id'])?>" class="btn btn-sm btn-outline-danger action-btn delete" data-toggle="tooltip" data-placement="top" title="Delete Course">
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

<!-- Modal Add -->
<div class="modal fade" id="modal_course_add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Add Course</h6>
        <div class="alert alert-danger alert-modal invisible" role="alert">
          Please complete the form.
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/addCourse', 'id="frm_course_add"');?>
          <div class="form-group">
            <label>College</label>
            <select class="custom-select college_id" name="college_id" id="college_id_add">
              <option value="0">-- select college --</option>
              <?php foreach ($colleges as $row) {?>
                <option value="<?=$row['college_id']?>"><?=$row['college_name']?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Department</label>
            <select class="custom-select department_id" name="department_id" id="department_id_add">
              <option value="0">-- select college first --</option>
            </select>
          </div>
          <div class="form-group">
            <label>Course Name</label>
            <input type="text" class="form-control focus" placeholder="Enter Course Name" name="course_name" required>
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_course_add">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Update -->
<div class="modal fade" id="modal_course_update" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Update Course</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/updateCourse', 'id="frm_course_update"');?>
          <input type="hidden" name="course_id" id="course_id">
          <div class="form-group">
            <label>College</label>
            <select class="custom-select college_id" name="college_id" id="college_id">
              <option value="0">-- select college --</option>
              <?php foreach ($colleges as $row) {?>
                <option value="<?=$row['college_id']?>"><?=$row['college_name']?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Department</label>
            <select class="custom-select department_id" name="department_id" id="department_id">
              <option value="0">-- select college first --</option>
            </select>
          </div>
          <div class="form-group">
            <label>Course Name</label>
            <input type="text" class="form-control focus" placeholder="Enter Course Name" name="course_name" id="course_name" required>
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_course_update">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>