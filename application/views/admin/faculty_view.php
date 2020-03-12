<?php $this->load->view('templates/nav'); ?>

<div class="container-fluid">
  <div class="row">
    <?php $this->load->view('templates/side');?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4 mb-3">
      <div class="card shadow-sm">
			  <h5 class="card-header d-flex justify-content-between align-items-center">
          <?=$name?>
          <div class="btn-group">
            <a href="<?=base_url('admin/faculty')?>" class="btn btn-outline-dark btn-sm">Back</a>
            <button class="btn btn-outline-dark btn-sm" id="btnEditFaculty" value="edit">Edit Faculty</button>
            <button class="btn btn-outline-dark btn-sm formEdit" form="frm_faculty_update" disabled>Save</button>
          </div>
        </h5>
			  <div class="card-body faculty">
          <?=form_open('admin/updateFaculty', 'id="frm_faculty_update"');?>
          <input type="hidden" name="faculty_id" value="<?=$faculty[0]['faculty_id']?>">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group field-wrapper">
                    <label for="f_name">First Name</label>
                    <input type="text" class="form-control formEdit focus" id="f_name" name="f_name" placeholder="First Name" required value="<?=$faculty[0]['f_name']?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group field-wrapper">
                    <label for="m_name">Middle Name <small>(Optional)</small></label>
                    <input type="text" class="form-control formEdit" name="m_name" placeholder="Middle Name (Optional)" value="<?=$faculty[0]['m_name']?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group field-wrapper">
                    <label for="l_name">Last Name</label>
                    <input type="text" class="form-control formEdit" name="l_name" placeholder="Last Name" required value="<?=$faculty[0]['l_name']?>">
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group field-wrapper">
                    <label for="suffix_name">Suffix Name <small>(Optional)</small></label>
                    <input type="text" class="form-control formEdit" name="suffix_name" placeholder="Suffix Name (Optional)" value="<?=$faculty[0]['suffix_name']?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group field-wrapper">
                    <label for="ext_name">Extension Name <small>(Optional)</small></label>
                    <input type="text" class="form-control formEdit" name="ext_name" placeholder="Extension Name (Optional)" value="<?=$faculty[0]['ext_name']?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group fixlabel">
                    <input type="date" class="form-control formEdit identification" id="birth_date" placeholder="Enter Suffix Name" name="birth_date" required value="<?=$faculty[0]['birth_date']?>">
                    <span>Birthdate</span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-8">
                  <div class="form-group field-wrapper">
                    <label for="email">Email</label>
                    <input type="text" class="form-control formEdit" name="email" placeholder="Email" required value="<?=$faculty[0]['email']?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group field-wrapper">
                    <label for="contact_no">Contact Number</label>
                    <input type="text" class="form-control formEdit" name="contact_no" placeholder="Contact Number" required value="<?=$faculty[0]['contact_no']?>">
                  </div>
                </div>
              </div>
            </div>            
          </div>

          <div class="row">
            <div class="col-md-12 mt-2">
              <div class="form-group field-wrapper ">
                <label for="address">Address <small>(Optional)</small></label>
                <textarea class="form-control formEdit" name="address" placeholder="Address (Optional)"><?=$faculty[0]['address']?></textarea>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group field-wrapper">
                <label for="department_id">Select Department</label>
                <select class="custom-select formEdit" name="department_id" placeholder="Select Department" required>
                  <option value="" selected="selected">Select Department </option>
                  <?php foreach ($departments as $row) { ?>
                    <option value="<?=$row['department_id']?>" <?=($row['department_id']==$faculty[0]['department_id'])?'selected':'';?>><?=$row['department_name']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group field-wrapper">
                <label for="rank_id">Select Rank</label>
                <select class="custom-select formEdit" name="rank_id" placeholder="Select Rank" required>
                  <option value="" selected="selected">Select Rank</option>
                  <?php foreach ($ranks as $row) { ?>
                    <option value="<?=$row['rank_id']?>" <?=($row['rank_id']==$faculty[0]['rank_id'])?'selected':'';?>><?=$row['rank_type']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group field-wrapper">
                <label for="designation_id">Select Designation</label>
                <select class="custom-select formEdit" name="designation_id" placeholder="Select Designation" required>
                  <option value="" selected="selected">Select Designation</option>
                  <?php foreach ($designations as $row) { ?>
                  <option value="<?=$row['designation_id']?>" <?=($row['designation_id']==$faculty[0]['designation_id'])?'selected':'';?>><?=$row['designation_name']?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <?=form_close();?>
			  </div>
			</div>
   </main>
  </div>
</div>