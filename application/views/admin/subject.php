<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$title?>
          <a href="#" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#modal_subject_add">Add Subject</a>  
        </h5>
			  <div class="card-body">
          <table class="table table-striped table-hover table-sm">
            <thead>
              <tr>
                <th>Building</th>
                <th>Subject Code</th>
                <th>Subject Description</th>
                <th>Instructor</th>
                <th>Year Level</th>
                <th>Date Added</th>
                <th>Date Updated</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($subjects as $row) {?>
              <tr>
                <td><?=$row['building_name']?></td>
                <td><?=$row['subject_code']?></td>
                <td><?=$row['subject_description']?></td>
                <td><?=$row['subject_instructor']?></td>
                <td><?=$row['year_level']?></td>
                <td><?=$row['subject_added']?></td>
                <td><?=$row['subject_updated']?></td>
                <td>
                  <div class="btn-group" role="group">
                    <a href="#" class="btn btn-sm btn-outline-info action-btn" data-toggle="tooltip" data-placement="top" title="View Subject">
                      <span class="fa fa-eye"></span>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-success action-btn updateSubject" id="<?=$row['subject_id']?>//<?=$row['building_id']?>//<?=$row['subject_code']?>//<?=$row['subject_description']?>//<?=$row['subject_instructor']?>" data-toggle="modal" data-target="#modal_subject_update" data-toggle="tooltip" data-placement="top" title="Update Subject">
                      <span class="fa fa-pencil"></span>
                    </a>
                    <a href="#" id="<?=base_url('admin/delete/subject/'.$row['subject_id'])?>" class="btn btn-sm btn-outline-danger action-btn delete" data-toggle="tooltip" data-placement="top" title="Delete Subject">
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
<div class="modal fade" id="modal_subject_add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Add Subjects</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/addSubject', 'id="frm_subject_add"');?>
          <div class="row">
            <div class="form-group col-md-12">
              <label>Subject Code</label>
              <input type="text" class="form-control" placeholder="Enter Subject Code" name="subject_code" required>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label>Subject Description</label>
              <textarea class="form-control" name="subject_description"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4">
              <label>Subject Type</label>
              <input type="number" class="form-control" value="1" name="sections" min="1" required>
            </div>
            <div class="form-group col-md-4">
              <label>Unit</label>
              <input type="number" class="form-control" value="1" name="sections" min="1" max="5" required>
            </div>
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_subject_add">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Update -->