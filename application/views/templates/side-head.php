<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link <?=($title=='Dashboard')?'active':'';?>" href="<?=base_url('head')?>">
          <span data-feather="star"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=($title=='Schedule')?'active':'';?>" href="<?=base_url('head/schedule')?>">
          <span data-feather="x"></span>
          Schedule*
        </a>
      </li>
    </ul>
  </div>
</nav>