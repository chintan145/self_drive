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
                    <tbody>
                        <tr id="7349">
                            <td>7349</td>
                            <td><img style="width:100px;" src="https://www.justdrive.co.in/cpadmin/upload/car/200x200/26316347dd85f8d9d262f703e2d4b348.png"></td>
                            <td>Maruti Swift</td>
                            <td>Surat</td>
                            <td>Sep 03, 2022 at 18:00</td>
                            <td>Sep 05, 2022 at 4:00</td>
                            <td>34</td>
                            <td>₹3,799.50</td>
                            <td><span class="status success-bar"><div class="icon">&#10003;</div>Booked</span></td>
                            <td>Sep 03, 2022 at 04:16 pm</td>
                            <td><a class="btn default btn-xs green-stripe" href="javascript: myorder_dialog_view('7349');">View </a>
                                                        
                            </td>
                        </tr>
                        <tr id="3396">
                            <td>3396</td>
                            <td></td>
                            <td>creata</td>
                            <td>Surat</td>
                            <td>Jul 11, 2021 at 22:00</td>
                            <td>Jul 13, 2021 at 22:00</td>
                            <td>48</td>
                            <td>₹3,901.00</td>
                            <td><span class="status pending-bar"><div class="icon">&#9654;</div>pending</span></td>
                            <td>Jul 10, 2021 at 11:59 am</td>
                            <td><a class="btn default btn-xs green-stripe" href="javascript: myorder_dialog_view('3396');">View </a>
                                                        
                            </td>
                        </tr>
                        <tr id="1764">
                            <td>1764</td>
                            <td></td>
                            <td>enoova</td>
                            <td>Surat</td>
                            <td>Sep 30, 2020 at 13:00</td>
                            <td>Sep 30, 2020 at 23:00</td>
                            <td>10</td>
                            <td>₹1,971.00</td>
                            <td><span class="status success-bar"><div class="icon">&#10003;</div>Booked</span></td>
                            <td>Sep 30, 2020 at 11:55 am</td>
                            <td><a class="btn default btn-xs green-stripe" href="javascript: myorder_dialog_view('1764');">View </a>
                                                        
                            </td>
                        </tr>
                        <tr id="1739">  
                            <td>1739</td>
                            <td></td>
                            <td>Maruti Swift</td>
                            <td>Surat</td>
                            <td>Sep 25, 2020 at 12:00</td>
                            <td>Sep 25, 2020 at 22:00</td>
                            <td>10</td>
                            <td>₹3,951.00</td>
                            <td><span class="status pending-bar"><div class="icon">&#9654;</div>pending</span></td>
                            <td>Sep 25, 2020 at 10:34 am</td>
                            <td><a class="btn default btn-xs green-stripe" href="javascript: myorder_dialog_view('1739');">View </a>

                            </td>
                        </tr>
                        <tr id="1743">
                            <td>1743</td>
                            <td></td>
                            <td>vodacity</td>
                            <td>Surat</td>
                            <td>Sep 20, 2020 at 16:00</td>
                            <td>Sep 21, 2020 at 1:00</td>
                            <td>9</td>
                            <td>₹3,951.00</td>
                            <td><span class="status success-bar"><div class="icon">&#10003;</div>Booked</span></td>
                            <td>Sep 25, 2020 at 06:34 pm</td>
                            <td><a class="btn default btn-xs green-stripe" href="javascript: myorder_dialog_view('1743');">View </a>
                                                        
                            </td>
                        </tr>
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
    $(document).ready(function(){
        // var datatable = new DataTable('#datatable');
        $('#datatable').DataTable( {
            columnDefs: [ {
                'targets': [0], /* column index [0,1,2,3]*/
                'orderable': false, /* true or false */
            }],
        });

        function myorder_dialog_view(id){
            console.log(id);
        }
    });
</script>
