<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side-head');?>
   
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-2 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$header[0]['building_name']?>
          
        </h5>
			  <div class="card-body">
          <table class="table table-striped table-hover table-sm">
            <thead>
              <tr>
                           
                <th>Room Type</th>
                <th>Room #</th>
                <th>Floor #</th>
                <th>Date Added</th>
                <th>Date Updated</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($rooms as $row) {?>
              <tr>
              
                <td><?=$row['room_type']?></td>
                <td><?=$row['room_number']?></td>
                <td><?=$row['room_floor']?></td>
                <td><?=$row['room_added']?></td>
                <td><?=$row['room_modified']?></td>
                <td>
                  <div class="btn-group" role="group">
                    <a href="<?=base_url('Head/room_schedule/'.$row['room_id'].'/'.$row['building_id']);?>" class="btn btn-sm btn-outline-success action-btn"  data-toggle="tooltip" data-placement="top" title="View Schedule">
                      <span class="fa fa-eye"></span>
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
