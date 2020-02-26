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
			  <div class="card-body">
          <?=form_open('admin/addFaculty', 'id="frm_faculty_add"');?>
          <!--row start-->
          <div class="row">
            <div class="col-md-8">

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>First Name*</label>
                    <input type="text" class="form-control focus" placeholder="Enter First Name" name="f_name" required>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Middle Name <small>(optional)</small></label>
                    <input type="text" class="form-control focus" placeholder="Enter Middle Name" name="m_name" required>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Last Name*</label>
                    <input type="text" class="form-control focus" placeholder="Enter Last Name" name="l_name" required>
                  </div>
                </div>
              </div>

              <!--row start-->
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Suffix Name <small>(optional)</small></label>
                    <input type="text" class="form-control focus" placeholder="Enter Suffix Name" name="suffix_name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Extension Name <small>(optional)</small></label>
                    <input type="text" class="form-control focus" placeholder="Enter Extension Name" name="ext_name">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Birthdate*</label>
                    <input type="date" class="form-control focus" placeholder="Enter Suffix Name" name="birth_date" required>
                  </div>
                </div>
              </div>
              <!--row end-->

              <!--row start-->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email*</label>
                    <input type="text" class="form-control focus" placeholder="Enter Last Name" name="email" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Contact Number*</label>
                    <input type="text" class="form-control focus" placeholder="Enter Contact Number" name="contact_no" required>
                  </div>
                </div>
              </div>
              <!--row end-->
            </div>

            <!--faculty picture-->
            <div class="col-md-4">
               <label>Faculty Picture <small>(optional)</small></label>
               <div class="card profile">
                 <img src="" class="rounded">
               </div>
            </div>
          </div>
          <!--row end-->

          <!--row start-->
          <div class="row">
            <div class="form-group col-md-12">
              <label>Address <small>(optional)</small></label>
              <textarea class="form-control focus" placeholder="Enter Faculty Address" name="address"></textarea>
            </div>
          </div>

            <!--row start-->
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Department</label>
                <select class="custom-select" name="department_id">
                  <option value="">-- select department --</option>
                  <?php foreach ($departments as $row) { ?>
                  <option value="<?=$row['department_id']?>"><?=$row['department_name']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Rank</label>
                <select class="custom-select" name="rank_id">
                  <option value="">-- select rank --</option>
                  <?php foreach ($ranks as $row) { ?>
                  <option value="<?=$row['rank_id']?>"><?=$row['rank_type']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Designation</label>
                <select class="custom-select" name="designation_id">
                  <option value="">-- select designation --</option>
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