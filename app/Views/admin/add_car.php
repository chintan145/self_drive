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
                    <form name="add_car">
                    <div class="card-body d-flex flex-wrap">
                        <div class="form-group col-sm-6 col-12">
                            <label for="exampleInputName1">Car Name</label>
                            <input type="text" class="form-control" id="car_name" placeholder="Car Name">
                        </div>
                        <div class="form-group col-sm-6 col-12">
                            <label>Car Photo</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label for="exampleInputCity1">Pickup & Drop Address</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Address">
                        </div>
                        <div class="form-group col-sm-4 col-12">
                            <label for="exampleInputEmail3">Seater</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="seater">
                        </div>
                        <div class="form-group col-sm-4 col-12">
                            <label for="exampleSelectGender">Gear</label>
                            <select class="form-control" id="exampleSelectGender">
                                <option>Auto</option>
                                <option>Menual</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4 col-12">
                            <label for="exampleInputPassword4">Bag / Luggage</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Menual">
                        </div>
                        <div class="form-group col-sm-6 col-12">
                            <label for="exampleInputCity1">Age</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Age">
                        </div>
                        <div class="form-group col-sm-6 col-12">
                            <label for="exampleInputCity1">fuel</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="fuel">
                        </div>
                        <div class="form-group col-sm-6 col-12">
                            <label for="exampleInputCity1">KM</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="KM">
                        </div>
                        <div class="form-group col-sm-6 col-12">
                            <label for="exampleInputCity1">KM</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="KM">
                        </div>
                        <div class="form-group col-sm-6 col-12">
                            <label for="exampleInputCity1">KM</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="KM">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'partials/footer.php' ?>