<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$title?>
          <a href="#" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#modal_building_add">Add Building</a>  
        </h5>
			  <div class="card-body">
          <table class="table table-striped table-hover table-sm">
            <thead>
              <tr>
                <th>Building Name</th>
                <th>No. of Rooms</th>
                <th>No. of Floors</th>
                <th>Date Added</th>
                <th>Date Updated</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($buildings as $row) {?>
              <tr>
                <td><?=$row['building_name']?></td>
                <td><?=$row['no_of_rooms']?></td>
                <td><?=$row['no_of_floors']?></td>
                <td><?=$row['building_added']?></td>
                <td><?=$row['building_modified']?></td>
                <td>
                  <div class="btn-group" role="group">
                    <a href="#" class="btn btn-sm btn-outline-success action-btn updateBuilding" id="<?=$row['building_id']?>//<?=$row['building_name']?>//<?=$row['no_of_rooms']?>//<?=$row['no_of_floors']?>" data-toggle="modal" data-target="#modal_building_update" data-toggle="tooltip" data-placement="top" title="Update Building">
                      <span class="fa fa-pencil"></span>
                    </a>
                    <a href="#" id="<?=base_url('admin/delete/building/'.$row['building_id'])?>" class="btn btn-sm btn-outline-danger action-btn delete" data-toggle="tooltip" data-placement="top" title="Delete Building">
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
<div class="modal fade" id="modal_building_add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Add Building</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/addBuilding', 'id="frm_building_add"');?>
          <div class="form-group">
            <label>Building Name</label>
            <input type="text" class="form-control focus" placeholder="Enter Building Name" name="building_name" required>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Number of Rooms</label>
                <input type="number" class="form-control" placeholder="Enter Number of Rooms" name="no_of_rooms" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Number of Floors</label>
                <input type="number" class="form-control" placeholder="Enter Number of Floors" name="no_of_floors" required>
              </div>
            </div>
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_building_add">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Update -->
<div class="modal fade" id="modal_building_update" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Update Building</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/updateBuilding', 'id="frm_building_update"');?>
          <input type="hidden" name="building_id" id="building_id">
          <div class="form-group">
            <label>Building Name</label>
            <input type="text" class="form-control focus" placeholder="Enter Building Name" name="building_name" id="building_name" required>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Number of Rooms</label>
                <input type="number" class="form-control" placeholder="Enter Number of Rooms" name="no_of_rooms" id="no_of_rooms" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Number of Floors</label>
                <input type="number" class="form-control" placeholder="Enter Number of Floors" name="no_of_floors" id="no_of_floors" required>
              </div>
            </div>
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_building_update">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>