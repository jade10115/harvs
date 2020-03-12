<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side-head');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$building[0]['building_name'];?> 
          <a href="<?=base_url('head/schedule')?>" class="btn btn-outline-dark btn-sm">Back</a>  
        </h5>
			  <div class="card-body">
          <p><strong>Employee Name:</strong> <?=$faculty[0]['f_name']?> <?=$faculty[0]['m_name']?> <?=$faculty[0]['l_name']?></p>
          <p><strong>Scheduled Time:</strong> <?=date("g:i A", strtotime($_SESSION['available_rooms']['time_start']))?> - <?=date("g:i A", strtotime($_SESSION['available_rooms']['time_end']))?></p>
          <p><strong>Scheduled Day:</strong> <?=$_SESSION['available_rooms']['day']?></p>
          <p><strong>Room Not Available:</strong> <?=$room[0]['room_type']?> <?=$room[0]['room_number']?></p>
          <table class="table table-striped table-hover table-sm">
            <thead>
              <tr>
                <th>Room</th>
                <th>Room Type</th>
                <th>Floor Number</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($available_rooms as $row) {?>
              <tr>
                <td><?=$row['room_number']?></td>
                <td><?=$row['room_type']?></td>
                <td><?=$row['room_floor']?></td>
                <td width="10%">
                  <div class="btn-group" role="group">
                    <a href="#" class="btn btn-sm btn-outline-primary action-btn assign" data-toggle="tooltip" data-placement="top" title="Assign to Room">
                      <span class="fa fa-calendar-check-o"></span>
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