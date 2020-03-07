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
	<!-- Custom CSS Styling -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/rus.css')?>">
	
	<style type="text/css">
	</style>

</head>
<body class="sign-in">
	<div class="login-container d-flex align-items-center justify-content-center" id="container">
		<div class="bg-white login-wrapper">
			<?=form_open('auth/validate', 'class="login-form"'); ?>
				<div>
					<div class="mb-5 text-center"> 	
						<img src="<?= base_url('assets/img/system/login.png') ?>" alt="loading..." height="130" width="155"><br>
						<label class="login-label">Scheduling System Login</label>
					</div>
				</div>	
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="user" data-feather="user"></i>
							</div>
						</div>
						<input type="text" name="username" class="form-control" placeholder="Enter Username">
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">
								<i data-feather="lock"></i>
							</div>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Enter Password">
					</div>
				</div>
				<div class="forgot-link d-flex align-items-center justify-content-between mb-4">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="remember">
						<label class="remember" for="remember">Remember Password</label>
					</div>
					<a href="#">Forgot Password?</a>
				</div>
				<button type="submit" class="btn btn-login btn-block text-white my-4">Login</button>
			<?=form_close()?>
			<!-- </form> -->
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 offset-md-4 mt-3">
			<?php if (isset($_SESSION['toast'])) { ?>
				<div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
				  <?=$this->session->flashData('toast');?>.
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
	<script type="text/javascript" src="<?=base_url('assets/js/feather.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/dashboard.js')?>"></script>
	<!-- DataTables -->
	<script type="text/javascript" src="<?=base_url('assets/js/jquery.dataTables.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/dataTables.bootstrap4.min.js')?>"></script>
	<!-- jQuery Confirm -->
	<script type="text/javascript" src="<?=base_url('assets/js/jquery-confirm.min.js')?>"></script>
	<!-- floating labels -->
	<script type="text/javascript" src="<?=base_url('assets/js/floating-labels.js')?>"></script>
	<!-- scripts -->
	<script>
	  feather.replace()
	</script>
</footer>
</html>