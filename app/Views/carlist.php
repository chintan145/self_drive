<?php include 'partials/header.php'; ?>
<?php $car_features = json_decode($car_features, true);
if (isset($_GET['startdate']) && $_GET['startdate'] != '_') {
    $startDateString = str_replace('_', ' ', $_GET['startdate']);
    $startDate = new DateTime($startDateString);
} else {
    $startDateString = '';
    $startDate = '';
?>
    <script>
        window.location.href = "<?= base_url(); ?>";
    </script>
<?php
    die();
}
if (isset($_GET['enddate']) && $_GET['enddate'] != '_') {
    $endDateString = str_replace('_', ' ', $_GET['enddate']);
    $endDate = new DateTime($endDateString);
} else {
    $endDateString = '';
    $endDate = '';
?>
    <script>
        window.location.href = "<?= base_url(); ?>";
    </script>
<?php
    die();
}

if (!isset($_GET['city'])) {
?>
    <script>
        window.location.href = "<?= base_url(); ?>";
    </script>
<?php
    die();
}

if (isset($_GET['startdate']) && isset($_GET['startdate'])) {
    $interval = $startDate->diff($endDate);

    $totalHours = $interval->days * 24 + $interval->h;
} else {
    $totalHours = '';
}

?>
<style>
    .py-30 {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .main-img {
        width: 100%;
        background-image: url(<?= base_url('assets/images/baner_img/pexels-csegedi-joszef-19002745.jpg'); ?>); 
        background-position: center;
    }


    .bgtb {
        background: rgb(255, 255, 255);
        background: linear-gradient(0deg, rgba(255, 255, 255, 1) 0%, rgba(255, 28, 28, 1) 43%);
    }

    .book-btn {
        background-color: rgba(255, 28, 28, .5) !important;
        color: #ffffff !important;
        font-size: 16px;
        padding: 7px 10px;
        border-radius: 5px;
    }
</style>
<section class="py-50 text-center bg2 mian-section main-img">
    <div class="container">
        <div class="row py-50">
            <h2 class="text-white">Book a Car</h2>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row d-flex flex-wrap">
            <div class="col-12 p-3 order-1 order-lg-0">
                <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <!-- <h6 class="mb-4">Prices For :</h6> -->
                    <div class="fromtodate d-flex flex-lg-row flex-column">
                        <h6 class=""><b>From :</b> <span class="text-danger start_date"><?php echo $startDateString; ?></span></h6>
                        <h6 class="ms-lg-4 ms-0"><b>To :</b> <span class="text-danger end_date"><?php echo $endDateString; ?></span></h6>
                        <h6 class="ms-lg-4 ms-0"><b>Total Hour :</b> <span class="text-danger total_hour"><?php echo $totalHours; ?></span></h6>
                    </div>
                    <?php
                    foreach ($car_features as $value) { ?>
                        <div class="shadow-sm p-3 mb-2 p-2 bg-body-tertiary rounded d-flex flex-wrap align-items-center">
                            <div class="col-lg-3 col-12 p-2">
                                <img src="<?= base_url('/assets/images/carimages/').$value['car_image']; ?>" alt="" class="w-100" style="max-height: 170px; object-fit: contain;">
                            </div>
                            <div class="col-lg-7 col-12">
                                <h4><?php echo $value['car_name']; ?></h4>
                                <div class="d-flex flex-wrap mt-3">
                                    <div class="item d-flex align-items-center">
                                        <i class="fa-solid fa-users"></i>
                                        <span class="ms-2"><?php echo $value['seater']; ?> seater</span>
                                    </div>
                                    <div class="item d-flex align-items-center">
                                        <i class="fa-solid fa-gears"></i>
                                        <span class="ms-2"><?php echo $value['gear']; ?></span>
                                    </div>
                                    <div class="item d-flex align-items-center">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <span class="ms-2"><?php echo $value['bag_allow']; ?> Bag</span>
                                    </div>
                                    <div class="item d-flex align-items-center">
                                        <i class="fa-solid fa-person"></i>
                                        <span class="ms-2"><?php echo $value['age']; ?>+ Age</span>
                                    </div>
                                    <div class="item d-flex align-items-center">
                                        <i class="fa-solid fa-gas-pump"></i>
                                        <span class="ms-2"><?php echo $value['fuel']; ?></span>
                                    </div>
                                    <div class="item d-flex align-items-center">
                                        <i class="fa-solid fa-gauge"></i>
                                        <span class="ms-2"><?php echo $value['km']; ?> KM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-12 text-end">
                                <h6>₹<?= (int) ($value['price'] / 24) * $totalHours ?>/-</h6>
                                <button id="carview" data-view_id="<?= $value['id'] ?>" class="btn btn-danger book-btn carview">Book Now</button>
                            </div>
                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>

<script>
    $(document).ready(function() {
        $('body').on('click', '.carview', function(e) {
            e.preventDefault();
            var view_id = $(this).data('view_id');
            var url = '<?= base_url('/carview') ?>';
            var start_date = $('.start_date').text();
            var end_date = $('.end_date').text();
            var total_hour = $('.total_hour').text();
            var city = '<?php echo isset($_GET['city']) &&  $_GET['city'] != '' ? $_GET['city'] : ''; ?>';
            var price = '<?= (int) ($value['price'] / 24) * $totalHours ?>';

            start_date = start_date.replace(' ','_');
            end_date = end_date.replace(' ','_');
            total_hour = total_hour.replace(' ','_');

            window.location.href = url + '?view_id=' + view_id+'&'+"startdate="+start_date+"&enddate="+end_date+"&totalhour="+total_hour+'&city='+city+'&price='+price;
        });

        
    });
</script>