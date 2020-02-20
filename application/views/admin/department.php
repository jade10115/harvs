<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$title?>
          <a href="#" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#modal_department_add">Add Department</a>  
        </h5>
			  <div class="card-body">
          <table class="table table-striped table-hover table-sm">
            <thead>
              <tr>
                <th>College</th>
                <th>Department Name</th>
                <th>Date Added</th>
                <th>Date Updated</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($departments as $row) {?>
              <tr>
                <td><?=$row['college_name']?></td>
                <td><?=$row['department_name']?></td>
                <td><?=$row['department_added']?></td>
                <td><?=$row['department_modified']?></td>
                <td>
                  <div class="btn-group" role="group">
                    <a href="#" class="btn btn-sm btn-outline-success action-btn updateDepartment" id="<?=$row['department_id']?>//<?=$row['department_name']?>//<?=$row['college_id']?>" data-toggle="modal" data-target="#modal_department_update" data-toggle="tooltip" data-placement="top" title="Update Department">
                      <span class="fa fa-pencil"></span>
                    </a>
                    <a href="#" id="<?=base_url('admin/delete/department/'.$row['department_id'])?>" class="btn btn-sm btn-outline-danger action-btn delete" data-toggle="tooltip" data-placement="top" title="Delete Department">
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
<div class="modal fade" id="modal_department_add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Add Department</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/addDepartment', 'id="frm_department_add"');?>
          <div class="form-group">
            <label>College</label>
            <select class="custom-select" name="college_id">
              <?php foreach ($colleges as $row) {?>
              <option value="<?=$row['college_id']?>"><?=$row['college_name']?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Department Name</label>
            <input type="text" class="form-control focus" placeholder="Enter Department Name" name="department_name" required>
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_department_add">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Update -->
<div class="modal fade" id="modal_department_update" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Update Department</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/updateDepartment', 'id="frm_department_update"');?>
          <input type="hidden" name="department_id" id="department_id">
          <div class="form-group">
            <label>College</label>
            <select class="custom-select" name="college_id" id="college_id">
              <?php foreach ($colleges as $row) {?>
              <option value="<?=$row['college_id']?>"><?=$row['college_name']?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Department Name</label>
            <input type="text" class="form-control focus" placeholder="Enter Department Name" name="department_name" id="department_name" required>
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_department_update">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>