<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Room Utilization System :: <?=$title?></title>
	<link rel="icon" href="<?=base_url('assets/img/system/room.png')?>">
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap-select.min.css')?>">
	<!-- Custom CSS Styling -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/rus.css')?>">
	
	<style type="text/css">
	</style>

</head>
<body class="sign-in">
	<div class="login-container d-flex align-items-center justify-content-center" id="container">
		<div class="bg-white login-wrapper">
			<?=form_open('auth/redirectUser', 'class="login-form"'); ?>
				<div class="form-group">
          <label>School Year</label>
          <select class="selectpicker" data-width="100%" title="Select School Year" name="sy_id">
            <?php foreach ($schoolYears as $row) {?>
            	<option value="<?=$row['sy_id']?>"><?=$row['school_year']?></option>
             <?php } ?>
          </select>
        </div>

        <div class="form-group">
           <label>Semester</label>
              <select class="selectpicker" data-width="100%" title="Select Semeter" name="semester_id">
              <?php foreach ($semesters as $row) {?>
              	<option value="<?=$row['semester_id']?>"><?=$row['semester_type']?></option>
              <?php } ?>
           </select>
        </div>

				<button type="submit" name="proceed" class="btn btn-primary btn-sm">Proceed</button>
        <button type="submit" name="cancel" class="btn btn-secondary btn-sm">Cancel</button>
			<?=form_close()?>
		</div>
	</div>

	<!-- alert -->
	<div class="row">
		<div class="col-md-4 offset-md-4 mt-3">
			<?php if (isset($_SESSION['toast'])) { ?>
				<div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
				  <?=$this->session->flashData('toast');?>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
			<?php } ?>
		</div>
	</div>
</body>
<footer>
	<script type="text/javascript" src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap-select.min.js')?>"></script>
	<!-- scripts -->
	<script>
	  feather.replace()
	</script>
</footer>
</html>