<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/admin/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/admin/css/sb-admin-2.min.css');?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('adminpanel');?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-desktop"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sistem Informasi Desa</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
          
            <li class="nav-item <?=($this->uri->segment(1)==='adminpanel')?'active':''?>">
                <a class="nav-link collapsed" href="<?php echo site_url('adminpanel/dashboard');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#datawarga"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Landing Page</span>
                </a>
                <div id="datawarga" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="<?php echo site_url('Penduduk/index');?>">Desa</a>
						<a class="collapse-item" href="<?php echo base_url('surat/kematian'); ?>">Artikel</a>
						<a class="collapse-item" href="<?php echo base_url('surat/kematian'); ?>">Pegawai</a>
						<a class="collapse-item" href="<?php echo base_url('surat/kematian'); ?>">Agenda</a>
						<a class="collapse-item" href="<?php echo base_url('surat/kematian'); ?>">Wilayah</a>
						<a class="collapse-item" href="<?php echo base_url('surat/kematian'); ?>">Statistik</a>
						<a class="collapse-item" href="<?php echo base_url('surat/kematian'); ?>">Produk Hukum</a>
						<a class="collapse-item" href="<?php echo base_url('surat/kematian'); ?>">Wisata</a>
						<a class="collapse-item" href="<?php echo base_url('surat/kematian'); ?>">Support</a>
						<a class="collapse-item" href="<?php echo base_url('surat/kematian'); ?>">Sosmed</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Data Penduduk -->
            <li class="nav-item <?=($this->uri->segment(1)==='penduduk')?'active':''?>">
                <a class="nav-link collapsed " href="<?php echo site_url('penduduk/index');?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Penduduk</span>
                </a>
            </li>


			 <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item <?=($this->uri->segment(1)==='surat')?'active':''?>">
                <a class="nav-link collapsed" href="<?php echo site_url('surat/index');?>">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Surat</span>
                </a>
            </li>
			 
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo site_url('adminpanel/logout');?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

		
        <!-- End of Sidebar -->
