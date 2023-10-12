    <!-- !-- footer --> 
    <style>
        

    /* footer */
    .footer .footer-icon-group .footer-i {
        width: 35px;
        height: 35px;
        border: 1px solid #fff;
        border-radius: 50%;
        transition: all 0.3s;
    }

    .hero-bg {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        background-color:#000;
        /* background: linear-gradient(-250deg, #a47aff, #e749ff, #ab83ff, #b55dcd); */
        background-size: 400% 400%;
        animation: gradientBG 35s linear infinite;
        animation-direction: alternate;
    }


    .footer .footer-icon-group .footer-i:hover {
        background-color: #fff;
    }

    .footer .footer-icon-group .footer-i .i {
        color: #fff ;
        transition: all 0.3s;
    }

    .footer .footer-icon-group .footer-i:hover .i {
        color: var(--secondery-color);
    }

    .footer .footer-nav ul li a {
        letter-spacing: 1px;
    }

    .footer .banner-bg {
        position: absolute;
        top: 6%;
        left: 66%;
        opacity: 0.1;
        animation: banner-bg 60s linear infinite;
    }

    </style>
    <script src="https://madhavtechinfo.000webhostapp.com/assets/js/jquery.min.js"></script>

    <footer class="footer py-50  pb-0 overflow-hidden position-relative">
        <div class="hero-bg"></div>
       
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 mb-3 ">
                    <!-- <div class="footer-logo mb-3">
                        <a href="index.php">
                            <img src="../images/logo.png" alt="" class="w-50 p-3 bg-white rounded-3">
                        </a>
                    </div> -->
                    <p class="fs-6 text-white ff-first ws-2 fw-medium">Experience the thrill of the driver's seat with our self-drive car rental service. Choose from our extensive range of vehicles for the perfect adventure on wheels. We offer flexible booking options and top-notch customer support, ensuring a hassle-free experience. Your journey, your way—book now and unlock the joy of the open road.
                    </p>
                    <div class="footer-icon-group mt-3 d-flex flex-wrap">
                        <a href="https://www.instagram.com/ajasystechnologies/" target="_blank"
                            class="footer-i d-flex align-items-center justify-content-center mx-1">
                            <i class="fa-brands fa-instagram fs-6 i"></i>
                        </a>
                        <a href="https://www.facebook.com/ajasystechno/" target="_blank"
                            class="footer-i d-flex align-items-center justify-content-center mx-1">
                            <i class="fa-brands fa-facebook-f fs-6 i"></i>
                        </a>
                        <a href="https://in.pinterest.com/ajasyss/" target="_blank"
                            class="footer-i d-flex align-items-center justify-content-center mx-1">
                            <i class="fa-brands fa-pinterest-p fs-6 i"></i>
                        </a>
                        <a href="https://twitter.com/AjasysTech/" target="_blank"
                            class="footer-i d-flex align-items-center justify-content-center mx-1">
                            <i class="fa-brands fa-twitter fs-6 i"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/ajasys-technologies/" target="_blank"
                            class="footer-i d-flex align-items-center justify-content-center mx-1">
                            <i class="fa-brands fa-linkedin-in fs-6 i"></i>
                        </a>
                        <a href="https://www.youtube.com/@ajasystechnologies/" target="_blank"
                            class="footer-i d-flex align-items-center justify-content-center mx-1">
                            <i class="fa-brands fa-youtube fs-6 i"></i>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 ">
                    <h2 class="fw-medium ff-first text-white mb-3 fs-3">Quick Link</h2>
                    <nav class="footer-nav">
                        <ul class="list-unstyled">
                            <li class="mb-1">
                                <a href="https://erp.realtosmart.com/login" target="_blank"
                                    class="fw-normal text-white fs-16">Login</a>
                            </li>
                            <li class="mb-1">
                                <a href="https://erp.realtosmart.com/signup" target="_blank"
                                    class="fw-normal text-white fs-16">Sign up</a>
                            </li>
                            <li class="mb-1">
                                <a href="Pricing.php" class="fw-normal text-white fs-16">Book Now</a>
                            </li>
                
                            <li class="mb-1">
                                <a href="#footer" class="fw-normal text-white fs-16">Contact Us</a>
                            </li>
                            <li class="mb-1">
                                <a href="privacy-policy.php" class="fw-normal text-white fs-16">Privacy Policy</a>
                            </li>
                            <li class="mb-1">
                                <a href="refund-policy.php" class="fw-normal text-white fs-16">Refund Policy</a>
                            </li>
                            <li class="mb-1">
                                <a href="terms-and-conditions.php" class="fw-normal text-white fs-16">Terms & Conditions</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-6 col-md-4 mb-3" id="contact_us">
                    <h2 class="fw-medium ff-first text-white mb-3 fs-3">Contact us</h2>
                    <div class="footer-contact">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa-solid fa-location-arrow me-2 text-white"></i>
                            <p class="text-wrap fw-normal fs-16 text-white">406 ,platinum point ,Surat ,india.</p>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa-solid fa-envelope me-2 text-white"></i>
                            <a href="mailto:info@ajasys.com"
                                class="text-wrap fw-normal fs-16 text-white">Info@ajasys.com</a>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa-solid fa-phone me-2 text-white"></i>
                            <a  href="tel:8347977595"class="text-wrap fw-normal fs-16 text-white">+91-83-47977595</a>
                        </div>
                    </div>
                    <p class="text-white mb-2">Product by : </p>
                    <a href="https://ajasys.com/" target="_blank">
                        <!-- <img src="https://ajasys.com/img/logo.png" alt="ajasys logo" class="w-50 p-3 bg-white rounded-3"> -->
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="footer-link text-center w-100 border-opacity-50 border-top border-white py-4">
            <p class="text-white">Copyright © 2023 Realtosmart CRM</p>
        </div> -->
    </footer>


    <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/js/script.js"></script>
    <script src="<?= base_url() ?>assets/js/dataTables.min.js"></script>

    </body>

    </html> 