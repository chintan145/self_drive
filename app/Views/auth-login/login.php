<?php 
    // print_r($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MadhavTechInfo</title>
    <link href="https://madhavtechinfo.000webhostapp.com/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://madhavtechinfo.000webhostapp.com/assets/css/style.css" rel="stylesheet">
</head>

<body class="login">

    <section class="py-50 position-relative overflow-hidden d-flex align-items-center justify-content-center my-5">
        <!-- <div class="login-img">
            <img src="https://www.justdrive.co.in/assets/images/login-bg.jpg" alt="" class="w-100 h-100">
        </div> -->

        <div class="container">
            <div class="bg-white z-1 position-relative rounded-4 shadow overflow-hidden">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="col-12 col-md-5 p-4">
                        <h2 class="fs-1 text-web-secondary ff-third mb-3">Log In</h2>
                        <p class="fs-14 fw-normal mb-3 text-gray">If you have an account, sign in with your email or
                            mobile number.</p>
                        <form action="<?php echo base_url('/login'); ?>" method="POST">
                            <div class="mb-3">
                                <label for="user" class="main-lable text-gray">Email/Mobile No *</label>
                                <input type="text" class="form-control" id="user" name="user"
                                    placeholder="Enter Email id / 10 Digit mobile number">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="main-lable text-gray">Password *</label>
                                <input type="text" class="form-control" id="pass" name="pass" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label text-gray" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>
                            <p class="fs-14 fw-medium my-4 text-center text-gray">new here?
                                <a href="javascript:void(0)" class="text-web-secondary text-decoration-none">Sign Up</a>
                            </p>
                            <div class="d-flex flex-wrap align-items-center justify-content-md-between justify-content-center">
                                <div class="col-12 col-md-4 my-2">
                                    <button type="submit" class="btn-web-secondary w-100 login_btn">Login</button>
                                </div>
                                <a href="javascript:void(0)" class="text-gray my-2">Forgot Your Password?</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-6 col-md-6 d-md-block d-none">
                        <div class="login-banner-img bg-white overflow-hidden text-center w-100 d-flex justify-content-center">
                            <img src="https://madhavtechinfo.000webhostapp.com/assets/img/login-img.png" alt="" class="w-100">
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>



    <script src="https://madhavtechinfo.000webhostapp.com/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- <script src="jquery-3.7.1.min.js"></script> -->
<!-- <script>
    $(document).ready(function () {
        $('body').on('click', '.login_btn', function (e) {
            //    alert("sdf");
               e.preventDefault();

               var self = $(this).closest("tr");
               var edit_value = $(this).attr("data-edit_mid");
                
               if (edit_value != "") {
                    $('.loader').hide();
                    $.ajax({
                         type: "post",
                         url: "<?= site_url('simple_edit_data'); ?>",
                         data: {
                              action: 'edit',
                              edit_id: edit_value,
                              table: 'membership'
                         },
                         success: function (res) {
                              $('.loader').hide();
                              // console.log(res);
                              var response = JSON.parse(res);
                              var membershipData = getMembershipData(response[0].membership_id);
                              var membership_name = membershipData.membership_name;
                              $("#edit_membership #membership_name_edit").text(membership_name);
                              $("#edit_membership #membership_start_date").val(response[0].start_date);
                              $("#edit_membership #membership_end_date").val(response[0].end_date);
                              $("#edit_membership #membership_balance_amount").val(response[0].remaining_amount);
                              $("#edit_membership #membership_balance_payment_date").val(response[0].balance_payment_date);
                              $("#edit_membership #membership_after_discount").val(response[0].discount);
                              $("#edit_membership #membership_remark").val(response[0].remark);     
                              $("#edit_membership #occupation").val(response[0].occupation);                               

                         },
                         error: function (error) {
                              $('.loader').hide();
                         }
                    });
               } else {
                    $('.loader').hide();
                    alert("Data Not Edit.");
               }
        });
    });
</script> -->