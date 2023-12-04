<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MadhavTechInfo</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/materialDateTimePicker.css">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-select.css"> -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/iziToast.min.css">
</head>

<body>
    <header class="shadow" id="myHeader">
        <!-- <div class="top-bar d-md-block d-none">
            <div class="container">
                <div class="d-flex align-items-center justify-content-end py-3"> -->
                    <!-- <div class="px-3">
                            <div class="d-flex align-items-center fw-medium">
                                <span class="text-web-secondary fs-14 me-1">GST No<i
                                        class="bi bi-caret-right-fill"></i></span>
                                <span class="fs-14">24ACAFA9619B1ZT</span>
                            </div>
                        </div>
                        <div class="vr"></div> -->
                    <!-- <div class="px-3 mail">
                        <a href="mailto:info@ajasys.com" target="_blank" class="d-flex align-items-center">
                            <i class="fa-solid fa-envelope me-2"></i>
                            <span class="text-web-primary fs-14">madhavtechinfo@gmail.com</span>
                        </a>
                    </div>
                    <div class="vr"></div>
                    <div class="px-3 call">
                        <a href="tel:8347977555" target="_blank" class="d-flex align-items-center">
                            <i class="bi bi-telephone-fill me-2"></i>
                            <span class="text-web-primary fs-14">+91-12-03456789</span>
                        </a>
                    </div>
                    <div class="vr"></div>
                    <div class="header-icon-g">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="javascript:void(0)" class="px-3 fs-14">
                                <i class="fa-brands fa-facebook-f" title="facebook"></i>
                            </a>
                            <a href="javascript:void(0)" class="px-3 fs-14">
                                <i class="fa-brands fa-instagram" title="instagram"></i>
                            </a>
                            <a href="javascript:void(0)" class="px-3 fs-14">
                                <i class="fa-brands fa-linkedin-in" title="linked in"></i>
                            </a>
                            <a href="javascript:void(0)" class="px-3 fs-14">
                                <i class="fa-brands fa-x-twitter" title="twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="headeader border-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid py-3">
                        <div class="col-lg-2 col-md-3 col-8">
                            <a href="http://localhost/self_drive/">
                                <img src="<?php echo base_url('') ?>assets/images/Car_Logo_bg.png" alt="logo" style="max-height:90px;" class="w-100">
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="header-nav navbar-nav ms-auto me-5 mb-2 mb-lg-0 text-capitalize">
                                <li class="nav-item">
                                    <a class="nav-link p-3 fw-bold text-secondary HOME" aria-current="page" href="<?php echo base_url('') ?>">Home</a>
                                </li>
                                <li class="nav-item SERVICES">
                                    <a class="nav-link p-3 fw-bold text-secondary" href="<?php echo base_url('/carlist') ?>">Book Now</a>
                                </li>
                                <li class="nav-item PRODUCT">
                                    <a class="nav-link p-3 fw-bold text-secondary" href="<?php echo base_url('/myorder') ?>">My Booking</a>
                                </li>
                                <li class="nav-item PRODUCT">
                                    <a class="nav-link p-3 fw-bold text-secondary" href="<?php echo base_url('/contactus') ?>">Contact Us</a>
                                </li>
                            </ul>
                            <div>
                                <button class="btn-secondary border-0 py-2 px-4 rounded">Login / SignUp</button>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- <div class="mt-h"></div> -->