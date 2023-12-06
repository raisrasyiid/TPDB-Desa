<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Sistem Informasi Desa</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="<?php echo base_url('assets/promosi/lib/animate/animate.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/promosi/lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?php echo base_url('assets/promosi/css/bootstrap.min.css');?>" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo base_url('assets/promosi/css/style.css');?>" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <div class="container-fluid bg-success">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-white fw-bold d-block">SIDIG<span class="text-secondary">DES</span></h1>
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">
                            <a href="#" id="" class="nav-item nav-link active text-secondary">Beranda</a>
                            <a href="#tentangKami" class="nav-item nav-link">Tentang Kami</a>
                            <!-- <a href="#project" class="nav-item nav-link">Project</a> -->
                            <a href="#artikel" class="nav-item nav-link">Artikel</a>
                            <a href="#tim" class="nav-item nav-link">Tim</a>
                            <a href="#testimonial" class="nav-item nav-link">Testimonial</a>
                            <a href="#faq" class="nav-item nav-link">FAQ</a>
                            <!-- <a href="#mitra" class="nav-item nav-link">Mitra</a> -->
                            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Fitur</a>
                                <div class="dropdown-menu rounded">
                                    <a href="#" class="dropdown-item">Landing Page Desa</a>
                                    <a href="#" class="dropdown-item">Administrasi Desa</a>
                                    <a href="#" class="dropdown-item">Pelayanan Desa</a>
                                </div>
                            </div>
                            <a href="#" class="nav-item nav-link">Kontak</a>
                            <a href="<?php echo site_url('adminpanel/index'); ?>" class="nav-item nav-link">Login</a>

                        </div>
                    </div>
                    <!-- <div class="d-none d-xl-flex flex-shirink-0">
                        <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                            <a href="" class="position-relative animated tada infinite">
                                <i class="fa fa-phone-alt text-white fa-2x"></i>
                                <div class="position-absolute" style="top: -7px; left: 20px;">
                                    <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column pe-4 border-end">
                            <span class="text-white-50">Have any questions?</span>
                            <span class="text-secondary">Call: + 0123 456 7890</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-center ms-4 ">
                            <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
                        </div>
                    </div> -->
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="container-fluid px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('assets/promosi/img/gambar1.png');?>" class="img-fluid" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h4 animated fadeInUp">Best IT Solutions</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInRight">Buat Landing Page Sistem Desa Anda</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Dengan adanya landing page masyarakat desa anda dapat lebih mudah dalam mengakses informasi desa anda</p>
                                <a href="<?php echo site_url('snap/pembayaran');?>" target="_blank" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-warning rounded-pill animated fadeInLeft">Berlangganan</button></a>
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLScE3F1XzPW_jC2_pheVIDJiAgS3fTKOUaVZi_SFor96elBU8w/viewform?usp=sf_link" target="_blank" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill animated fadeInRight">Request Demo</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/promosi/img/gambar2.png');?>" class="img-fluid" alt="Second slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h4 animated fadeInUp">Best IT Solutions</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInLeft">Transformasi Digital Desa</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Perluas jangkauan, lakukan percepatan pelayanan dengan sistem informasi desa</p>
                                <a href="<?php echo site_url('snap/pembayaran');?>" target="_blank" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-warning rounded-pill animated fadeInLeft">Berlangganan</button></a>
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLScE3F1XzPW_jC2_pheVIDJiAgS3fTKOUaVZi_SFor96elBU8w/viewform?usp=sf_link" target="_blank" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill animated fadeInRight">Request Demo</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Fact Start -->
        <div class="container-fluid bg-secondary py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay=".1s">
                        <div class="d-flex justify-content-center">
                            <h1 class="me-3 text-primary counter-value">1515</h1>
                            <h5 class="text-white mt-1">Jumlah Pengguna Aktif</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex justify-content-center">
                            <h1 class="me-3 text-primary counter-value">100</h1>
                            <h5 class="text-white mt-1">Desa yang telah Menggunakan</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex justify-content-center">
                            <h1 class="me-3 text-primary counter-value">120</h1>
                            <h5 class="text-white mt-1">Kabupaten yang mensupport program desa</h5>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">5</h1>
                            <h5 class="text-white mt-1">Stars reviews given by satisfied clients</h5>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Fact End -->