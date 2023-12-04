<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <h1 class="h3 mb-0 text-gray-800">Halaman Edit Penduduk</h1>
    
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
                <h6 class="text-dark">id desa : <?php echo $this->session->userdata('id_user') ?>  </h6>
                <span class="mr-2 d-none d-lg-inline text-grey-600 small"></span>
            </a>
        </li>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                    <img class="img-profile rounded-circle" src="<?php echo base_url('assets/admin/img/undraw_profile.svg'); ?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>

    </nav>
    <!-- End of Topbar -->

<!-- Contact Start -->
<div class="container-fluid">
    <div class="latest-product__text mb-4">
        <h4 class="section-title px-5">Form Edit Penduduk</h4>
        <p class="mb-4 px-5">Halaman tambah alamat untuk menambah alamat user yang kemudian akan ditampilkan ke halaman home sehingga informasi pada blog dapat dilihat oleh pelanggan yang ingin melihat konten edukasi.</p>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <form name="sentMessage" method="post" action="<?php echo site_url('penduduk/edit'); ?>" enctype="multipart/form-data" autocomplete="off">
                <input type="hidden" name="id_penduduk" value="<?php echo $penduduk->id_penduduk; ?>">
                    <div class="control-group">
                        <label>Nomor Induk kependudukan (NIK)</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" autofocus required="required" value="<?php echo $penduduk->nik; ?>" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" autofocus required="required" value="<?php echo $penduduk->nama; ?>" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required value="<?php echo $penduduk->jenis_kelamin; ?>" >
                            <option value="" selected disabled>- pilih -</option>
                            <option value="laki-laki" name="laki-laki">Laki-laki</option>
                            <option value="perempuan" name="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="control-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" autofocus required="required" value="<?php echo $penduduk->tempat_lahir; ?>" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" autofocus required="required" value="<?php echo $penduduk->tanggal_lahir; ?>" />
                        <p class="help-block text-danger"></p>
                    </div>
                   <div class="control-group">
                    <label for="jenis_kelamin">Agama</label>
                        <select name="agama" class="form-control" value ="<?php echo $penduduk->agama; ?>">
                            <option value="" selected disabled>- pilih -</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katholik">Katholik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="koghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="control-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="3" id="alamat" name="alamat" placeholder="Alamat" required="required" value="<?php echo $penduduk->alamat; ?>" ></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn bnt-sm btn-info float-left" type="submit" id="sendMessageButton">Simpan</button>
                        <button onClick="goBack()".GoBack  class="btn btn-danger"> Kembali</button>
                        <script>
                        function goBack() {
                            window.history.back();
                        }
                        </script>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>