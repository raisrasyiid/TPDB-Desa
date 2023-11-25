<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Admin</title>

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
                <div class="sidebar-brand-text mx-3">Admin Sigidesa</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
          
            <li class="nav-item active">
                <a class="nav-link collapsed" href="<?php echo site_url('adminpanel/dashboard');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Nav Item - Data Penduduk -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="<?php echo site_url('user/index');?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data User</span>
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
