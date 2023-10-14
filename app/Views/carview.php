<?php include 'partials/header.php'; ?>

<section class="py-50">
    <div class="container">
        <div class="row">
            <div class="mb-5 rounded p-4 text-center title-bg">
                <h2>Booking Confirmation</h2>
            </div>
            <div class="col-lg-6 col-12 order-lg-0 order-1">
                <div class="shadow p-4 rounded bg-white">
                    <div class="mb-3 text-start text-dark fw-bold">
                        <h2>Honda Brio</h2>
                        <h6><span class="text-secondary-emphasis">Total Hour </span>34</h6>
                    </div>

                    <div class="mb-3 shadow-sm p-3 rounded bg-white border border-dark-subtle">
                        <div class="content">
                            <span class="text-dark">Start Date : </span>
                            <span class="p-text-primary"> Oct 13, 2023 at 22:00</span>
                        </div>
                        <div class="content">
                            <span class="text-dark">End Date : </span>
                            <span class="p-text-primary"> Oct 15, 2023 at 8:00</span>
                        </div>
                        <div class="content">
                            <span class="text-dark">Pickup & Drop Address : </span>
                            <span class="p-text-primary"> Just Drive Parking Lot, Opp. Nishal Arcade, Pal, Adajan, Surat</span>
                        </div>
                    </div>

                    <div class="mb-3 shadow-sm p-3 rounded bg-white border border-dark-subtle">
                        <div class="d-flex flex-wrap">
                            <div class="item d-flex align-items-center">
                                <i class="fa-solid fa-users"></i>
                                <p class="ms-2">5 seater</p>
                            </div>
                            <div class="item d-flex align-items-center">
                                <i class="fa-solid fa-gears"></i>
                                <p class="ms-2">Menual</p>
                            </div>
                            <div class="item d-flex align-items-center">
                                <i class="fa-solid fa-briefcase"></i>
                                <p class="ms-2">2 Bag</p>
                            </div>
                            <div class="item d-flex align-items-center">
                                <i class="fa-solid fa-person"></i>
                                <p class="ms-2">18+ Age</p>
                            </div>
                            <div class="item d-flex align-items-center">
                                <i class="fa-solid fa-gas-pump"></i>
                                <p class="ms-2">Level To Leve</p>   
                            </div>
                            <div class="item d-flex align-items-center">
                                <i class="fa-solid fa-gauge"></i>
                                <p class="ms-2">Unlimited KM</p>   
                            </div>
                        </div>
                    </div>

                    <div class="contant">
                        <label class="mb-3">
                            <input type="checkbox" name="drop_facility" id="drop_facility">        
                            <span>Pickup &amp; Drop Facility.</span>
                        </label>
                        <h5><span class="text-dark">Total Cost : <span class="p-text-primary">₹2,779.50</span></span></h5>
                        <h5>+ Pickup & Drop Add on charge : Chargeable</h5>
                        <h5>+ Security Deposit Payable After Booking.</h5>
                        <h4 class="mt-3"><span class="text-dark">Grand Total : <span class="p-text-primary">₹2,779.50</span></span></h4>
                        <button id="carview" data-view_id="1001" class="btn btn-danger book-btn book_now     carview mt-3">Book Now</button>
                        <button id="carview" data-view_id="1001" class="btn btn-dark book-btn carview mt-3">Cancel    </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 order-lg-1 order-0">
                <div class="mb-4 shadow rounded bg-white">
                    <img src="<?=base_url('assets/img/car1.png') ?>" alt="" class="w-100" style="max-height : 500px; object-fit: contain;">
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