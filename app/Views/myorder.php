<?php include 'partials/header.php'; ?>
<?php
$session = session();
?>
<section class="py-50">
    <div class="container">
        <div class="row">
            <div class="mb-5 rounded p-4 text-center title-bg">
                <h2>My Booking</h2>
            </div>
            <div class="rounded shadow-sm bg-white p-2">
                <table id="datatable">
                    <thead>
                        <tr>
                            <th data-priority="1"> Booking ID </th>
                            <th> Image </th>
                            <th data-priority="2"> Vehicle </th>
                            <th> City </th>
                            <th> Start date </th>
                            <th> End date </th>
                            <th> Total Hour </th>
                            <th> Total Price </th>
                            <th data-priority="3"> Booking Status </th>
                            <th> Booking On </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody id="booking_show_list">
                        <!-- <tr id="7349">
                            <td>7349</td>
                            <td><img style="width:100px;" src="https://www.justdrive.co.in/cpadmin/upload/car/200x200/26316347dd85f8d9d262f703e2d4b348.png"></td>
                            <td>Maruti Swift</td>
                            <td>Surat</td>
                            <td>Sep 03, 2022 at 18:00</td>
                            <td>Sep 05, 2022 at 4:00</td>
                            <td>34</td>
                            <td>₹3,799.50</td>
                            <td><span class="status success-bar">
                                    <div class="icon">&#10003;</div>Booked
                                </span></td>
                            <td>Sep 03, 2022 at 04:16 pm</td>
                            <td><a class="btn default btn-xs green-stripe" href="javascript: myorder_dialog_view('7349');">View </a>

                            </td>
                        </tr> -->
                    </tbody>
                </table>
                <div class="d-flex justify-content-between align-items-center row-count-main-section flex-wrap">
                    <div class="row_count_div col-xl-6 col-12">
                        <p id="row_count"></p>
                    </div>
                    <div class="clearfix  col-xl-6 col-12">
                        <ul class="inq_pagination justify-content-xl-end" id="inq_pagination">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.1/jquery.twbsPagination.min.js"></script>

<script>
    $(document).ready(function() {
        // var datatable = new DataTable('#datatable');
        $('#datatable').DataTable({
            columnDefs: [{
                'targets': [0],
                /* column index [0,1,2,3]*/
                'orderable': false,
                /* true or false */
            }],
            "info": false,
            "paging": false,
            ordering: false,
        });

        function myorder_dialog_view(id) {
            console.log(id);
        }
    });

    function list_data(table = 'car_booking_data', datastatus = '', pageNumber = 1, perPageCount = 10, ajaxsearch = "", filter = "", formdata = "", action = true) {
        <?php if (isset($_GET['mobileno'])) { ?>
            var mobileno = '<?php echo $_GET['mobileno']; ?>';
        <?php } ?>
        <?php if (isset($_GET['filter_id'])) { ?>
            var filter_id = '<?php echo $_GET['filter_id']; ?>';
        <?php } ?>
        <?php if (isset($_REQUEST['followup'])) { ?>
            var follow_up_day = '<?php echo $_REQUEST['followup']; ?>';
        <?php } else { ?>
            var follow_up_day = '';
        <?php } ?>

        //  if ($.trim($(".filter-show").html()) != '') {
        //     var form = $("form[name='filter_form']")[0];
        //     var formdata = new FormData(form);
        //     formdata.append('action', 'filter');
        //     formdata.append('follow_up_day', follow_up_day);
        //  }

        //  if ($.trim($(".filter-show").html()) == '') {
        var data = {
            'table': table,
            'datastatus': datastatus,
            'pageNumber': pageNumber,
            'perPageCount': perPageCount,
            'follow_up_day': follow_up_day,
            <?php if (isset($_GET['mobileno'])) { ?> 'global_search_val': mobileno,
            <?php } ?>
            <?php if (isset($_GET['filter_id'])) { ?> 'filter_id': filter_id,

            <?php } ?> 'ajaxsearch': ajaxsearch,
            'action': action,
        };
        var processdd = true;
        var contentType = "application/x-www-form-urlencoded; charset=UTF-8";

        //  } else {
        //     formdata.append('datastatus', datastatus);
        //     formdata.append('pageNumber', pageNumber);
        //     //formdata.append( 'perPageCount', perPageCount);
        //     //formdata.append( 'follow_up_day', follow_up_day);
        //     var data = formdata;
        //     var processdd = false;
        //     var contentType = false;
        //  }
        //  $('body').on('click', '.reg_visit', function(e) {
        $.ajax({
            datatype: 'json',
            method: "POST",
            url: 'booking_car_list',
            data: data,
            processData: processdd,
            contentType: contentType,
            success: function(res) {
                // console.log(res);
                //  var result = res;
                //  var result = JSON.parse(res);
                if (perPageCount <= 800) {
                    var result = JSON.parse(res);
                } else {
                    var result = res;
                }
                //  console.log(result);
                if (result.response == 1) {
                    if (result.total_page == 0 || result.total_page == '') {
                        total_page = 1;
                    } else {
                        total_page = result.total_page;
                    }
                    // $('#inquiry_all_status_list').html(res);
                    $('#row_count').html(result.row_count_html);
                    $('#booking_show_list').html(result.html);
                    $('.inq_pagination').twbsPagination({
                        totalPages: total_page,
                        visiblePages: 4,
                        next: '>>',
                        prev: '<<',
                        onPageClick: function(event, page) {
                            list_data(table, datastatus, page, perPageCount, ajaxsearch);
                        }
                    });
                    // $('.dataTables_info').addClass('d-none');
                    // $('.dataTables_paginate').addClass('d-none');
                }

            }
        });
        //  });
        <?php
        if (isset($_GET) && !empty($_GET)) { ?>
            <?php
            if (isset($_GET['action']) && ($_GET['action'] == 'filter')) { ?>
                $('.inq_pagination').twbsPagination('destroy');
            <?php } ?>
        <?php
        } ?>

    }
    list_data();
</script>