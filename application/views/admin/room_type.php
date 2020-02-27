<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$title?>
          <a href="#" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#modal_room_type_add">Add Room Type</a>  
        </h5>
			  <div class="card-body">
          <table class="table table-striped table-hover table-sm">
            <thead>
              <tr>
                <th>Room Type</th>
                <th>Description</th>
                <th>Date Added</th>
                <th>Date Updated</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($room_types as $row) {?>
              <tr>
                <td><?=$row['room_type']?></td>
                <td><?=$row['room_description']?></td>
                <td><?=$row['room_type_added']?></td>
                <td><?=$row['room_type_modified']?></td>
                <td>
                  <div class="btn-group" role="group">
                    <a href="#" class="btn btn-sm btn-outline-success action-btn updateRoomType" id="<?=$row['room_type_id']?>//<?=$row['room_type']?>//<?=$row['room_description']?>" data-toggle="modal" data-target="#modal_room_type_update" data-toggle="tooltip" data-placement="top" title="Update Room Type">
                      <span class="fa fa-pencil"></span>
                    </a>
                    <a href="#" id="<?=base_url('admin/delete/room_type/'.$row['room_type_id'])?>" class="btn btn-sm btn-outline-danger action-btn delete" data-toggle="tooltip" data-placement="top" title="Delete Room Type">
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
<div class="modal fade" id="modal_room_type_add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Add Room Type</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/addRoomType', 'id="frm_room_type_add"');?>
          <div class="form-group">
            <label>Room Type</label>
            <input type="text" class="form-control focus" placeholder="Enter Room Type Name" name="room_type" required>
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" placeholder="Enter Room Description" name="room_description" required></textarea>
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_room_type_add">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Update -->
<div class="modal fade" id="modal_room_type_update" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Update Room Type</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/updateRoomType', 'id="frm_room_type_update"');?>
          <input type="hidden" name="room_type_id" id="room_type_id">
          <div class="form-group">
            <label>Room Type</label>
            <input type="text" class="form-control focus" placeholder="Enter Room Type" name="room_type" id="room_type" required>
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" placeholder="Enter Room Description" name="room_description" id="room_description" required></textarea>
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_room_type_update">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>