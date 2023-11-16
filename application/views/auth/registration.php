<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                            </div>
                            <form class="user" action="<?php echo base_url('auth/registration') ?>">
                            <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="desa"
                                            name="desa" placeholder="Desa" value="<?= set_value('desa')?>">
                                            <?= form_error('desa','<small class="text-danger pl-3">','</small');?>
                                    </div>
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="nama"
                                            name="nama" placeholder="Full Name">
                                    </div>
                                
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email"
                                        name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password"
                                            name="password" placeholder="Password">
                                    </div>
                                <a href="" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth') ?>">Already have an account? Login!</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>