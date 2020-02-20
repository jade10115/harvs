<nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0" style="background:#800000">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Room Utilization System</a>

  <?php if (isset($_SESSION['toast'])) { ?>
  <div class="alert alert-primary p-1 m-0" role="alert">
	  <span data-feather="bell" class="mr-1"></span> <?=$this->session->flashdata('toast')?>
	  <button type="button" class="close alert-close ml-2" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
	<?php } ?>

  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?=base_url('auth/logout')?>">Sign out</a>
    </li>
  </ul>
</nav>

<br>
<br>