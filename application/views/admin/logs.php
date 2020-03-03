<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$title?>
          <a href="<?=base_url('admin/faculty_add')?>" class="btn btn-outline-dark btn-sm">Add Faculty</a>  
        </h5>
			  <div class="card-body">
          <table class="table table-striped table-hover table-sm">
            <thead>
              <tr>
                <th>Activity</th>
                <th>Name</th>
                <th>Department</th>
                <th>User Type</th>
                <th>Date Added</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($logs as $row) {?>
              <tr>
                <td><?=$row['log_name']?></td>
                <td><?=$row['l_name']?>, <?=$row['f_name']?> <?=$row['m_name']?></td>
                <td><?=$row['department_name']?></td>
                <td><?=$row['user_type']?></td>
                <td><?=$row['log_added']?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
			  </div>
			</div>
   </main>
  </div>
</div>