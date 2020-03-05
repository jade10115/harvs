<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$title?>
          <a href="#" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#modal_sy_add">Add School Year</a>  
        </h5>
			  <div class="card-body">
          <table class="table table-striped table-hover table-sm">
            <thead>
              <tr>
                <th>School Year</th>
                <th>Date Added</th>
                <th>Date Updated</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($sy as $row) {?>
              <tr>
                <td><?=$row['school_year']?></td>
                <td><?=$row['sy_added']?></td>
                <td><?=$row['sy_modified']?></td>
                <td>
                  <div class="btn-group" role="group">
                    <a href="#" class="btn btn-sm btn-outline-success action-btn updateSY" id="<?=$row['sy_id']?>//<?=$row['school_year']?>" data-toggle="modal" data-target="#modal_sy_update" data-toggle="tooltip" data-placement="top" title="Update School Year">
                      <span class="fa fa-pencil"></span>
                    </a>
                    <a href="#" id="<?=base_url('admin/delete/sy/'.$row['sy_id'])?>" class="btn btn-sm btn-outline-danger action-btn delete" data-toggle="tooltip" data-placement="top" title="Delete School Year">
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
<div class="modal fade" id="modal_sy_add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Add School Year</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/addSY', 'id="frm_sy_add"');?>
          <div class="form-group">
            <label>School Year</label>
            <div class="row">
              <div class="col-md-6">
                <select class="custom-select sy" name="sy_from" id="sy" required>
                  <?php for ($i=date('Y')-5; $i<date('Y')+5; $i++) { ?> 
                  <option value="<?=$i?>" <?=($i==date('Y'))?'selected':'';?>><?=$i?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control sy2" name="sy_to" id="sy2" readonly required value="<?=date('Y')+1?>">
              </div>
            </div>
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_sy_add">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Update -->
<div class="modal fade" id="modal_sy_update" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Update School Year</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/updateSY', 'id="frm_sy_update"');?>
          <input type="hidden" name="sy_id" id="sy_id">
          <div class="form-group">
            <label>School Year</label>
            <div class="row">
              <div class="col-md-6">
                <select class="custom-select sy" name="sy_from" id="sy_update" required>
                  <?php for ($i=date('Y')-5; $i<date('Y')+5; $i++) { ?> 
                  <option value="<?=$i?>" <?=($i==date('Y'))?'selected':'';?>><?=$i?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control sy2" name="sy_to" id="sy2_update" readonly required value="<?=date('Y')+1?>">
              </div>
            </div>  
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_sy_update">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>