<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block">
                        <img src="<?php echo base_url('assets/admin/img/undraw_profile.svg');?>" alt="responsive" class="p-4 img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h1 class="text-xl-center fw-bold text-dark mb-4">Selamat datang!</h1>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar Disini</h1>
                            </div>
                            <form class="user" method = "post" action="<?php echo site_url('adminpanel/regis'); ?>">
                            <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username"
                                            name="username" placeholder="username">
                                    </div>
                                <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="nama"
                                            name="password" placeholder="password">
                                    </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="namadesa"
                                        name="namadesa" placeholder="nama desa">
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-user btn-block" type="submit" id="sendMesrsageButton">Daftar</button>
                                </div>
                            </form>

                            <hr>

                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= site_url('adminpanel/index'); ?>">Already have an account? Login!</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>