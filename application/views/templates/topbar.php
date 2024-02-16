
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background: #012970;">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background: #012970;">
       <a class="navbar-brand brand-logo" ><img src="<?= base_url('assets/'); ?>images/1.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" ><img src="<?= base_url('assets/'); ?>images/1.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-flex">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              
            </a>
          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item preview-item">               
                  <i class="icon-head"></i> Manajemen User
              </a>
              <a class="dropdown-item preview-item">
                  <i class="fa-solid fa-city"></i>Data Kota
              </a>
              <a class="dropdown-item preview-item">
                <i class="fa-solid fa-graduation-cap"></i>Data Kampus
              </a>
              <a class="dropdown-item preview-item">
               <i class="fa-solid fa-graduation-cap"></i> Data Jurusan
              </a>
              <a class="dropdown-item preview-item">
                <i class="fa-solid fa-graduation-cap"></i> Sumber Data
              </a>
              <a class="dropdown-item preview-item" style="color: red;">
                <i class="fa-solid fa-arrow-right-from-bracket" style="color: red;"></i> Logout
              </a>
            </div>
          </li>
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>