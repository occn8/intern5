<div class="row" id="venues">
    <div class="heading mb-4 border-bottom">
        <h2>All Venues</h2>
    </div>

    <div class="container py-4 overfl" id="">
        <table id="t98" class="table table-striped ">
            <tr>
                <th class="had">
                    <h5>Venue_Id</h5>
                </th>
                <th class="had">
                    <h5>Venue Name</h5>
                </th>
                <th class="had">
                    <h5>Venue code</h5>
                </th>
                <th class="had">
                    <h5>Course</h5>
                </th>
                <th class="had">
                    <h5>Modified</h5>
                </th>
            </tr>
            <?php foreach ($venueresult as $venue) : ?>
                <tr>
                    <td class="had"><?php echo $venue['id']; ?></td>
                    <td class="had"><?php echo $venue['name']; ?></td>
                    <td class="had"><?php echo $venue['code']; ?></td>
                    <td class="had"><?php echo $venue['course']; ?></td>
                    <td class="had"><?php echo $venue['modified']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
    </div>
</div>

<section id="insert_venue" class="py-5">
    <div class="heading mb-4 border-bottom">
        <h2>Add Venue</h2>
    </div>
    <div class="mb-3 text-center">

        <form method="post" action="index.php" class="needs-validation" novalidate>
            <?php //include('config/errors.php'); ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="" class="text-black"><b>Venue Name</b></label>
                            <input type="textfield" class="form-control" id="" name="name" placeholder="Name" value="" required>
                            <div class="invalid-feedback">
                                Enter Valid Venue Name.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="" class="text-black"><b> Venue Code</b> </label>
                            <input type="textfield" class="form-control" id="" name="code" placeholder="Code" value="" required>
                            <div class="invalid-feedback ">
                                Enter Valid Venue code.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="course" class="text-black"><b>Course</b></label>
                            <select class="custom-select d-block w-100" name="course" id="course" required>
                                <?php foreach ($courseresult as $course) : ?>
                                    <option><?php echo $course['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                Valid course required.
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-warning col-md-4 rounded-pill" name="add_venue"><b>Add Venue</b></button>

            </div>
        </form>
    </div>
</section>

<section id="delete_venue">
    <div class="container py-4 ">
        <div class="heading mb-4 border-bottom">
            <h2>Remove Venue</h2>
        </div>
        <div class="mb-3 text-center">
            <div class="dg">
                <h5 class="text-danger"><b>Danger zone</b></h5>
                <p class="text-danger">Please proceed with <strong>caution</strong> in this section because any action may cause <strong>permanent loss of data</strong></p>
            </div>
            <br>
            <form action="index.php" method="post" class="needs-validation" novalidate>
                <div class="form-group ">
                    <label for="" class="white"><b>Enter Venue code:</b></label>
                    <input type="text" name="code" class="form-control mb-3" required>
                    <div class="invalid-feedback">
                        Enter Valid Venue code.
                    </div>
                </div>
                <button type="submit" class="btn btn-danger col-md-4 rounded-pill" name="delete_venue">Delete Venue</button>
            </form>
        </div>
    </div>
</section>