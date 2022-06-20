<!---------------------- sidebar ---------------------->
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <!-- Logo -->
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="<?php echo URLROOT ;?>/DashboardManager">
        <span class="ms-1 fs-4 font-weight-bold">R-Stadium</span>
      </a>
    </div>
    
    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if(($_SERVER['REQUEST_URI'] == '/R-Stadium/')||($_SERVER['REQUEST_URI'] == '/R-Stadium/')) echo'active'; ?>" href="<?php echo URLROOT ;?>/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-laptop text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">View Site</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if(($_SERVER['REQUEST_URI'] == '/R-Stadium/DashboardManager/index')||($_SERVER['REQUEST_URI'] == '/R-Stadium/DashboardManager')) echo'active'; ?>" href="<?php echo URLROOT ;?>/DashboardManager">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
            <ul class="navbar-nav collapse" id="collapseExample" style="width: 80%; margin-left: 10%;">
              <li class="nav-item">
                <a class="nav-link <?php if($_SERVER['REQUEST_URI']=='/R-Stadium/dashboardStadium') echo'active'; ?>" href="<?php echo URLROOT ;?>/dashboardStadium">
                  <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="bi bi-table text-secondary text-sm opacity-10"></i>
                  </div>
                  <span class="nav-link-text ms-1">Stadiums</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($_SERVER['REQUEST_URI']=='/R-Stadium/DashboardBooken') echo'active'; ?>" href="<?php echo URLROOT ;?>/DashboardBooken">
                  <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="bi bi-calendar3-range text-secondary text-sm opacity-10"></i>
                  </div>
                  <span class="nav-link-text ms-1">bookens</span>
                </a>
              </li>
            </ul>
        </li>

        <hr class="horizontal dark mt-5">
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT ;?>/Logins/logout">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-box-arrow-left text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
    
  </aside>