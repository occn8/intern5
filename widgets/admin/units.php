<div class="row" id="units">
    <div class="heading mb-4 border-bottom">
        <h2>All Units</h2>
    </div>

    <div class="container py-4 overfl" id="">
        <table id="t98" class="table table-striped ">
            <tr>
                <th class="had">
                    <h5>Unit_Id</h5>
                </th>
                <th class="had">
                    <h5>Unit Name</h5>
                </th>
                <th class="had">
                    <h5>Unit code</h5>
                </th>
                <th class="had">
                    <h5>Course</h5>
                </th>
                <th class="had">
                    <h5>Modified</h5>
                </th>
            </tr>
            <?php foreach ($unitsresult as $unit) : ?>
                <tr>
                    <td class="had"><?php echo $unit['id']; ?></td>
                    <td class="had"><?php echo $unit['name']; ?></td>
                    <td class="had"><?php echo $unit['code']; ?></td>
                    <td class="had"><?php echo $unit['course']; ?></td>
                    <td class="had"><?php echo $unit['modified']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
    </div>
</div>

<section id="insert_unit" class="py-5">
    <div class="heading mb-4 border-bottom">
        <h2>Add Unit</h2>
    </div>
    <div class="mb-3 text-center">

        <form method="post" action="index.php" class="needs-validation" novalidate>
            <?php //include('config/errors.php'); ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="" class="text-black"><b>Unit Name</b></label>
                            <input type="textfield" class="form-control" id="" name="name" placeholder="Name" value="" required>
                            <div class="invalid-feedback">
                                Enter Valid unit Name.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="" class="text-black"><b> Unit Code</b> </label>
                            <input type="textfield" class="form-control" id="" name="code" placeholder="Code" value="" required>
                            <div class="invalid-feedback ">
                                Enter Valid unit code.
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="yearofstudy" class="text-black"><b>Year of study</b></label>
                            <select class="custom-select d-block w-100" name="yearofstudy" id="yearofstudy" required>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>
                            <div class="invalid-feedback">
                                Valid year of study required.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="semester" class="text-black"><b>Semester</b></label>
                            <select class="custom-select d-block w-100" name="semester" id="semester" required>
                                <option>One</option>
                                <option>Two</option>
                            </select>
                            <div class="invalid-feedback">
                                Valid semester required.
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-warning col-md-4 rounded-pill" style="background-color: #db2723;color:white;" name="add_unit"><b>Add Unit</b></button>

            </div>
        </form>
    </div>
</section>

<section id="delete_unit">
    <div class="container py-4 ">
        <div class="heading mb-4 border-bottom">
            <h2>Remove Unit</h2>
        </div>
        <div class="mb-3 text-center">
            <div class="dg">
                <h5 class="text-danger"><b>Danger zone</b></h5>
                <p class="text-danger">Please proceed with <strong>caution</strong> in this section because any action may cause <strong>permanent loss of data</strong></p>
            </div>
            <br>
            <form action="index.php" method="post" class="needs-validation" novalidate>
                <div class="form-group ">
                    <label for="" class="white"><b>Enter Unit code:</b></label>
                    <input type="text" name="code" class="form-control mb-3" required>
                    <div class="invalid-feedback">
                        Enter Valid unit code.
                    </div>
                </div>
                <button type="submit" class="btn btn-danger col-md-4 rounded-pill" style="background-color: #db2723;color:white;" name="delete_unit">Delete Unit</button>
            </form>
        </div>
    </div>
</section>