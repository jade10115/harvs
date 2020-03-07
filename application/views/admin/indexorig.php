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
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/dashboard.css')?>">
	<!-- dataTables -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/dataTables.bootstrap4.min.css')?>">
	<!-- jQuery -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/jquery-confirm.min.css')?>">
	<!-- fontAwesome -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/font-awesome.min.css')?>">
	<!-- floating labels -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/floating-labels.css') ?>">
	<!-- style -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/rus.css')?>">
	
	<style type="text/css">
	</style>

</head>
<body class="sign-in">
	<div id="container" style="width: 98%">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<div class="card mt-5 shadow-sm">
				  <div class="card-header">
				    Authentication
				  </div>
				  <div class="card-body">
				    <?=form_open('auth/validate'); ?>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="username">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
						  </div>
						  <br>
						  <button type="submit" class="btn btn-primary btn-block">Login</button>
						  <div>
    
						<?=form_close()?>
				  </div>
				</div>
			</div>
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
</footer>
</html>