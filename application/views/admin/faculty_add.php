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
              <div class="col-md-7 mt-4">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group fixlabel">
                              <input style="background: none" type="text" class="form-control" name="identification" id="identification" required readonly>
                              <span >Faculty ID</span>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group field-wrapper">
                              <label for="user_type_id">Usertype</label>
                              <select class="custom-select" name="user_type_id" placeholder="Usertype" required >
                                  <option value="" selected="selected">Select Usertype</option> 
                                  <?php foreach ($user_types as $row) {?>
                                      <option value="<?=$row['user_type_id']?>"><?=$row['user_type']?></option>
                                  <?php } ?>
                              </select>
                          </div>
                      </div>
                  </div>    
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group field-wrapper">
                        <label for="fname">User Name</label>
                        <input type="text" class="form-control" name="uname" placeholder="User Name" required />  
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group field-wrapper">
                              <label for="password">Password</label>
                              <input type="text" class="form-control" name="password" placeholder="Password" required>
                          </div>
                      </div>
                  </div>    
              </div> 
              <div class="col-md-5">
                  <div class="row d-flex justify-content-center">
                      <div class="col-md-9">
                          <label>Faculty Picture <small>(optional)</small></label>
                          <div class="row">
                              <div class="card profile col-md-10 p-0" style="height: 200px;">
                                  <img src="<?=base_url('assets/img/users/avatar.png')?>" height="100%" width="100%" class="hand imgClick">
                                  <input type="file" id="imgFile" class="invisible position-absolute" name="image_src">
                              </div>
                              <div class="col-md-1">
                                  <a href="#" tabindex="-1" class="btn btn-sm btn-outline-primary mt-1 mb-1 imgClick" rel="tooltip" data-toggle="tooltip" data-placement="left" title="Select Picture">
                                    <span data-feather="image"></span>
                                  </a>
                                  <a href="#" tabindex="-1" class="btn btn-sm btn-outline-success mt-1 mb-1" rel="tooltip" data-toggle="tooltip" data-placement="left" title="Reset Picture">
                                      <span data-feather="refresh-ccw"></span>
                                  </a>
                                  <a href="#" tabindex="-1" class="btn btn-sm btn-outline-danger mt-1 mb-1" rel="tooltip" data-toggle="tooltip" data-placement="left" title="Remove Picture" id="removePicture">
                                      <span data-feather="x"></span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> 
          </div>
          <hr>

          <div class="row">

            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group field-wrapper">
                    <label for="f_name">First Name</label>
                    <input type="text" class="form-control identification" id="f_name" name="f_name" placeholder="First Name" required>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group field-wrapper">
                    <label for="m_name">Middle Name <small>(optional)</small></label>
                    <input type="text" class="form-control" name="m_name" placeholder="Middle Name">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group field-wrapper">
                    <label for="l_name">Last Name</label>
                    <input type="text" class="form-control identification" id="l_name" name="l_name" placeholder="Last Name" required>
                  </div>
                </div>
              </div>

              <!--row start-->
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group field-wrapper">
                    <label for="suffix_name">Suffix Name <small>(optional)</small></label>
                    <input type="text" class="form-control" name="suffix_name" placeholder="Suffix Name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group field-wrapper">
                    <label for="ext_name">Extension Name <small>(optional)</small></label>
                    <input type="text" class="form-control" name="ext_name" placeholder="Extension Name">
                  </div>
                </div>




                <div class="col-md-4">
                  <div class="form-group fixlabel">
                    <input type="date" class="form-control identification" id="birth_date" placeholder="Enter Suffix Name" name="birth_date" required>
                    <span>Birthdate</span>
                  </div>
                </div>


                      






              </div>
              <!--row end-->

              <!--row start-->
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group field-wrapper">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group field-wrapper">
                    <label for="contact_no">Contact Number</label>
                    <input type="text" class="form-control" name="contact_no" placeholder="Contact Number" required>
                  </div>
                </div>
              </div>
              <!--row end-->
            </div>

            <!--faculty picture-->
            
          </div>
          <!--row end-->

          <!--row start-->
          <div class="row">
            <div class="col-md-12 mt-2">
              <div class="form-group field-wrapper ">
                <label for="address">Address <small>(optional)</small></label>
                <textarea class="form-control" name="address" placeholder="Adrress"></textarea>
              </div>
            </div>
          </div>

          

            <!--row start-->
          <div class="row">




            <div class="col-md-4">
              <div class="form-group field-wrapper">
                <label for="department_id">Select Department</label>
                <select class="custom-select" name="department_id" placeholder="Select Department" required>
                  <option value="" selected="selected">Select Department </option>
                  <?php foreach ($departments as $row) { ?>
                    <option value="<?=$row['department_id']?>"><?=$row['department_name']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group field-wrapper">
                <label for="rank_id">Select Rank</label>
                <select class="custom-select" name="rank_id" placeholder="Select Rank" required>
                  <option value="" selected="selected">Select Rank</option>
                  <?php foreach ($ranks as $row) { ?>
                    <option value="<?=$row['rank_id']?>"><?=$row['rank_type']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group field-wrapper">
                <label for="designation_id">Select Designation</label>
                <select class="custom-select" name="designation_id" placeholder="Select Designation" required>
                  <option value="" selected="selected">Select Designation</option>
                  <?php foreach ($designations as $row) { ?>
                  <option value="<?=$row['designation_id']?>"><?=$row['designation_name']?></option>
                  <?php } ?>
                </select>
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