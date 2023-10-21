<?php include 'partials/header.php' ?>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <?php include 'partials/sidebar.php'; ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="shadow rounded bg-white p-3">
                    <div class="title">
                        <h3>Car List</h3>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Car Photo
                          </th>
                    
                          
                        </tr>
                      </thead>
                      <tbody id="admin_car_list">
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
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="admin_car_view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">car view details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <label class="form-label1">car_name :</label>
                     <span class="form-inform" id="car_name"></span>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <label class="form-label1">bag_allow :</label>
                     <span class="form-inform" id="bag_allow"></span>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <label class="form-label1">age :</label>
                     <span class="form-inform" id="age"></span>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <label class="form-label1">fuel :</label>
                     <span class="form-inform" id="fuel"></span>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <label class="form-label1">km :</label>
                     <span class="form-inform" id="km"></span>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <label class="form-label1">car image:</label>
                     <span class="form-inform" id="car_image"></span>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <label class="form-label1">pickup_address :</label>
                     <span class="form-inform" id="pickup_address"></span>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <label class="form-label1">seater</label>
                     <span class="form-inform" id="seater"></span>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                     <label class="form-label1">gear :</label>
                     <span class="form-inform" id="gear"></span>
                  </div>
                  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php include 'partials/footer.php' ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.1/jquery.twbsPagination.min.js"></script>

<script>
   $('')
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

                        <?php } ?> 
               'ajaxsearch': ajaxsearch,
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
            success: function (res) {
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
                     onPageClick: function (event, page) {
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

         // view data 
   $('body').on('click', '.admin_car_view', function (e) {
// alert("hello");
e.preventDefault();
var self = $(this).closest("tr");
var edit_value = $(this).attr("data-view_id");
// console.log(view_id);
if (edit_value != "") {
   $('.loader').show();
   $.ajax({
      type: "post",
      url: "<?= site_url('admin/car_view'); ?>",
      data: {
         action: 'view',
         view_id: edit_value,
         table: 'car_features'
      },
      success: function (res) {
         $('.loader').hide();
         var response = JSON.parse(res);
         // console.log(response);
         $('.edt').attr('data-edit_id', response[0].id);
         $('.dlt').attr('data-delete_id', response[0].id);
         $('#admin_car_view #car_name ').text(response[0].car_name);
         $('#admin_car_view #bag_allow ').text(response[0].bag_allow);
         $('#admin_car_view #age').text(response[0].age);
         $('#admin_car_view #fuel').text(response[0].fuel);
         $('#admin_car_view #km').text(response[0].km);
         $('#admin_car_view #car_image').text(response.car_image);
         $("#admin_car_view #pickup_address").text(response[0].pickup_address);
         $('#admin_car_view #seater').text(response[0].seater);
         $('#admin_car_view #gear').text(response[0].gear);
       



      },
   });
} else {
   $('.loader').hide();
   alert("Data Not Edit.");
}
});
</script>