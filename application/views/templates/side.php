<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link <?=($title=='Dashboard')?'active':'';?>" href="<?=base_url('admin')?>">
          <span data-feather="star"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=($title=='Faculties')?'active':'';?>" href="<?=base_url('admin/faculty')?>">
          <span data-feather="users"></span>
          Faculties*
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=($title=='Buildings')?'active':'';?>" href="<?=base_url('admin/building')?>">
          <span data-feather="check"></span>
          Buildings
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=($title=='Rooms')?'active':'';?>" href="<?=base_url('admin/room')?>">
          <span data-feather="check"></span>
          Rooms
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=($title=='Room Types')?'active':'';?>" href="<?=base_url('admin/room_type')?>">
          <span data-feather="check"></span>
          Room Types
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=($title=='Subjects')?'active':'';?>" href="<?=base_url('admin/subject')?>">
          <span data-feather="check"></span>
          Subjects
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=($title=='Colleges')?'active':'';?>" href="<?=base_url('admin/college')?>">
          <span data-feather="check"></span>
          Colleges
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=($title=='Courses')?'active':'';?>" href="<?=base_url('admin/course')?>">
          <span data-feather="check"></span>
          Courses
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=($title=='Departments')?'active':'';?>" href="<?=base_url('admin/department')?>">
          <span data-feather="check"></span>
          Departments
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=($title=='Designations')?'active':'';?>" href="<?=base_url('admin/designation')?>">
          <span data-feather="check"></span>
          Designations
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=($title=='Ranks')?'active':'';?>" href="<?=base_url('admin/rank')?>">
          <span data-feather="check"></span>
          Ranks
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=($title=='Semesters')?'active':'';?>" href="<?=base_url('admin/semester')?>">
          <span data-feather="check"></span>
          Semesters
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=($title=='User Types')?'active':'';?>" href="<?=base_url('admin/user_type')?>">
          <span data-feather="check"></span>
          User Types
        </a>
      </li>
    </ul>
  </div>
</nav>