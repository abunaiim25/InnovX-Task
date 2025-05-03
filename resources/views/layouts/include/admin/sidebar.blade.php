<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="#"><span class="text-white"><b>Admin Panel</b></span></a>
    </div>

    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
              <span>Admin Member</span>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('admin.dashboard')}}" >
          <span class="menu-icon">
            <i class="fas fa-calendar-check"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li> 

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('normal.home')}}" target="_blank">
          <span class="menu-icon">
            <i class="fas fa-eye"></i>
          </span>
          <span class="menu-title">Visit Site </span>
        </a>
      </li> 



    </ul>
  </nav>