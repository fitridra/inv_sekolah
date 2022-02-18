<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">INVENTARIS SEKOLAH</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Data Barang -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_barang') ?>">
          <i class="fas fa-fw fa-boxes"></i>
          <span>Data Barang</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_supplier') ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Supplier</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_peminjaman') ?>">
          <i class="fas fa-fw fa-hands"></i>
          <span>Data Peminjaman</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_brgmasuk') ?>">
          <i class="fas fa-fw fa-plus"></i>
          <span>Data Barang Masuk</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_brgkeluar') ?>">
          <i class="fas fa-fw fa-minus"></i>
          <span>Data Barang Keluar</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <marquee scrolldelay="50" direction="right">Selamat Datang di Website Sistem Informasi Inventaris Sekolah</marquee>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav">

            </ul>

            <ul class="na navbar-nav navbar-right">
              <?php if($this->session->userdata('username')) { ?>
                <li class="text-center mr-4"><?php echo anchor('auth/logout','Logout') ?></li>
              <?php } else { ?>
                <li><?php echo anchor('auth/login','Login') ?></li>
              <?php } ?>
              </ul>

        </nav>
        <!-- End of Topbar -->