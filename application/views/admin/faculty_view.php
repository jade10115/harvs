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
            <button class="btn btn-outline-dark btn-sm" id="btnEditFaculty" value="edit">Edit Faculty</button>
            <button class="btn btn-outline-dark btn-sm formEdit" form="frm_faculty_update" disabled>Save</button>
          </div>
        </h5>
			  <div class="card-body">
          <?=form_open('admin/updateFaculty', 'id="frm_faculty_update"');?>
          <input type="hidden" name="faculty_id" value="<?=$faculty[0]['faculty_id']?>">
          <!--row start-->
          <div class="row">

            <div class="col-md-8">

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>First Name*</label>
                    <input type="text" class="form-control focus formEdit" placeholder="Enter First Name" name="f_name" required value="<?=$faculty[0]['f_name']?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Middle Name <small>(optional)</small></label>
                    <input type="text" class="form-control formEdit" placeholder="Enter Middle Name" name="m_name" value="<?=$faculty[0]['m_name']?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Last Name*</label>
                    <input type="text" class="form-control formEdit" placeholder="Enter Last Name" name="l_name" required value="<?=$faculty[0]['l_name']?>">
                  </div>
                </div>
              </div>

              <!--row start-->
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Suffix Name <small>(optional)</small></label>
                    <input type="text" class="form-control formEdit" placeholder="Enter Suffix Name" name="suffix_name" value="<?=$faculty[0]['suffix_name']?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Extension Name <small>(optional)</small></label>
                    <input type="text" class="form-control formEdit" placeholder="Enter Extension Name" name="ext_name" value="<?=$faculty[0]['ext_name']?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Birthdate*</label>
                    <input type="date" class="form-control formEdit" name="birth_date" required value="<?=$faculty[0]['birth_date']?>">
                  </div>
                </div>
              </div>
              <!--row end-->

              <!--row start-->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email*</label>
                    <input type="text" class="form-control formEdit" placeholder="Enter Last Name" name="email" required value="<?=$faculty[0]['email']?>">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Contact Number*</label>
                    <input type="text" class="form-control formEdit" placeholder="Enter Contact Number" name="contact_no" required value="<?=$faculty[0]['contact_no']?>">
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
                   <img src="<?=base_url('assets/img/users/'.$faculty[0]['image_src'])?>" height="100%" width="100%" class="" id="image_src">
                   <input type="file" id="imgFile" class="invisible position-absolute" name="image_src">
                 </div>
                 <div class="col-md-1">
                   <a href="#" tabindex="-1" class="btn btn-sm btn-outline-primary mt-1 mb-1  btnEdit invisible imgClick" rel="tooltip" data-toggle="tooltip" data-placement="left" title="Select Picture"><span data-feather="image"></span></a>
                   <a href="#" tabindex="-1" class="btn btn-sm btn-outline-success mt-1 mb-1 btnEdit invisible" rel="tooltip" data-toggle="tooltip" data-placement="left" title="Reset Picture"><span data-feather="refresh-ccw"></span></a>
                   <a href="#" tabindex="-1" class="btn btn-sm btn-outline-danger mt-1 mb-1 btnEdit invisible" rel="tooltip" data-toggle="tooltip" data-placement="left" title="Remove Picture" id="removePicture"><span data-feather="x"></span></a>
                 </div>
               </div>
            </div>
          </div>
          <!--row end-->

          <!--row start-->
          <div class="row">
            <div class="form-group col-md-12">
              <label>Address <small>(optional)</small></label>
              <textarea class="form-control formEdit" placeholder="Enter Faculty Address" name="address"><?=$faculty[0]['address']?></textarea>
            </div>
          </div>

            <!--row start-->
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Department</label>
                <select class="custom-select formEdit" name="department_id">
                  <option value="">-- select department --</option>
                  <?php foreach ($departments as $row) { ?>
                  <option value="<?=$row['department_id']?>" <?=($row['department_id']==$faculty[0]['department_id'])?'selected':'';?>><?=$row['department_name']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Rank</label>
                <select class="custom-select formEdit" name="rank_id">
                  <option value="">-- select rank --</option>
                  <?php foreach ($ranks as $row) { ?>
                  <option value="<?=$row['rank_id']?>" <?=($row['rank_id']==$faculty[0]['rank_id'])?'selected':'';?>><?=$row['rank_type']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Designation</label>
                <select class="custom-select formEdit" name="designation_id">
                  <option value="">-- select designation --</option>
                  <?php foreach ($designations as $row) { ?>
                  <option value="<?=$row['designation_id']?>" <?=($row['designation_id']==$faculty[0]['designation_id'])?'selected':'';?>><?=$row['designation_name']?></option>
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