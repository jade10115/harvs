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
                <th>Faculty Name</th>
                <th>Weekly Teaching Hours</th>
                <th>Date Added</th>
                <th>Date Updated</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($faculties as $row) {?>
              <tr>
                <td><?=$row['faculty_name']?></td>
                <!-- <td><?=$row['count(tbl_subject.subject_id)']?></td> -->
                <td></td>
                <td><?=$row['faculty_added']?></td>
                <td><?=$row['faculty_updated']?></td>
                <td>
                  <div class="btn-group" role="group">
                    <a href="#" class="btn btn-sm btn-outline-info action-btn" data-toggle="tooltip" data-placement="top" title="View Faculty">
                      <span class="fa fa-eye"></span>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-success action-btn updatefaculty" id="<?=$row['faculty_id']?>//<?=$row['faculty_name']?>" data-toggle="modal" data-target="#modal_faculty_update" data-toggle="tooltip" data-placement="top" title="Update Faculty">
                      <span class="fa fa-pencil"></span>
                    </a>
                    <a href="#" id="<?=base_url('admin/delete/faculty/'.$row['faculty_id'])?>" class="btn btn-sm btn-outline-danger action-btn delete" data-toggle="tooltip" data-placement="top" title="Delete Faculty">
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