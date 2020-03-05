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
					    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="username" value="admin">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="admin">
					  </div>
					  <div class="form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Remember me</label>
					  </div><br>
					  <button type="submit" class="btn btn-primary">Login</button>
					<?=form_close()?>
			  </div>
			</div>
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
</div>