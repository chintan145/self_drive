<?php include 'partials/header.php' ?>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <?php include 'partials/sidebar.php'; ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="shadow rounded bg-white p-3">
                    <div class="title">
                        <h3>Add Car</h3>
                    </div>
<<<<<<< HEAD
                    <form name="add_car_insert"  method="post" enctype="multipart/form-data">
                    <div class="card-body d-flex flex-wrap">
=======
                    <form name="add_car">
                        <div class="card-body d-flex flex-wrap">
>>>>>>> 072c535008a9324b42a03f2f865285dab02627e4
                        <div class="form-group col-sm-6 col-12">
                            <label for="exampleInputName1">Car Name</label>
                            <input type="text" class="form-control" name="car_name" id="car_name" placeholder="Car Name">
                        </div>
                        <div class="form-group col-sm-6 col-12">
                            <label>Car Photo</label>
                            <!-- <input type="file" name="img[]" class="file-upload-default"> -->
                            <div class="avatar-upload avatar-preview mx-auto">
                                <img src="<?= base_url('assets/images/h-user-theme-m.svg') ?>" alt=""
                                    class="rounded-pill profile-pic" id="imagePreview">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" name="profile_pic"
                                        accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label for="pickup_address">Pickup & Drop Address</label>
                            <input type="text" class="form-control" name ="pickup_address" id="pickup_address" placeholder="Address">
                        </div>
                        <div class="form-group col-sm-4 col-12">
                            <label for="seater">Seater</label>
                            <input type="text" class="form-control" name="seater" id="seater" placeholder="seater">
                        </div>
                        <div class="form-group col-sm-4 col-12">
                            <label for="gear">Gear</label>
                            <select class="form-control" name="gear" id="gear">
                                <option>Auto</option>
                                <option>Menual</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4 col-12">
                            <label for="bag_allow">Bag / Luggage</label>
                            <input type="text" name="bag_allow" class="form-control" id="bag_allow" placeholder="Menual">
                        </div>
                        <div class="form-group col-sm-6 col-12">
                            <label for="age">Age</label>
                            <input type="text" name="age" class="form-control" id="age" placeholder="Age">
                        </div>
                        <div class="form-group col-sm-6 col-12">
                            <label for="fuel">fuel</label>
                            <input type="text" name="fuel" class="form-control" id="fuel" placeholder="fuel">
                        </div>
                        <div class="form-group col-sm-6 col-12">
                            <label for="km">KM</label>
                            <input type="text" name="km" class="form-control" id="km" placeholder="KM">
                        </div>
                        <!-- <div class="form-group col-sm-6 col-12">
                            <label for="exampleInputCity1">KM</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="KM">
                        </div>
                        <div class="form-group col-sm-6 col-12">
                            <label for="exampleInputCity1">KM</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="KM">
                        </div> -->
                        <!-- <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-2 submit_car_inst">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </div> -->
                        <input type="button" value="" class="btn-primary mr-2 submit_car_inst">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php include 'partials/footer.php' ?>
<!-- <script src="jquery-3.7.1.min.js"></script> -->
<script>

function readURL(input) {
    alert();
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').attr('src', "");
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

$(document).ready(function() {

    $("#imageUpload").change(function () {
        readURL(this);
        $('#file_upload').show();
    });
    $('#imageUpload').change(function () {
            var val = $(this).prop('files')[0];
            // console.log(val);
            // filevalidation(val);
        });
        $('body').on('click', '.submit_car_inst', function () {
            //$("form[name='user_form']")[0].reset();
            // alert("hello");
            
            // var editid = $(this).attr("data-edit_id");
            var car_name = $('#car_name').val();
            var pickup_address = $('#pickup_address').val();
            var seater = $('#seater').val();
            var gear = $('#gear').val();
            var bag_allow = $('#bag_allow').val();
            var age = $('#age').val();
            var fuel = $('#fuel').val();
            var km = $('#km').val();

            // if (username != "" && phone != "" && firstname != "" && email != "" && role != "" && department != "" && active_form_time != "" && active_to_time != "" && mob_allocation != "" && job_location != "" && head != "" && head_name != "" && head_name != undefined && head != undefined) {
                var form = $("form[name='add_car_insert']")[0];
                // console.log(form);
                var formdata = new FormData(form);

                // formData.append('image', $('#imageUpload')[0].files[0]);
                formdata.append('table', 'car_features');
                formdata.append('action', 'insert');

                // if (editid == '' || editid == 'undefined') {
                    $('.loader').show();

                    $.ajax({
                        method: "post",
                        url: "<?= site_url('/admin/car_details_insert'); ?>",
                        data:  formdata,
                                processData: false,
                                contentType: false,
                        success: function (data) {
                            var response = JSON.parse(data);
                            if (response.profile_pic != '' && response.profile_pic != undefined) {
                        $('#profile_edit #imagePreview').attr('src', img_user_url + response.profile_pic);
                    }
                            // // console.log(response);
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
    });
</script>