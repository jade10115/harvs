<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$title?>
          <a href="#" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#modal_room_add">Add Room</a>  
        </h5>
			  <div class="card-body">
          <table class="table table-striped table-hover table-sm">
            <thead>
              <tr>
                <th>Building</th>
                <th>Floor #</th>
                <th>Room Type</th>
                <th>Room #</th>
                <th>Date Added</th>
                <th>Date Updated</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($rooms as $row) {?>
              <tr>
                <td><?=$row['building_name']?></td>
                <td><?=$row['room_floor']?></td>
                <td><?=$row['room_type']?></td>
                <td><?=$row['room_number']?></td>
                <td><?=$row['room_added']?></td>
                <td><?=$row['room_updated']?></td>
                <td>
                  <div class="btn-group" role="group">
                    <a href="#" class="btn btn-sm btn-outline-info action-btn" data-toggle="tooltip" data-placement="top" title="View Room">
                      <span class="fa fa-eye"></span>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-success action-btn updateRoom" id="<?=$row['room_id']?>//<?=$row['building_id']?>//<?=$row['room_floor']?>//<?=$row['room_number']?>//<?=$row['room_type']?>" data-toggle="modal" data-target="#modal_room_update" data-toggle="tooltip" data-placement="top" title="Update Room">
                      <span class="fa fa-pencil"></span>
                    </a>
                    <a href="#" id="<?=base_url('admin/delete/room/'.$row['room_id'])?>" class="btn btn-sm btn-outline-danger action-btn delete" data-toggle="tooltip" data-placement="top" title="Delete Room">
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
<div class="modal fade" id="modal_room_add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Add Rooms</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/addRoom', 'id="frm_room_add"');?>
          <div class="form-group">
            <label>Building</label>
            <select class="form-control selectpicker focus" data-live-search="true" name="building_id" id="building_id_add">
              <?php foreach ($buildings as $row) {?>
              <option value="<?=$row['building_id']?>"><?=$row['building_name']?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Floor Number</label>
            <input type="number" class="form-control" placeholder="Enter Floor Number" name="room_floor" min="0" required>
          </div>
          <div class="form-group">
            <label>Room Type</label>
            <select class="custom-select" name="room_type">
              <option value="Laboratory">Laboratory</option>
              <option value="Lecture">Lecture</option>
            </select>
          </div>
          <div class="form-group">
            <label>Room Number</label>
            <input type="number" class="form-control" placeholder="Enter Room Number" name="room_number" min="0" required>
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_room_add">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Update -->
<div class="modal fade" id="modal_room_update" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Update Rooms</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/updateRoom', 'id="frm_room_update"');?>
          <input type="hidden" name="room_id" id="room_id">
          <div class="form-group">
            <label>Building</label>
            <select class="form-control selectpicker focus" data-live-search="true" name="building_id" id="building_id">
              <?php foreach ($buildings as $row) {?>
              <option value="<?=$row['building_id']?>"><?=$row['building_name']?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Floor Number</label>
            <input type="number" class="form-control" placeholder="Enter Floor Number" name="room_floor" min="0" required id="room_floor">
          </div>
          <div class="form-group">
            <label>Room Type</label>
            <select class="custom-select" name="room_type" id="room_type">
              <option value="Laboratory">Laboratory</option>
              <option value="Lecture">Lecture</option>
            </select>
          </div>
          <div class="form-group">
            <label>Room Number</label>
            <input type="number" class="form-control" placeholder="Enter Room Number" name="room_number" min="0" required id="room_number">
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_room_update">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>