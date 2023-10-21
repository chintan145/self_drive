<?php include 'partials/header.php'; ?>
<?php $car_features = json_decode($car_features,true); 
if(isset($_GET['startdate'])){
    $startDateString = str_replace('_',' ',$_GET['startdate']);
    $startDate = new DateTime($startDateString);
} else {
    $startDateString = '';
    $startDate = '';
    ?>
        <script>
            window.location.href = "<?= base_url(); ?>";
        </script>
    <?php
}
if(isset($_GET['startdate'])){
    $endDateString = str_replace('_',' ',$_GET['enddate']);
    $endDate = new DateTime($endDateString);
} else {
    $endDateString = '';
    $endDate = '';
    ?>
        <script>
            window.location.href = "<?= base_url(); ?>";
        </script>
    <?php
}

if(isset($_GET['startdate']) && isset($_GET['startdate'])){
    $interval = $startDate->diff($endDate);
    
    $totalHours = $interval->days * 24 + $interval->h;
} else {
    $totalHours = '';

}

?>
<style>
    .py-30{
        padding-top: 30px;
        padding-bottom: 30px;
    }
    .bg2{
        background: rgb(255,28,28);
        background: linear-gradient(90deg, rgba(255,28,28,1) 63%, rgba(255,255,255,1) 100%);
    }
    .bgtb{
        background: rgb(255,255,255);
        background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(255,28,28,1) 43%);
    }
    
    .book-btn{
        background-color: rgba(255,28,28,.5) !important;
        color: #ffffff !important;
        font-size : 16px;
        padding : 7px 10px;
        border-radius : 5px;
    }
</style>
<section class="py-50 text-center bg2">
    <div class="container">
        <div class="row">
            <h2 class="text-white">Book a Car</h2>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row d-flex flex-wrap">
            <div class="col-lg-8 col-12 p-3 order-1 order-lg-0">
                <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <h6 class="mb-4">Prices For :</h6>
                    <div class="fromtodate d-flex flex-lg-row flex-column">
                        <h6 class=""><b>From :</b> <span class="text-danger"><?php echo $startDateString; ?></span></h6>
                        <h6 class="ms-lg-4 ms-0"><b>To :</b> <span class="text-danger"><?php echo $endDateString; ?></span></h6>
                        <h6 class="ms-lg-4 ms-0"><b>Total Hour :</b> <span class="text-danger"><?php echo $totalHours; ?></span></h6>
                    </div>
                    <?php
foreach ($car_features as $value) { ?>
    <div class="shadow-sm p-3 mb-2 bg-body-tertiary rounded d-flex flex-wrap align-items-center">
        <div class="col-lg-3 col-12">
            <img src="<?= base_url('assets/img/car1.png') ?>" alt="" class="w-100" style="max-height: 170px; object-fit: contain;">
        </div>
        <div class="col-lg-7 col-12">
            <h3><?php echo $value['car_name']; ?></h3>
            <div class="d-flex flex-wrap mt-3">
                <div class="item d-flex align-items-center">
                    <i class="fa-solid fa-users"></i>
                    <p class="ms-2"><?php echo $value['seater']; ?> seater</p>
                </div>
                <div class="item d-flex align-items-center">
                    <i class="fa-solid fa-gears"></i>
                    <p class="ms-2"><?php echo $value['gear']; ?></p>
                </div>
                <div class="item d-flex align-items-center">
                    <i class="fa-solid fa-briefcase"></i>
                    <p class="ms-2"><?php echo $value['bag_allow']; ?> Bag</p>
                </div>
                <div class="item d-flex align-items-center">
                    <i class="fa-solid fa-person"></i>
                    <p class="ms-2"><?php echo $value['age']; ?>+ Age</p>
                </div>
                <div class="item d-flex align-items-center">
                    <i class="fa-solid fa-gas-pump"></i>
                    <p class="ms-2"><?php echo $value['fuel']; ?></p>
                </div>
                <div class="item d-flex align-items-center">
                    <i class="fa-solid fa-gauge"></i>
                    <p class="ms-2"><?php echo $value['km']; ?> KM</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-12 text-center">
            <h3>₹ 1690/-</h3>
            <button id="carview" data-view_id="1001" class="btn btn-danger book-btn carview">Book Now</button>
        </div>
    </div>
<?php } ?>

                   
                </div>
            </div>
            <div class="col-lg-4 col-12 p-3 order-0 order-lg-1">
                <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <h6>Car Fillter</h6>
                    <div class="d-flex flex-wrap">
                        <div class="col-3 shadow-sm p-3 m-1 bg-body-tertiary rounded text-center align-items-center">
                            <img src="<?=base_url('assets/img/car (1).png') ?>" alt="" class="w-100" style="max-height : 100px; object-fit: contain;">
                            <span class="ms-auto">Premium SedanV</span>
                        </div>
                        <div class="col-3 shadow-sm p-3 m-1 bg-body-tertiary rounded text-center align-items-center">
                            <img src="<?=base_url('assets/img/suv.png') ?>" alt="" class="w-100" style="max-height : 100px; object-fit: contain;">
                            <span class="ms-auto">suv</span>
                        </div>
                        <div class="col-3 shadow-sm p-3 m-1 bg-body-tertiary rounded text-center align-items-center">
                            <img src="<?=base_url('assets/img/car.png') ?>" alt="" class="w-100" style="max-height : 100px; object-fit: contain;">
                            <span class="ms-auto">Compact Sedan</span>
                        </div>
                        <div class="col-3 shadow-sm p-3 m-1 bg-body-tertiary rounded text-center align-items-center">
                            <img src="<?=base_url('assets/img/suv.png') ?>" alt="" class="w-100" style="max-height : 100px; object-fit: contain;">
                            <span class="ms-auto">MUV</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>

<script>
    $(document).ready(function(){
        $('body').on('click','.carview',function(e){
            e.preventDefault();
            var view_id = $(this).data('view_id');
            var url = '<?= base_url('/carview') ?>';

            window.location.href = url+'?view_id='+view_id;
        });
    });
</script>