<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$title?>
          <a href="#" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#modal_college_add">Add College</a>  
        </h5>
			  <div class="card-body">
          <table class="table table-striped table-hover table-sm">
            <thead>
              <tr>
                <th>College Name</th>
                <th>Abbreviation</th>
                <th>Date Added</th>
                <th>Date Updated</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($colleges as $row) {?>
              <tr>
                <td><?=$row['college_name']?></td>
                <td><?=$row['college_abbr']?></td>
                <td><?=$row['college_added']?></td>
                <td><?=$row['college_modified']?></td>
                <td>
                  <div class="btn-group" role="group">
                    <a href="#" class="btn btn-sm btn-outline-success action-btn updateCollege" id="<?=$row['college_id']?>//<?=$row['college_name']?>//<?=$row['college_abbr']?>" data-toggle="modal" data-target="#modal_college_update" data-toggle="tooltip" data-placement="top" title="Update College">
                      <span class="fa fa-pencil"></span>
                    </a>
                    <a href="#" id="<?=base_url('admin/delete/college/'.$row['college_id'])?>" class="btn btn-sm btn-outline-danger action-btn delete" data-toggle="tooltip" data-placement="top" title="Delete College">
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
<div class="modal fade" id="modal_college_add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Add College</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/addCollege', 'id="frm_college_add"');?>
          <div class="form-group">
            <label>College Name</label>
            <input type="text" class="form-control focus" placeholder="Enter College Name" name="college_name" required>
          </div>
          <div class="form-group">
            <label>Abbreviation</label>
            <input type="text" class="form-control" placeholder="Enter College Abbreviation" name="college_abbr" required>
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_college_add">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Update -->
<div class="modal fade" id="modal_college_update" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Update College</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/updateCollege', 'id="frm_college_update"');?>
          <input type="hidden" name="college_id" id="college_id">
          <div class="form-group">
            <label>College Name</label>
            <input type="text" class="form-control focus" placeholder="Enter College Name" name="college_name" id="college_name" required>
          </div>
          <div class="form-group">
            <label>Abbreviation</label>
            <input type="text" class="form-control" placeholder="Enter College Abbreviation" name="college_abbr" id="college_abbr" required>
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_college_update">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>