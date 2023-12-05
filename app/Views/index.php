<?php include 'partials/header.php'; ?>
<style>
    .main-img {
        width: 100%;
        background-image: url(<?= base_url('assets/images/baner_img/pexels-csegedi-joszef-19002745.jpg'); ?>); 
        background-position: center;
        background-size: cover;
    }

    .glass-effect, .features-box::after{
        background: rgba(0,0,0,0.5);
        backdrop-filter: saturate(180%) blur(4px);
    }

    .highlight_color {
        color: #d00000;
        text-shadow: 0 0 3px #fff;
    }

    .highlight_color2 {
        color: #d00000;
    }

    .mian-section .form-control:focus {
        color: white;
    }


</style>

<section class="main-img mian-section position-relative overflow-hidden section-bg">
    <!-- <div class="position-absolute start-0 top-0 w-100">
        <img src="<?= base_url('assets/images/demo-bg.png'); ?>" alt="" class="w-100 h-100">
    </div> -->
    <div class="container z-1 h-100  mx-80">
        <div class="row justify-content-between  h-100">
            <div class="col-md-6 p-4 text-start mt-4 text-white">
                <h1 class="fw-bolder mb-3">Explore the World <br> With <span class="highlight_color">Comfortable Car</span></h1>
                <p>Exploring the world while nestled in the comfort of a reliable car opens up a realm of possibilities and delights.</p>
                <!-- <img src="<?= base_url('assets/images/main-section.png'); ?>" class="w-75" alt=""> -->
                <!-- <iframe src="https://lottie.host/?file=3a4fc31b-97e1-4b96-b622-1129b0717fd5/mk5yt2CLkv.json" class="w-100 h-100"></iframe> -->
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center h-100 overflow-y-scroll p-4 glass-effect rounded-4 scroll-none">
                <form class="needs-validation" novalidate name="booking_form" method="post">
                    <div class="col-12 d-flex justify-content-center flex-wrap">
                        <div class="mb-3 col-12 p-2 ">
                            <label for="user" class="main-lable text-white">City</label>

                            <select name="city" id="city" required class="selectpicker form-control">
                                <option value="">Select City</option>
                                <option value="surat">surat</option>
                            </select>
                        </div>
                        <div class="mb-3 col-12 col-md-6 p-2 ">
                            <label for="pass" class="main-lable text-white date">Start Date</label>
                            <input type="text" required name="start_date" class="form-control start_date date" id="start_date" placeholder="Start Date">
                        </div>

                        <div class="mb-3 col-12 col-md-6 p-2 ">
                            <label for="pass" class="main-lable text-white">Start Time</label>
                            <input type="text" name="start_time" required class="form-control start_time time" id="start_time" placeholder="Start Time">
                        </div>

                        <div class="mb-3 col-12 col-md-6 p-2 ">
                            <label for="pass" class="main-lable text-white date">End Date</label>
                            <input type="text" name="end_date" required class="form-main form-control date" id="end_date" placeholder="End Date">
                        </div>

                        <div class="mb-3 col-12 col-md-6 p-2 ">
                            <label for="pass" class="main-lable text-white">End Time</label>
                            <input type="text" name="end_time" required class="form-control time" id="end_time" placeholder="End Time">
                        </div>
                        <!-- <div class="form-check mb-md-0 mb-4">
                            <input class="form-check-input" required type="checkbox" id="termsandconditions" value="" id="flexCheckDefault">
                            <label class="form-check-label text-white" for="flexCheckDefault">
                                I agree to these Terms and Conditions.
                            </label>
                        </div> -->
                        <div class="mb-3 col-12 d-flex align-items-end pb-3 justify-content-center ">
                            <button type="button" class="btn-web-secondary w-25 mt-1 book_now" id="book_now">Book Now</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- how work    -->
            <div class="col-12 flex-wrap d-flex align-items-center p-3 mt-4 rounded-4 glass-effect">
                <div class="col-lg-3 col-12 text-start wow slideInUp">
                    <h2 class="fw-bolder ff-first text-white mb-4 fs-2">How <span class="highlight_color2">Khodiyar</span> Drive Works</h2>
                </div>
                <div class="features-main-content col-lg-9 col-12 d-flex overflow-x-scroll flex-nowrap py-3 overflow-y-visible">
                    <div class="features-p-box col-12 col-lg-4 col-md-6 px-3 pb-5 wow slideInUp">
                        <div class="features-box rounded-4 p-4 glass-effect shadow position-relative h-100">
                            <div class="features-imgs text-center justify-content-center d-flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" x="0" y="0"
                                    viewBox="0 0 466.662 466" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="">
                                    <g>
                                        <path fill="#57b7eb"
                                            d="M16 .332h320c8.836 0 16 7.164 16 16v432c0 8.836-7.164 16-16 16H16c-8.836 0-16-7.164-16-16v-432c0-8.836 7.164-16 16-16zm0 0"
                                            opacity="1" data-original="#57b7eb"></path>
                                        <path fill="#4891d3"
                                            d="M200 400.332c-79.527 0-144-64.473-144-144v-256H16c-8.836 0-16 7.164-16 16v432c0 8.836 7.164 16 16 16h320c8.836 0 16-7.164 16-16v-48zm0 0"
                                            opacity="1" data-original="#4891d3" class=""></path>
                                        <path fill="#f9e109" d="M72 48.332h208v32H72zm0 0" opacity="1"
                                            data-original="#f9e109"></path>
                                        <g fill="#39519d">
                                            <path
                                                d="M256 120.332H96a8 8 0 0 1 0-16h160a8 8 0 0 1 0 16zM304 176.332H128a8 8 0 0 1 0-16h176a8 8 0 0 1 0 16zM216 224.332H56a8 8 0 0 1 0-16h160a8 8 0 0 1 0 16zM304 224.332h-56a8 8 0 0 1 0-16h56a8 8 0 0 1 0 16zM136 264.332H56a8 8 0 0 1 0-16h80a8 8 0 0 1 0 16zM224 264.332h-56a8 8 0 0 1 0-16h56a8 8 0 0 1 0 16zm0 0"
                                                fill="#39519d" opacity="1" data-original="#39519d"></path>
                                        </g>
                                        <path fill="#fcbc04" d="M280 80.332H72v-32zm0 0" opacity="1"
                                            data-original="#fcbc04"></path>
                                        <path fill="#f9e109"
                                            d="M152 372.332c0 33.137-26.863 60-60 60s-60-26.863-60-60 26.863-60 60-60 60 26.863 60 60zm0 0"
                                            opacity="1" data-original="#f9e109"></path>
                                        <path fill="#fcbc04"
                                            d="M92 432.332c25.98-.008 49.004-16.734 57.04-41.441a143.986 143.986 0 0 1-79.599-74.16c-26.605 10.792-41.836 38.917-36.336 67.093C38.602 412 63.293 432.336 92 432.332zm0 0"
                                            opacity="1" data-original="#fcbc04"></path>
                                        <path fill="#39519d"
                                            d="M192 408.332a6.875 6.875 0 0 1-2.559-.402c-4.164-1.403-6.414-5.907-5.043-10.078l19.68-59.04a16 16 0 0 1 31.121 3.758l2.723 32 2.879-4.879a16 16 0 0 1 15.039-8 15.996 15.996 0 0 1 13.52 10l5.12 12.641 23.282-29.602a8 8 0 0 1 5.37-2.988 8.01 8.01 0 0 1 5.907 1.707 8.002 8.002 0 0 1 1.281 11.203l-23.36 29.68c-3.562 4.45-9.218 6.668-14.855 5.828s-10.398-4.613-12.503-9.91l-4.961-12.559-2.961 4.88a15.998 15.998 0 0 1-17.082 7.542A15.996 15.996 0 0 1 222 376.332l-2.719-32.48L200 402.57a8.004 8.004 0 0 1-8 5.762zM89.922 395.05a15.994 15.994 0 0 1-11.281-4.64L61.68 373.45a7.999 7.999 0 0 1 0-11.36 8.002 8.002 0 0 1 11.28 0l16.962 16.96 28.316-28.238a8.005 8.005 0 0 1 10.864.418 8 8 0 0 1 .418 10.86l-28.239 28.32a16.004 16.004 0 0 1-11.36 4.64zm0 0"
                                            opacity="1" data-original="#39519d"></path>
                                        <path fill="#fcbc04" d="m395.25 155.738 41.57 24-72 124.711-41.57-24zm0 0"
                                            opacity="1" data-original="#fcbc04"></path>
                                        <path fill="#e59730"
                                            d="m360.8 215.371-37.6 64.961 41.6 24 12.16-21.2a215.925 215.925 0 0 1-16.16-67.76zm0 0"
                                            opacity="1" data-original="#e59730"></path>
                                        <path fill="#a1d51c" d="m364.8 304.492-41.6-24-17.04 45.52 27.68 16zm0 0"
                                            opacity="1" data-original="#a1d51c"></path>
                                        <path fill="#e59730"
                                            d="m307.398 327.465 27.84 16-8 13.918c-4.418 7.687-14.23 10.34-21.918 5.922-7.687-4.418-10.34-14.235-5.922-21.922zm0 0"
                                            opacity="1" data-original="#e59730"></path>
                                        <path fill="#fcbc04" d="m419.18 114.203 41.57 24-24 41.57-41.57-24zm0 0" opacity="1"
                                            data-original="#fcbc04"></path>
                                        <path fill="#c4f236"
                                            d="M455.965 98.496c7.652 4.418 10.273 14.203 5.855 21.856l-8 13.855-27.71-16 8-13.855c4.417-7.653 14.202-10.278 21.855-5.856zm0 0"
                                            opacity="1" data-original="#c4f236"></path>
                                        <path fill="#e59730" d="m384.32 174.754 8-13.856 41.57 24-8 13.856zm0 0" opacity="1"
                                            data-original="#e59730"></path>
                                        <path fill="#39519d"
                                            d="M424.48 273.05a7.97 7.97 0 0 1-4-1.038 7.998 7.998 0 0 1-3.714-4.883 7.977 7.977 0 0 1 .836-6.078l32-55.442a7.986 7.986 0 0 0 .796-6.078 7.988 7.988 0 0 0-3.757-4.879l-69.282-40a8.007 8.007 0 0 1-2.96-10.882 8.003 8.003 0 0 1 4.867-3.758 7.974 7.974 0 0 1 6.093.8l69.282 40a23.987 23.987 0 0 1 8.8 32.797l-32 55.442a8.008 8.008 0 0 1-6.96 4zm0 0"
                                            opacity="1" data-original="#39519d"></path>
                                        <path fill="#a1d51c"
                                            d="M448 104.332a32.56 32.56 0 0 1 1.121-8 16.003 16.003 0 0 0-14.96 8l-8 13.84 27.679 16 4-6.879a31.527 31.527 0 0 1-9.84-22.961zm0 0"
                                            opacity="1" data-original="#a1d51c"></path>
                                    </g>
                                </svg>
                            </div>
                            <h5 class="mb-3 highlight_color2 fw-bold fs-4 text-center">Sign Up</h5>
                            <p class="text-white ws-2 ff-second fs-6 text-center fw-medium">Upload your documents</p>
                        </div>
                    </div>
                    <div class="features-p-box col-12 col-lg-4 col-md-6 px-3 pb-5 wow slideInUp">
                        <div class="features-box rounded-4 p-4 glass-effect shadow position-relative h-100">
                            <div class="features-imgs text-center justify-content-center d-flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" x="0" y="0"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="hovered-paths">
                                    <g>
                                        <path fill="#ff5b5b"
                                            d="M456.832 32.133H55.166C24.747 32.133 0 56.881 0 87.3v56.233c0 8.284 6.716 15 15 15h482c8.284 0 15-6.716 15-15V87.3c0-30.419-24.748-55.167-55.168-55.167z"
                                            opacity="1" data-original="#ff5b5b" class="hovered-path"></path>
                                        <path fill="#ff0059"
                                            d="M456.832 32.133H256v126.4h241c8.284 0 15-6.716 15-15V87.3c0-30.419-24.748-55.167-55.168-55.167z"
                                            opacity="1" data-original="#ff0059"></path>
                                        <path fill="#c5e1e6"
                                            d="M207.799 94.267c-8.284 0-15-6.716-15-15V15c0-8.284 6.716-15 15-15s15 6.716 15 15v64.267c0 8.284-6.716 15-15 15zM111.4 94.267c-8.284 0-15-6.716-15-15V15c0-8.284 6.716-15 15-15s15 6.716 15 15v64.267c0 8.284-6.715 15-15 15z"
                                            opacity="1" data-original="#c5e1e6"></path>
                                        <path fill="#8db9c4"
                                            d="M400.6 94.267c-8.284 0-15-6.716-15-15V15c0-8.284 6.716-15 15-15s15 6.716 15 15v64.267c0 8.284-6.716 15-15 15zM304.199 94.267c-8.284 0-15-6.716-15-15V15c0-8.284 6.716-15 15-15s15 6.716 15 15v64.267c0 8.284-6.716 15-15 15z"
                                            opacity="1" data-original="#8db9c4"></path>
                                        <path fill="#e7f0ef"
                                            d="M0 143.533v313.3C0 487.252 24.747 512 55.166 512h401.666c30.42 0 55.168-24.748 55.168-55.167v-313.3z"
                                            opacity="1" data-original="#e7f0ef"></path>
                                        <path fill="#c5e1e6"
                                            d="M256 512h200.832c30.42 0 55.168-24.748 55.168-55.167v-313.3H256z" opacity="1"
                                            data-original="#c5e1e6"></path>
                                        <path fill="#265c76"
                                            d="M151.566 303.133H87.299c-8.284 0-15-6.716-15-15v-64.266c0-8.284 6.716-15 15-15h64.268c8.284 0 15 6.716 15 15v64.266c-.001 8.284-6.716 15-15.001 15zm-49.267-30h34.268v-34.266h-34.268z"
                                            opacity="1" data-original="#265c76"></path>
                                        <path fill="#1d4659"
                                            d="M424.699 303.133h-64.266c-8.284 0-15-6.716-15-15v-64.266c0-8.284 6.716-15 15-15h64.266c8.284 0 15 6.716 15 15v64.266c0 8.284-6.716 15-15 15zm-49.265-30H409.7v-34.266h-34.266z"
                                            opacity="1" data-original="#1d4659"></path>
                                        <path fill="#265c76"
                                            d="M151.566 431.666H87.299c-8.284 0-15-6.716-15-15V352.4c0-8.284 6.716-15 15-15h64.268c8.284 0 15 6.716 15 15v64.266c-.001 8.284-6.716 15-15.001 15zm-49.267-30h34.268V367.4h-34.268z"
                                            opacity="1" data-original="#265c76"></path>
                                        <path fill="#1d4659"
                                            d="M424.699 431.666h-64.266c-8.284 0-15-6.716-15-15V352.4c0-8.284 6.716-15 15-15h64.266c8.284 0 15 6.716 15 15v64.266c0 8.284-6.716 15-15 15zm-49.265-30H409.7V367.4h-34.266z"
                                            opacity="1" data-original="#1d4659"></path>
                                        <path fill="#265c76"
                                            d="M288.133 431.666h-64.268c-8.284 0-15-6.716-15-15V352.4c0-8.284 6.716-15 15-15h64.268c8.284 0 15 6.716 15 15v64.266c0 8.284-6.716 15-15 15zm-49.268-30h34.268V367.4h-34.268z"
                                            opacity="1" data-original="#265c76"></path>
                                        <path fill="#54e360"
                                            d="M244.641 293.723c-3.979 0-7.794-1.58-10.606-4.394l-22.723-22.723c-5.858-5.857-5.858-15.355 0-21.213 5.857-5.857 15.355-5.857 21.213 0l12.116 12.115 34.835-34.836c5.857-5.857 15.355-5.859 21.213 0 5.858 5.857 5.858 15.354 0 21.213l-45.441 45.443a14.995 14.995 0 0 1-10.607 4.395z"
                                            opacity="1" data-original="#54e360"></path>
                                        <path fill="#1d4659"
                                            d="M288.133 337.4H256v30h17.133v34.266H256v30h32.133c8.284 0 15-6.716 15-15V352.4c0-8.284-6.716-15-15-15z"
                                            opacity="1" data-original="#1d4659"></path>
                                        <path fill="#00b44b"
                                            d="M300.688 222.673c-5.857-5.859-15.355-5.857-21.213 0L256 246.149v42.427l44.688-44.69c5.859-5.859 5.859-15.356 0-21.213z"
                                            opacity="1" data-original="#00b44b"></path>
                                    </g>
                                </svg>
                            </div>
                            <h5 class="mb-3 highlight_color2 fw-bold fs-4 text-center">Book Now</h5>
                            <p class="text-white ws-2 ff-second fs-6 text-center fw-medium">Search for and book a car on our
                                site!</p>
                        </div>
                    </div>
                    <div class="features-p-box col-12 col-lg-4 col-md-6 px-3 pb-5 wow slideInUp">
                        <div class="features-box rounded-4 p-4 glass-effect shadow position-relative h-100">
                            <div class="features-imgs text-center justify-content-center d-flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" x="0" y="0"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="hovered-paths">
                                    <g>
                                        <circle cx="256" cy="256" r="256" fill="#7584f2" opacity="1" data-original="#7584f2"
                                            class="hovered-path"></circle>
                                        <path fill="#4855b7"
                                            d="M512 256c0-17.534-1.763-34.656-5.121-51.199l-87.517-87.517-47.216 38.912-55.055-55.055H183.229l-65.915 327.592 75.379 75.379C212.94 509.263 234.15 512 256 512c141.385 0 256-114.615 256-256z"
                                            opacity="1" data-original="#4855b7"></path>
                                        <path fill="#fe8205"
                                            d="m399.866 97.768 19.463 19.463-43.792 43.792-19.463-19.463zM444.88 197.427v27.529h-61.941v-27.529z"
                                            opacity="1" data-original="#fe8205"></path>
                                        <path fill="#ffffff"
                                            d="M319.298 262.827H140.427v-97.731c0-55.104 44.831-99.936 99.936-99.936s99.936 44.831 99.936 99.936h-42c0-31.946-25.99-57.936-57.936-57.936s-57.936 25.99-57.936 57.936v55.731h136.871z"
                                            opacity="1" data-original="#ffffff"></path>
                                        <path fill="#e9edf5"
                                            d="M240.362 107.16c31.945 0 57.936 25.99 57.936 57.936h42c0-55.104-44.831-99.936-99.936-99.936-.169 0-.338.006-.507.006v42.007c.17-.002.337-.013.507-.013z"
                                            opacity="1" data-original="#e9edf5"></path>
                                        <path fill="#ffffff" d="M239.855 220.827h79.442v42h-79.442z" opacity="1"
                                            data-original="#ffffff"></path>
                                        <path fill="#ffce00" d="M117.314 213.379H363.41v215.354H117.314z" opacity="1"
                                            data-original="#ffce00"></path>
                                        <path fill="#fdba12" d="M239.855 213.378H363.41v215.354H239.855z" opacity="1"
                                            data-original="#fdba12"></path>
                                        <path fill="#636978"
                                            d="M269.433 299.758c0-16.056-13.016-29.071-29.071-29.071s-29.071 13.016-29.071 29.071c0 9.753 4.803 18.384 12.172 23.658v52.251h33.798v-52.251c7.369-5.274 12.172-13.905 12.172-23.658z"
                                            opacity="1" data-original="#636978"></path>
                                        <path fill="#414952"
                                            d="M240.362 270.687c-.17 0-.337.01-.507.013v104.967h17.406v-52.251c7.369-5.273 12.172-13.905 12.172-23.658 0-16.056-13.015-29.071-29.071-29.071z"
                                            opacity="1" data-original="#414952"></path>
                                    </g>
                                </svg>
                            </div>
                            <h5 class="mb-3 highlight_color2 fw-bold fs-4 text-center">Unlock</h5>
                            <p class="text-white ws-2 ff-second fs-6 text-center fw-medium">We SMS your car details With in 20
                                minutes before pickup.</p>
                        </div>
                    </div>
                    <div class="features-p-box col-12 col-lg-4 col-md-6 px-3 pb-5 wow slideInUp">
                        <div class="features-box rounded-4 p-4 glass-effect shadow position-relative h-100">
                            <div class="features-imgs text-center justify-content-center d-flex mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" x="0" y="0"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="">
                                    <g>
                                        <path fill="#80b6fc"
                                            d="m266.872 353.907-31.35-21.512c-30.088-25.531-62.265-33.547-101.726-33.547l-19.491-6h-3.777c-5.103 0-10.199.391-15.243 1.17l-36.368 5.618c-3.841.593-6.291 4.42-5.224 8.157l1.883 6.592a6.461 6.461 0 0 1-.973 5.554L7.735 384.877a40.897 40.897 0 0 0-7.191 30.582l5.704 34.615a9.096 9.096 0 0 0 8.974 7.617h292.154l32.761-10.481a16.958 16.958 0 0 0 11.791-16.151v-25.24c0-1.782-.278-3.547-.821-5.228-.407-1.262-22.496-27.372-38.067-34.458-13.275-6.041-28.841-9.952-46.168-12.226z"
                                            opacity="1" data-original="#80b6fc"></path>
                                        <path fill="#eec06b"
                                            d="M349.445 396.974c-8.414-13.738-20.839-23.747-36.408-30.833l-6.656 20.522c-2.231 6.878 2.897 13.932 10.128 13.932h34.588a16.731 16.731 0 0 0-1.652-3.621z"
                                            opacity="1" data-original="#eec06b"></path>
                                        <path fill="#62a4fb"
                                            d="M351.928 431.06v-16.717c-1.738 4.507-5.777 8.151-11.087 9.661l-33.414 9.502H9.449c-2.419 0-4.63-.846-6.298-2.223l3.096 18.792a9.096 9.096 0 0 0 8.974 7.617h292.154l32.761-10.481a16.958 16.958 0 0 0 11.792-16.151z"
                                            opacity="1" data-original="#62a4fb"></path>
                                        <path fill="#8c818f"
                                            d="M133.796 292.848h-19.491l-32.406 51.97c-2.468 3.959.378 9.088 5.043 9.088h179.93l-25.35-21.512a166.5 166.5 0 0 0-86.133-38.141c-3.759 3.135-7.452 2.519-10.149-1.012a166.925 166.925 0 0 0-11.444-.393z"
                                            opacity="1" data-original="#8c818f"></path>
                                        <circle cx="64.921" cy="447.247" r="31.461" fill="#ddebfd" opacity="1"
                                            data-original="#ddebfd"></circle>
                                        <path fill="#766d78"
                                            d="M64.921 486.319c-21.544 0-39.072-17.528-39.072-39.072s17.528-39.072 39.072-39.072 39.072 17.528 39.072 39.072-17.528 39.072-39.072 39.072zm0-62.922c-13.151 0-23.849 10.699-23.849 23.849 0 13.151 10.699 23.849 23.849 23.849s23.849-10.699 23.849-23.849-10.699-23.849-23.849-23.849z"
                                            opacity="1" data-original="#766d78" class=""></path>
                                        <circle cx="275.266" cy="447.247" r="31.461" fill="#ddebfd" opacity="1"
                                            data-original="#ddebfd"></circle>
                                        <path fill="#766d78"
                                            d="M275.267 486.319c-21.544 0-39.072-17.528-39.072-39.072s17.528-39.072 39.072-39.072 39.072 17.528 39.072 39.072-17.528 39.072-39.072 39.072zm0-62.922c-13.151 0-23.849 10.699-23.849 23.849 0 13.151 10.699 23.849 23.849 23.849s23.849-10.699 23.849-23.849-10.699-23.849-23.849-23.849z"
                                            opacity="1" data-original="#766d78" class=""></path>
                                        <path fill="#80b6fc"
                                            d="M150.314 373.866a5.074 5.074 0 0 0 5.074-5.074v-74.533c-3.365-.44-6.75-.779-10.149-1.012v75.546a5.075 5.075 0 0 0 5.075 5.073z"
                                            opacity="1" data-original="#80b6fc"></path>
                                        <path fill="#df646e"
                                            d="M377.191 30.027v73.423l57.09-29.856c5.534-2.894 5.534-10.815 0-13.71z"
                                            opacity="1" data-original="#df646e"></path>
                                        <path fill="#8c818f"
                                            d="M377.191 170.894a7.103 7.103 0 0 1-7.104-7.104V32.785c0-3.924 3.18-7.104 7.104-7.104s7.104 3.18 7.104 7.104V163.79a7.103 7.103 0 0 1-7.104 7.104z"
                                            opacity="1" data-original="#8c818f"></path>
                                        <path fill="#eec06b"
                                            d="M413.763 201.369H340.62c-2.174 0-3.647-2.213-2.809-4.218l12.637-30.242a5.075 5.075 0 0 1 4.682-3.118h44.123a5.073 5.073 0 0 1 4.682 3.118l12.637 30.242c.838 2.005-.635 4.218-2.809 4.218z"
                                            opacity="1" data-original="#eec06b"></path>
                                        <path fill="#77d1b3"
                                            d="M434.657 415.053h-30.799a7.611 7.611 0 1 1 0-15.223h30.799c34.253 0 62.12-27.867 62.12-62.121 0-34.253-27.867-62.12-62.12-62.12H224.486c-42.647 0-77.344-34.697-77.344-77.344s34.697-77.343 77.344-77.343h81.551c4.204 0 7.611 3.407 7.611 7.611s-3.407 7.611-7.611 7.611h-81.551c-34.254 0-62.121 27.867-62.121 62.12 0 34.254 27.867 62.121 62.121 62.121h210.171c42.647 0 77.343 34.696 77.343 77.343s-34.696 77.345-77.343 77.345z"
                                            opacity="1" data-original="#77d1b3"></path>
                                        <path fill="#df646e"
                                            d="M381.73 437.181c-4.204 0-7.612-3.407-7.612-7.612s3.407-7.611 7.612-7.611c8.004 0 14.516-6.512 14.516-14.516 0-8.005-6.512-14.517-14.516-14.517-4.204 0-7.612-3.407-7.612-7.612s3.407-7.611 7.612-7.611c16.398 0 29.739 13.342 29.739 29.74s-13.34 29.739-29.739 29.739z"
                                            opacity="1" data-original="#df646e"></path>
                                        <path fill="#77d1b3"
                                            d="M279.978 159.837a7.613 7.613 0 0 1-5.125-13.242l19.873-18.081-19.873-18.081a7.613 7.613 0 0 1 10.246-11.26l26.06 23.712a7.615 7.615 0 0 1 0 11.26l-26.06 23.712a7.595 7.595 0 0 1-5.121 1.98z"
                                            opacity="1" data-original="#77d1b3"></path>
                                    </g>
                                </svg>
                            </div>
                            <h5 class="mb-3 highlight_color2 fw-bold fs-4 text-center">Just Drive</h5>
                            <p class="text-white ws-2 ff-second fs-6 text-center fw-medium">Enjoy your ride</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="services py-80 position-relative bg-light overflow-hidden">
    <div class="service-img position-absolute top-0 start-0 w-100 h-100">
        <img src="https://madhavtechinfo.000webhostapp.com/assets/img/services.png" alt="" class="w-100 background_img">
    </div>
    <div class="container z-2 position-relative d-flex flex-wrap align-items-center">
        <div class="col-lg-3 col-12 text-start">
            <h2 class="fs-2 text-web-primary ff-second">Why Ride With Khodiyar?</h2>
        </div>
        <div class="col-lg-9 col-12 row">
            <div class="col-12 col-md-6 col-xl-4 mt-5 pt-5">
                <div class="services-box h-100 bg-white py-80 pb-5 px-4 text-start shadow position-relative">
                    <div class="services-icon-box p-4 shadow rounded-5 position-absolute top-0 start-50">
                        <img src="https://madhavtechinfo.000webhostapp.com/assets/img/ig-1.svg" alt="svg" class="w-100">
                    </div>
                    <h3 class="fw-bolder fs-5 mb-3 pb-3 ff-first position-relative">Level to Level</h3>
                    <p class="fs-14 text-gray ff-second overflow-y-scroll scroll-none">Pickup & return with same level
                        of fuel.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 mt-5 pt-5">
                <div class="services-box h-100 bg-white py-80 pb-5 px-4 text-start shadow position-relative">
                    <div class="services-icon-box p-4 shadow rounded-5 position-absolute top-0 start-50">
                        <img src="https://madhavtechinfo.000webhostapp.com/assets/img/ig-2.svg" alt="svg" class="w-100">
                    </div>
                    <h3 class="fw-bolder fs-5 mb-3 pb-3 ff-first position-relative">Doorstep Car Delivery</h3>
                    <p class="fs-14 text-gray ff-second overflow-y-scroll scroll-none">Get door to door delivery and
                        pickup.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 mt-5 pt-5">
                <div class="services-box h-100 bg-white py-80 pb-5 px-4 text-start shadow position-relative">
                    <div class="services-icon-box p-4 shadow rounded-5 position-absolute top-0 start-50">
                        <img src="https://madhavtechinfo.000webhostapp.com/assets/img/ig-3.svg" alt="svg" class="w-100">
                    </div>
                    <h3 class="fw-bolder fs-5 mb-3 pb-3 ff-first position-relative">24/7 Roadside Assistence</h3>
                    <p class="fs-14 text-gray ff-second overflow-y-scroll scroll-none">You drive to adventures, we get
                        it. we and our roadside assistance partners</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'partials/footer.php'; ?>

<?php // include 'terms-and-conditions.php'; ?>


<script>
    //  $(document).ready(function () {
    //     var images = [
    //         'pexels-руслан-дремо-19039183.jpg',
    //         'pexels-sajjad-lens-19016180.jpg',
    //         'pexels-csegedi-joszef-19002745.jpg'
    //         // Add more image URLs as needed
    //     ];
    //     var img_url = "<?php echo base_url('') ?>assets/images/baner_img/";
    //     var currentIndex = 0;
    //     var background = $('.background-imgs');

    //     function changeBackground() {
    //         background.fadeOut(1000, function () {
    //             background.css('background-image', 'url(' + img_url + images[currentIndex] + ')');
    //             background.fadeIn(1000);
    //         });
    //         currentIndex = (currentIndex + 1) % images.length;
    //     }

    //     // Change background image every 5 seconds
    //     setInterval(changeBackground, 2000);
    // });
    // insert data 
    $(document).ready(function () {
        // $('.selectpicker').selectpicker();
        $('.date').bootstrapMaterialDatePicker({
			time: false,
			format: 'DD-MM-YYYY',
			okText: 'ok',
			clearText: 'clear',
        });

        $('.time').bootstrapMaterialDatePicker({
			date: false,
			format: 'H:m',
			okText: 'ok',
			clearText: 'clear',
        });

        $('body').on('click', '.book_now', function (event) {
            //$("form[name='user_form']")[0].reset();
            // alert("hello");
            event.preventDefault();
            // var editid = $(this).attr("data-edit_id");
            var city = $('#city').val();
            var start_date = $('#start_date').val();
            var start_time = $('#start_time').val();
            var end_date = $('#end_date').val();
            var end_time = $('#end_time').val();
        
            if ( city != "" && start_date != "" && start_time != "" && end_date != "" && end_time != "" ) {
                var form = $("form[name='booking_form']")[0];
                var formdata = new FormData(form);

                formdata.append('table', 'car_booking');
                formdata.append('action', 'insert');


                // if (editid == '' || editid == 'undefined') {
                    $('.loader').show();

                    $.ajax({
                        method: "post",
                        url: "<?= site_url('booking_insert_data'); ?>",
                        data:  formdata,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            var response = JSON.parse(data);
                            // console.log(response);
                            if (response.response == 1) {
                                //if (data != "error") {
                                $('.loader').hide();
                                // list_data();
                                // $(".modal-close-btn").trigger("click");
                                $("form[name='booking_form']").removeClass("was-validated");

                                window.location.href = "<?= base_url('') ?>carlist?startdate="+response.data.start_date+'_'+response.data.start_time+"&enddate="+response.data.end_date+'_'+response.data.end_time+"&city="+city;


                                // $('.modal-close-btn').click(function () {
                                //     $('form[name="user_form"]')[0].reset();
                                //     $('.selectpicker').selectpicker('refresh');

                                // });
                                // iziToast.success({
                                //     title: response.message
                                // });
                                //sweet_edit_sucess(response.message);
                            } else {
                                $('.loader').hide();
                                // iziToast.error({
                                //     title: response.message
                                // });
                            }
                        }
                    });
                // }
            } else {
                $('.loader').hide();
                $("form[name='booking_form']").addClass("was-validated");
                $("form[name='booking_form']").find('.selectpicker').each(function () {
                    var selectpicker_valid = 0;
                    if ($(this).attr('required') == 'undefined') {
                        var selectpicker_valid = 0;
                    }
                    if ($(this).attr('required') == 'required') {
                        var selectpicker_valid = 1;
                    }
                    if (selectpicker_valid == 1) {
                        if ($(this).val() == 0 || $(this).val() == '') {
                            $(this).closest("div").addClass('selectpicker-validation');
                        } else {
                            $(this).closest("div").removeClass('selectpicker-validation');
                        }
                    } else {
                        $(this).closest("div").removeClass('selectpicker-validation');
                    }
                });
                $('.loader').hide();
            }
        });
    });
</script>