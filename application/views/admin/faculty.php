<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$title?>
          <a href="#" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#modal_instructor_add">Add Instructor</a>  
        </h5>
			  <div class="card-body">
          <table class="table table-striped table-hover table-sm">
            <thead>
              <tr>
                <th>Instructor Name</th>
                <th>Weekly Teaching Hours</th>
                <th>Date Added</th>
                <th>Date Updated</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($faculties as $row) {?>
              <tr>
                <td><?=$row['instructor_name']?></td>
                <!-- <td><?=$row['count(tbl_subject.subject_id)']?></td> -->
                <td></td>
                <td><?=$row['instructor_added']?></td>
                <td><?=$row['instructor_updated']?></td>
                <td>
                  <div class="btn-group" role="group">
                    <a href="#" class="btn btn-sm btn-outline-info action-btn" data-toggle="tooltip" data-placement="top" title="View Instructor">
                      <span class="fa fa-eye"></span>
                    </a>
                    <a href="#" class="btn btn-sm btn-outline-success action-btn updateInstructor" id="<?=$row['instructor_id']?>//<?=$row['instructor_name']?>" data-toggle="modal" data-target="#modal_instructor_update" data-toggle="tooltip" data-placement="top" title="Update Instructor">
                      <span class="fa fa-pencil"></span>
                    </a>
                    <a href="#" id="<?=base_url('admin/delete/instructor/'.$row['instructor_id'])?>" class="btn btn-sm btn-outline-danger action-btn delete" data-toggle="tooltip" data-placement="top" title="Delete Instructor">
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
<div class="modal fade" id="modal_instructor_add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Add Instructor</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/addInstructor', 'id="frm_instructor_add"');?>


          <!--row start-->
          <div class="row">

            <div class="col-md-8">

              <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>First Name*</label>
                  <input type="text" class="form-control focus" placeholder="Enter First Name" name="f_name" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Middle Name*</label>
                  <input type="text" class="form-control focus" placeholder="Enter Middle Name" name="m_name" required>
                </div>
              </div>
            </div>

            <!--row start-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Last Name*</label>
                  <input type="text" class="form-control focus" placeholder="Enter Last Name" name="l_name" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Suffix Name*</label>
                  <input type="text" class="form-control focus" placeholder="Enter Suffix Name" name="suffix_name" required>
                </div>
              </div>
            </div>
            <!--row end-->

            <!--row start-->
            <div class="row">

              <div class="col-md-6">
                <div class="form-group">
                  <label>Extension Name*</label>
                  <input type="text" class="form-control focus" placeholder="Enter Extension Name" name="ext_name" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Contact Number</label>
                  <input type="text" class="form-control focus" placeholder="Enter Contact Number" name="contact_no" required>
                </div>
              </div>

            </div>
            <!--row end-->

          </div>

          <!--Instructor picture-->
          <div class="col-md-4">
             <label>Instructor Picture</label>
             <div class="card profile">
               <img src="" class="rounded">
             </div>

          </div>

          </div>
            <!--row end-->

            <!--row start-->
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label>Email </label>
                <input type="text" class="form-control focus" placeholder="Enter Last Name" name="email" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Birthdate*</label>
                <input type="date" class="form-control focus" placeholder="Enter Suffix Name" name="birth_date" required>
              </div>
            </div>

          </div>
            <!--row end-->


            <div class="form-group">
              <label>Address*</label>
              <textarea class="form-control focus" placeholder="Enter Instructor Address" name="address" required></textarea>
            </div>

            <!--row start-->
            <div class="row">

              <div class="col-md-4">
                <div class="form-group">
                  <label>Department</label>
                  <select class="custom-select" name="department">
                    <option value="Laboratory">-Select Department-</option>
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Rank</label>
                  <select class="custom-select" name="rank">
                    <option value="Laboratory">-Select Rank-</option>
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Designation</label>
                  <select class="custom-select" name="designation">
                    <option value="Laboratory">-Select Designation-</option>
                  </select>
                </div>
              </div>

            </div>
            <!--row end-->

        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_instructor_add">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Update -->
<div class="modal fade" id="modal_instructor_update" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">Update Instructor</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=form_open('admin/updateInstructor', 'id="frm_instructor_update"');?>
          <input type="hidden" name="instructor_id" id="instructor_id">
          <div class="form-group">
            <label>Instructor Name</label>
            <input type="text" class="form-control focus" placeholder="Enter Instructor Name" name="instructor_name" id="instructor_name" required>
          </div>
        <?=form_close();?>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm" form="frm_instructor_update">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>