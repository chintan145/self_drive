<?php include 'partials/header.php'; ?>
<?php 
 

if (isset($_GET['startdate'])) {
    $startDateString = str_replace('_', ' ', $_GET['startdate']);
    $startDate = new DateTime($startDateString);
} else {
    $startDateString = '';
    $startDate = '';
}

if (isset($_GET['enddate'])) {
    $endDateString = str_replace('_', ' ', $_GET['enddate']);
    $endDate = new DateTime($endDateString);
} else {
    $endDateString = '';
    $endDate = '';
}

if (isset($_GET['totalhour'])) {
    $hours = $_GET['totalhour'];
    // $endDate = new DateTime($endDateString);
} else {
    $hours = '';
}

?>
<section class="py-50">
    <div class="container">
        <div class="row">
            <div class="mb-5 rounded p-4 text-center bg-white">
                <h2>Booking Confirmation</h2>
            </div>
            <div class="col-lg-6 col-12 order-lg-0 order-1">
                <div class="shadow p-4 rounded bg-white">
                    <div class="mb-3 text-start text-dark fw-bold">
                        <h2 class="car_name">Honda Brio</h2>
                        <h6><span class="text-secondary-emphasis">Total Hour </span><?= $hours; ?></h6>
                    </div>

                    <div class="mb-3 shadow-sm p-3 rounded bg-white border border-dark-subtle">
                        <div class="content">
                            <span class="text-dark">Start Date : </span>
                            <span class="p-text-primary startDateString"><?= $startDateString ?></span>
                        </div>
                        <div class="content">
                            <span class="text-dark">End Date : </span>
                            <span class="p-text-primary endDateString"><?= $endDateString ?></span>
                        </div>
                        <div class="content">
                            <span class="text-dark">Pickup & Drop Address : </span>
                            <span class="p-text-primary pickup_address"> Just Drive Parking Lot, Opp. Nishal Arcade, Pal, Adajan, Surat</span>
                        </div>
                    </div>

                    <div class="mb-3 shadow-sm p-3 rounded bg-white border border-dark-subtle">
                        <div class="d-flex flex-wrap">
                            <div class="item d-flex align-items-center">
                                <i class="fa-solid fa-users"></i>
                                <span class="ms-2 d-flex"><div class="seater">5</div> seater</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <i class="fa-solid fa-gears"></i>
                                <span class="ms-2 d-flex gear">Menual</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <i class="fa-solid fa-briefcase"></i>
                                <span class="ms-2 d-flex"><div class="bag_allow">2</div> Bag</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <i class="fa-solid fa-person"></i>
                                <span class="ms-2 d-flex">18+ Age</span>
                            </div>
                            <div class="item d-flex align-items-center">
                                <i class="fa-solid fa-gas-pump"></i>
                                <span class="ms-2 d-flex fuel">Level To Leve</span>   
                            </div>
                            <div class="item d-flex align-items-center">
                                <i class="fa-solid fa-gauge"></i>
                                <span class="ms-2 d-flex"><div class="km"></div> KM</span>   
                            </div>
                        </div>
                    </div>

                    <div class="contant">
                        <form name="proof_data">
                            <label class="mb-3">
                                <span>Mobile Number</span>
                                <input type="number" name="mobileno" id="mobileno" class="form-control">        
                            </label>
                            <label class="mb-3">
                                <span>Driving License</span>
                                <input type="file" name="driving_license" id="driving_license" class="form-control">        
                            </label>
                            <label class="mb-3">
                                <span>Addar Card Photo</span>
                                <input type="file" name="addar_card" id="addar_card" class="form-control">        
                            </label>
                            <label class="mb-3">
                                <span>Pan Card Photo</span>
                                <input type="file" name="pan_card" id="pan_card"  class="form-control">        
                            </label>
                        </form>
                        <label class="mb-3">
                            <input type="checkbox" name="drop_facility" id="drop_facility">        
                            <span>Pickup &amp; Drop Facility.</span>
                        </label>
                        <h5><span class="text-dark">Total Cost : <span class="p-text-primary d-flex">₹<div class="price">2,779.50</div>/-</span></span></h5>
                        <h5>+ Pickup & Drop Add on charge : Chargeable</h5>
                        <h5>+ Security Deposit Payable After Booking.</h5>
                        <h4 class="mt-3"><span class="text-dark">Grand Total : <span class="p-text-primary d-flex">₹<div class="price">2,779.50</div>/-</span></span></h4>
                        <button id="book-btn" data-view_id="1001" class="btn btn-dark book-btn carview mt-3">Book Now</button>
                        <button id="cancelcarview" data-view_id="1001" class="btn btn-dark book-btn carview mt-3">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 order-lg-0 order-1">
                <div class="shadow p-2 rounded bg-white">
                    <img src="<?=base_url('assets/img/car1.png') ?>" alt="" class="w-100 car_image" style="max-height : 500px; object-fit: contain;">
                </div>
                <div class="shadow rounded bg-white p-4">
                    <h5 class="mb-3">Important Points to Remember</h5>
                    <table class="table" style="font-size: 12px;">
                        <tbody>
                            <tr>
                                <td>PENALTY:</td>
                                <td>In case of damage, the user will have to pay deposit. (Min: INR 5000 Max: As per damage)</td>
                            </tr>
                            <tr>
                                <td>FUEL:</td>
                                <td>Level to Level. Pickup &amp; return with same level of fuel. </td>
                            </tr>
                            <tr>
                                <td>TOLLS, PARKING, INTER-STATE TAXES:</td>
                                <td>To be paid by you.</td>
                            </tr>
                            <tr>
                                <td>ID VERIFICATION:</td>
                                <td>Please keep your original Driving License handy. While delivering the car to you, our executive will verify your original Driving License and ID proof (same as the ones whose details were provided while making the booking). This verification is mandatory. In the unfortunate case where you cannot show these documents, we will not be able to handover the car to you, and it will be treated as a late cancellation (100% of the fare would be payable). Driving license printed on an A4 sheet of paper (original or otherwise) will not be considered as a valid document.</td>
                            </tr>
                            <tr>
                                <td>PRE-HANDOVER INSPECTION:</td>
                                <td>Please inspect the car (including the fuel gauge and odometer) thoroughly before approving the checklist.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <div class="col-lg-6 col-12 order-lg-0 order-1">
            </div> -->
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>

<script>
        $('body').on('click','.book_now',function(e){
            e.preventDefault();
            // var view_id = $(this).data('view_id');
            var url = '<?= base_url('/carlist') ?>';

            window.location.href = url;
        });


        function view_data() {
            var view_id = '<?= isset($_GET['view_id']) ? $_GET['view_id'] : '' ?>';
            console.log(view_id);
            var img_url = '<?= base_url('/assets/images/carimages/'); ?>'
            $.ajax({
                method: "post",
                url: "<?= site_url('view_car_data'); ?>",
                data:  {
                    'view_id' : view_id,
                    'table' : 'car_features',
                },
                success: function (data) {
                    var res = JSON.parse(data);
                    // console.log(res);
                    $('.car_image').attr('src',img_url+res.car_image);
                    $.each(res,function( key,index ) {
                        if(key != 'car_image'){
                            $('.'+key).text(index);
                        }
                    });
                }
            });
        }
        view_data();

        $('#book-btn').on('click',function(){
            var form = $('form[name="proof_data"]')[0];
            var formdata = new FormData(form);
            var addar_card = $('#addar_card').val();
            var number = $('#mobileno').val();
            var pan_card = $('#pan_card').val();
            var driving_license = $('#driving_license').val();
            var user_id = '<?= $_SESSION['id']; ?>';
            var car_id = '<?= $_GET['view_id']; ?>';
            var startDateString = $('.startDateString').text();
            var endDateString = $('.endDateString').text();
            var city = '<?= $_GET['city']; ?>';
            // console.log(user_id);
            formdata.append('user_id',user_id);
            formdata.append('car_id',car_id);
            formdata.append('start_date',startDateString);
            formdata.append('end_date',endDateString);
            formdata.append('city',city);
            // if(number != '' && addar_card != '' && pan_card != '' && driving_license != ''){
                formdata.append('drop_facility',1);
                $.ajax({
                    method: "post",
                    url: "<?= site_url('booking_data_insert'); ?>",
                    data:  formdata,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        var res = JSON.parse(data);
                        if(res.response = 1) {
                            iziToast.success({
                                timeout: 3000,
                                messageColor: '#000000',
                                titleColor: '#008000',
                                iconColor: '#008000',
                                backgroundColor: 'fff',
                                position: 'topCenter',
                                title: 'Success',
                                message: 'Successfully recorded Your Data!,We are Contact You Soon',
                            });
                            setTimeout(function(){
                                window.location.href = '<?= base_url('/thankyoupage'); ?>'; 
                            },3000);
                        }
                    }
                });
            // }
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
        
        
            // console.log(city);
            // console.log(start_date);
            // console.log(start_time);
            // console.log(end_date);
            // console.log(end_time);




            // if (username != "" && phone != "" && firstname != "" && email != "" && role != "" && department != "" && active_form_time != "" && active_to_time != "" && mob_allocation != "" && job_location != "" && head != "" && head_name != "" && head_name != undefined && head != undefined) {
                var form = $("form[name='booking_form']")[0];
                console.log(form);
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
                // else {
                //     var is_attendance = $("#Adduser input[name='is_attendance']:checked").prop('value');
                //     var form = $("form[name='user_form']")[0];
                //     var formdata = new FormData(form);

                //     formdata.append('job_location_id', job_location_id);
                //     formdata.append('head_name', head_name);
                //     formdata.append('username', username);
                //     formdata.append('department', department);
                //     formdata.append('action', 'update');
                //     formdata.append('edit_id', editid);
                //     formdata.append('table', 'user');
                //     formdata.append('parent_id', parent_id);
                //     formdata.append('is_attendance', is_attendance);
                //     $('.loader').show();
                //     $.ajax({
                //         method: "post",
                //         url: "<?= site_url('user_update'); ?>",
                //         data: formdata,
                //         processData: false,
                //         contentType: false,
                //         success: function (res) {
                //             var response = JSON.parse(res);
                //             if (response.response == 1) {
                //                 $('.loader').hide();
                //                 list_data();
                //                 $('.modal-close-btn').click(function () {
                //                     $('form[name="user_form"]')[0].reset();
                //                     $('.selectpicker').selectpicker('refresh');
                //                 });
                //                 $("form[name='user_form']").removeClass("was-validated");
                //                 $(".modal-close-btn").trigger("click");
                //                 iziToast.success({
                //                     title: response.msg
                //                 })
                //             } else {
                //                 $('.loader').hide();
                //                 iziToast.warning({
                //                     title: response.msg
                //                 })
                //             }
                //         },
                //         error: function (error) { }
                //     });
                // }
            // } else {
            //     $('.loader').hide();
            //     $("form[name='user_form']").addClass("was-validated");
            //     $("form[name='user_form']").find('.selectpicker').each(function () {
            //         var selectpicker_valid = 0;
            //         if ($(this).attr('required') == 'undefined') {
            //             var selectpicker_valid = 0;
            //         }
            //         if ($(this).attr('required') == 'required') {
            //             var selectpicker_valid = 1;
            //         }
            //         if (selectpicker_valid == 1) {
            //             if ($(this).val() == 0 || $(this).val() == '') {
            //                 $(this).closest("div").addClass('selectpicker-validation');
            //             } else {
            //                 $(this).closest("div").removeClass('selectpicker-validation');
            //             }
            //         } else {
            //             $(this).closest("div").removeClass('selectpicker-validation');
            //         }
            //     });
            //     $('.loader').hide();
            // }
        });
</script>