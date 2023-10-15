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
                          <th>
                            Car name
                          </th>
                          <th>
                            passenger
                          </th>
                          <th>
                            Deadline
                          </th>
                          <th>
                            Status
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td class="py-1">
                            <img src="<?= base_url('assets/img/car1.png') ?>" alt="image"/>
                          </td>
                          <td>
                            Maruti Ertiga
                          </td>
                          <td>
                            <span>10</span>
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                          <td>
                            <label class="badge badge-danger">Pending</label>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'partials/footer.php' ?>