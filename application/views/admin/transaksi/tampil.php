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

        <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <h6 class="text-dark">nama admin : <?php echo $this->session->userdata('nama')?></h6>
                <span class="mr-2 d-none d-lg-inline text-grey-600 small"></span>
            </a>
        </li>


        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <a class="dropdown-item" href="<?php echo site_url('admin/logout');?>">
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
            <h4 style="text-align:center"><b>DATA KELOLA USER</b></h4>
            <hr>
        </div>
        
        <p>Halaman data kelola user menampilkan penduduk yang kemudian akan ditampilkan ke halaman home sehingga kategori barang dapat dilihat oleh pelanggan yang ingin membeli produk berdasarkan kategori.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
            <!-- <div class="card-footer clearfix">
                    <a href="<?php echo site_url('admin/add_user'); ?>" class="btn btn-sm btn-info float-left">Tambah Penduduk</a>
                </div> -->
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="active">
                                <!-- <th style="text-align:center">#</th> -->
                                <th style="text-align:center">Order ID</th>
                                <th style="text-align:center">Nama</th>
                                <th style="text-align:center">Nama Desa</th>
                                <th style="text-align:center">Paket</th>
                                <th style="text-align:center">VA Number</th>
                                <th style="text-align:center">Gross Amount</th>
                                <th style="text-align:center">Payment Type</th>
                                <th style="text-align:center">Bank</th>
                                <th style="text-align:center">Transaction Time</th>
                                <th style="text-align:center">Status Code</th>
                                <th style="text-align:center">Download Pdf</th>
                                <th style="text-align:center">Delete</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($midtrans as $val) { ?>
                                <tr style="text-align:center">
                                    <!-- <td><?php echo $no; ?></td> -->
                                    <td><?php echo $val->order_id; ?></td>
                                    <td><?php echo $val->nama; ?></td>
                                    <td><?php echo $val->nama_desa; ?></td>
                                    <td><?php echo $val->paket; ?></td>
                                    <td><?php echo $val->va_number; ?></td>
                                    <td><?php echo $val->gross_amount; ?></td>
                                    <td><?php echo $val->payment_type; ?></td>
                                    <td><?php echo $val->bank; ?></td>
                                    <td><?php echo $val->transaction_time; ?></td>
                                    <td>
                                        <?php
                                        if($val->status_code == "201"){?>
                                            <span class="badge bg-success">Success</span>
                                        <?php
                                        }else {
                                        ?>
                                             <span class="badge bg-warning">Pending</span>

                                        <?php
                                        }
                                        ?>
                                       
                                    </td>

                                    <td style="text-align:center">
                                        <div class="btn-group">
                                        <a href="<?php echo $val->pdf_url?>" class="badge bg-info">Download</a>
                                    </div>
                                    </td>
                                  
                                    <td style="text-align:center">
                                        <div class="btn-group">
                                            <a href="<?php echo site_url('admin/delete_trans/'.$val->order_id);?>" onclick="return confirm('Yakin Akan Menghapus Data ini? - Admin')" class="btn btn-danger">Hapus</a>
                                        </div>
                                    </td>
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
