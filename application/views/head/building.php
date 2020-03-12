<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side-head');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$title?>
          
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
                     <a href="<?=base_url('Head/building_rooms/'.$row['building_id'].'/'.$row['building_id']);?>" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="top" title="View Rooms"><span class="fa fa-eye"></a>  
                      </span>
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
