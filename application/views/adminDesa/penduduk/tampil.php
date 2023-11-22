<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <!-- <h1 class="h3 mb-0 text-gray-800">Halaman Data Penduduk</h1> -->

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

                  <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 12, 2019</div>
                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                    Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                            alt="...">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                            problem I've been having.</div>
                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                            alt="...">
                        <div class="status-indicator"></div>
                    </div>
                    <div>
                        <div class="text-truncate">I have the photos that you ordered last month, how
                            would you like them sent to you?</div>
                        <div class="small text-gray-500">Jae Chun · 1d</div>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $this->session->userdata('nama') ?>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="img-profile rounded-circle"
                    src="<?php echo base_url('assets/admin/img/undraw_profile.svg');?>">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('adminpanel/logout');?>">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid table-responsive">
        <!-- Page Heading -->
        <div class="box-header">
            <h4 style="text-align:center"><b>DATA PENDUDUK DESA</b></h4>
            <hr>
        </div>
        
        <!-- <p>Halaman data penduduk menampilkan penduduk yang kemudian akan ditampilkan ke halaman home sehingga kategori barang dapat dilihat oleh pelanggan yang ingin membeli produk berdasarkan kategori.</p> -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
            <?php
            if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
            ?>
            <div class="card-footer clearfix">
                    <a href="<?php echo site_url('penduduk/add'); ?>" class="btn btn-sm btn-info float-left">Tambah Penduduk</a>
                </div>
            <?php } ?>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="active">
                                <th style="width: auto">No</th>
                                <th style="text-align:center">NIK</th>
                                <th style="text-align:center">Nama</th>
                                <th style="text-align:center">Jenis Kelamin</th>
                                <th style="text-align:center">Tempat Lahir</th>
                                <th style="text-align:center">Tanggal Lahir</th>
                                <th style="text-align:center">Agama</th>
                                <th style="text-align:center">Status Perkawinan</th>
                                <th style="text-align:center">Alamat</th>
                                <?php
                                if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
                                ?>
                                <th style="width: 40px">Aksi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($penduduk as $val) { ?>
                                <tr style="text-align:center">
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $val->nik; ?></td>
                                    <td><?php echo $val->nama; ?></td>
                                    <td><?php echo $val->jenis_kelamin; ?></td>
                                    <td><?php echo $val->tempat_lahir; ?></td>
                                    <td><?php echo $val->tanggal_lahir; ?></td>
                                    <td><?php echo $val->agama; ?></td>
                                    <td><?php echo $val->status_perkawinan; ?></td>
                                    <td><?php echo $val->alamat; ?></td>
                                    <?php
                                        // Cek role user
                                        if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
                                        ?>
                                    <td style="text-align:center">
                                        <div class="btn-group">
                                            <a href="<?php echo site_url('penduduk/get_by_id/'.$val->nik);?>" class="btn btn-warning">Edit</a>
                                            <a href="<?php echo site_url('penduduk/delete/'.$val->id_penduduk);?>" onclick="return confirm('Yakin Akan Menghapus Data ini? - Admin')" class="btn btn-danger">Hapus</a>
                                            <a href="<?php echo site_url('penduduk/dashboard/'. $val->id_penduduk);?>" class="btn btn-info">Tampil</a>
                                        </div>
                                    </td>
                                    <?php } ?>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
