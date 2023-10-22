<?php include 'partials/header.php'; ?>

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

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">...</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>

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
        });

        function myorder_dialog_view(id) {
            console.log(id);
        }
    });

    function list_data(table = 'car_features', datastatus = '', pageNumber = 1, perPageCount = 10, ajaxsearch = "", filter = "", formdata = "", action = true) {
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
            url: 'car_show_list_data',
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
                    $('#admin_car_list').html(result.html);
                    $('.inq_pagination').twbsPagination({
                        totalPages: total_page,
                        visiblePages: 4,
                        next: '>>',
                        prev: '<<',
                        onPageClick: function(event, page) {
                            list_data(table, datastatus, page, perPageCount, ajaxsearch);
                        }
                    });
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