<?php $this->load->view('templates/nav'); ?> 

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$title2?>
          <div class="btn-group">
            <a href="<?=base_url('admin/faculty')?>" class="btn btn-outline-dark btn-sm">Back</a>
            <button class="btn btn-outline-dark btn-sm" form="frm_faculty_add">Add Faculty</button>
          </div>
        </h5>
			  <div class="card-body faculty">
          <?=form_open_multipart('admin/addFaculty', 'id="frm_faculty_add"');?>
          <!--row start-->

          <div class="row">
            <div class="col-md-2">
              <div class="form-group fixlabel">
                <input style="background: none" type="text" class="form-control" name="identification" id="identification" required readonly>
                <label>Faculty ID</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <input type="text" class="form-control" name="username" required>
                <label>Username</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <input type="password" class="form-control" name="password" required>
                <label>Password</label>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <select class="custom-select" name="department_id" required>
                  <option value=""></option>
                  <?php foreach ($user_types as $row) {?>
                  <option value="<?=$row['user_type_id']?>"><?=$row['user_type']?></option>
                  <?php } ?>
                </select>
                <label>Usertype</label>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">

            <div class="col-md-8">

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" class="form-control identification" id="f_name" name="f_name" required>
                    <label>First Name</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" class="form-control" name="m_name">
                    <span class="notRequired">Middle Name <small>(optional)</small></span>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" class="form-control identification" id="l_name" name="l_name" required>
                    <label>Last Name</label>
                  </div>
                </div>
              </div>

              <!--row start-->
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" class="form-control" name="suffix_name">
                    <span class="notRequired">Suffix Name <small>(optional)</small></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" class="form-control" name="ext_name">
                    <span class="notRequired">Extension Name <small>(optional)</small></span>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group fixlabel">
                    <input type="date" class="form-control identification" id="birth_date" placeholder="Enter Suffix Name" name="birth_date" required>
                    <label>Birthdate*</label>
                  </div>
                </div>
              </div>
              <!--row end-->

              <!--row start-->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="email" required>
                    <label>Email Address</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="contact_no" required>
                    <label>Contact Number</label>
                  </div>
                </div>
              </div>
              <!--row end-->
            </div>

            <!--faculty picture-->
            <div class="col-md-4">
               <label>Faculty Picture <small>(optional)</small></label>
               <div class="row">
                 <div class="card profile col-md-10 p-0" style="height: 200px;">
                   <img src="<?=base_url('assets/img/users/avatar.png')?>" height="100%" width="100%" class="hand imgClick">
                   <input type="file" id="imgFile" class="invisible position-absolute" name="image_src">
                 </div>
                 <div class="col-md-1">
                   <a href="#" tabindex="-1" class="btn btn-sm btn-outline-primary mt-1 mb-1 imgClick" rel="tooltip" data-toggle="tooltip" data-placement="left" title="Select Picture"><span data-feather="image"></span></a>
                   <a href="#" tabindex="-1" class="btn btn-sm btn-outline-success mt-1 mb-1" rel="tooltip" data-toggle="tooltip" data-placement="left" title="Reset Picture"><span data-feather="refresh-ccw"></span></a>
                   <a href="#" tabindex="-1" class="btn btn-sm btn-outline-danger mt-1 mb-1" rel="tooltip" data-toggle="tooltip" data-placement="left" title="Remove Picture" id="removePicture"><span data-feather="x"></span></a>
                 </div>
               </div>
            </div>
          </div>
          <!--row end-->

          <!--row start-->
          <div class="row">
            <div class="form-group col-md-12 mt-2">
              <textarea class="form-control" name="address"></textarea>
              <span class="notRequired">Address <small>(optional)</small></span>
            </div>
          </div>

            <!--row start-->
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <select class="custom-select" name="department_id" required>
                  <option value=""></option>
                  <?php foreach ($departments as $row) { ?>
                  <option value="<?=$row['department_id']?>"><?=$row['department_name']?></option>
                  <?php } ?>
                </select>
                <label>Select Department</label>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <select class="custom-select" name="rank_id" required>
                  <option value=""></option>
                  <?php foreach ($ranks as $row) { ?>
                  <option value="<?=$row['rank_id']?>"><?=$row['rank_type']?></option>
                  <?php } ?>
                </select>
                <label>Select Rank</label>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <select class="custom-select" name="designation_id" required>
                  <option value=""></option>
                  <?php foreach ($designations as $row) { ?>
                  <option value="<?=$row['designation_id']?>"><?=$row['designation_name']?></option>
                  <?php } ?>
                </select>
                <label>Select Designation</label>
              </div>
            </div>
          </div>
            <!--row end-->
          <?=form_close();?>
			  </div>
			</div>
   </main>
  </div>
</div>