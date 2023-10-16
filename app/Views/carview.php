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
<<<<<<< HEAD
                        <button id="carview" data-view_id="1001" class="btn btn-danger book-btn book_now     carview mt-3">Book Now</button>
                        <button id="carview" data-view_id="1001" class="btn btn-dark book-btn carview mt-3">Cancel    </button>
=======
                        <button type="button" id="carview" data-view_id="1001" class="btn btn-danger book-btn carview mt-3" data-bs-toggle="modal" data-bs-target="#book_car">Book Now</button>
                        <button id="cancel_car" data-view_id="1001" class="btn btn-dark book-btn carview mt-3">Cancel</button>
>>>>>>> 072c535008a9324b42a03f2f865285dab02627e4
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

<<<<<<< HEAD
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
=======

<!-- Modal -->
<div class="modal fade" id="book_car" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
    <div class="modal-content">
    <div class="modal-header">
        <div class="title">
            <h4>Inquiry For a Book Car</h4>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body modal-bg">
        <form name="bppk_car">
            <div class="card-body d-flex flex-wrap">
            <div class="form-group col-sm-4 col-12 px-2 mb-2">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group col-sm-4 col-12 px-2 mb-2">
                <label for="mobileno">Mobileno</label>
                <input type="text" class="form-control" id="mobileno" placeholder="Mobileno">
            </div>
            <div class="form-group col-sm-4 col-12 px-2 mb-2">
                <label for="mobileno">Address</label>
                <input type="text" class="form-control" id="mobileno" placeholder="Address">
            </div>
            <div class="form-group col-sm-6 col-12 px-2 mb-2">
                <label>Aadhar Card Photo</label>
                <input type="file" name="aadhar_card_img" class="form-control file-upload-default">
            </div>
            <div class="form-group col-sm-6 col-12 px-2 mb-2">
                <label>PanCard Photo</label>
                <input type="file" name="pancard_img" class="form-control file-upload-default">
            </div>
            <div class="form-group col-sm-6 col-12 px-2 mb-2">
                <label for="aadhar_card_number">Aadhar card Number</label>
                <input type="text" class="form-control" id="aadhar_card_number" placeholder="Aadhar card Number">
            </div>
            <div class="form-group col-sm-6 col-12 px-2 mb-2">
                <label for="pancard_number">Pancard Number</label>
                <input type="text" class="form-control" id="pancard_number" placeholder="Pancard Number">
            </div>
            <div class="form-group col-sm-4 col-12 px-2 mb-2">
                <label for="exampleInputPassword4">Bag / Luggage</label>
                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Menual">
            </div>
            <div class="form-group col-sm-6 col-12 px-2 mb-2">
                <label for="exampleInputCity1">Age</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Age">
            </div>
        </form>
    </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-danger" id="book_btn">Submit</button>
    </div>
    </div>
</div>
</div>

<?php include 'partials/footer.php'; ?>

<script>
    $(document).ready(function(){
        $('#book_btn').on('click',function(e){
            var form = $('form[name="bppk_car"]')[0];
            var formdata = new FormData(form);
            $.ajax({
                method: "post",
                url: "<?= site_url('book_car'); ?>",
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
        });
    });
>>>>>>> 072c535008a9324b42a03f2f865285dab02627e4
</script>