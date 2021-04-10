<div id="timetable" class="table-responsive pt-5">
    <h2>Time Table</h2>
    <table id="tt" class="table table-striped">
        <thead>
            <tr>
                <td> </td>
                <td>7:00</td>
                <td>8:00</td>
                <td>9:00</td>
                <td>10:00</td>
                <td>11:00</td>
                <td>12:00</td>
                <td class="bg-warning text-success">1:00</td>
                <td>2:00</td>
                <td>3:00</td>
                <td>4:00</td>
                <td>5:00</td>
                <td>6:00</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Monday</th>
                <td>2:00 <br> ISPM</td>
                <td> </td>
                <td> </td>
                <td>FM-IT</td>
                <td> </td>
                <td> </td>
                <td class="bg-warning text-success lunch"><b> <br>L</b></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <th>Tuesday</th>
                <td>8:00</td>
                <td>ISPM</td>
                <td>SA&CM</td>
                <td> </td>
                <td>FM-IT</td>
                <td>BE</td>
                <td class="bg-warning text-success lunch"><b> <br>U</b></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <th>Wednesday</th>
                <td>9:00</td>
                <td>ISPM</td>
                <td>SA&CM</td>
                <td>BE</td>
                <td>FM-IT</td>
                <td>BE</td>
                <td class="bg-warning text-success lunch"><b> <br>N</b></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <th>Thursday</th>
                <td>10:00</td>
                <td> </td>
                <td>FM-IT</td>
                <td>BE</td>
                <td>DW$BI</td>
                <td>ET-IT</td>
                <td class="bg-warning text-success lunch"><b> <br>N</b></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <th>Friday</th>
                <td>11:00</td>
                <td>EC</td>
                <td>FM-IT</td>
                <td> </td>
                <td>DW$BI</td>
                <td>ET-IT</td>
                <td class="bg-warning text-success lunch"><b> <br>C</b></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <th>Saturday</th>
                <td>12:00</td>
                <td>EC</td>
                <td>FM-IT</td>
                <td> </td>
                <td> </td>
                <td>DW$BI</td>
                <td class="bg-warning text-success lunch"><b> <br>H</b></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>

        </tbody>
    </table>

</div>

<section id="add_lecture" class="py-5">
    <div class="heading mb-4 border-bottom">
        <h2>Add Lecture</h2>
    </div>
    <div class="mb-3 text-center">

        <form method="post" action="index.php" class="needs-validation" novalidate>
            <?php include('config/errors.php'); ?>
            <div class="container">

                <div class="">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="course" class="white">Course</label>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="unit" class="white">Unit</label>
                                <select class="custom-select d-block w-100" name="unit" id="unit" required>
                                    <?php foreach ($unitsresult as $unit) : ?>
                                        <option><?php echo $unit['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Valid Unit name is required.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tutor" class="white">tutor</label>
                                <select class="custom-select d-block w-100" name="tutor" id="tutor" required>
                                    <?php foreach ($tutorsresult as $tutor) : ?>
                                        <option><?php echo $tutor['username']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Valid tutor required.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="yearofstudy" class="white">Year of study</label>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="semester" class="white">Semester</label>
                                <select class="custom-select d-block w-100" name="semester" id="semester" required>
                                    <option>One</option>
                                    <option>Two</option>
                                </select>
                                <div class="invalid-feedback">
                                    Valid semester required.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="venue" class="white">Venue</label>
                                <select class="custom-select d-block w-100" name="venue" id="venue" required>
                                    <?php foreach ($venueresult as $venue) : ?>
                                        <option><?php echo $venue['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Valid Venue name is required.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="day" class="white">Day</label>
                                <select class="custom-select d-block w-100" name="day" id="day" required>
                                    <option> </option>
                                    <option>Monday</option>
                                    <option>Tuesday</option>
                                    <option>Wednesday</option>
                                    <option>Thursday</option>
                                    <option>Friday</option>
                                    <option>Saturday</option>
                                </select>
                                <div class="invalid-feedback">
                                    Valid day required.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="starttime" class="white">Start Time</label>
                                <select class="custom-select d-block w-100" name="starttime" id="starttime" required>
                                    <option>7:00</option>
                                    <option>8:00</option>
                                    <option>9:00</option>
                                </select>
                                <div class="invalid-feedback">
                                    Valid start time required.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="endtime" class="white">End Time</label>
                                <select class="custom-select d-block w-100" name="endtime" id="endtime" required>
                                    <option>7:00</option>
                                    <option>8:00</option>
                                    <option>9:00</option>
                                </select>
                                <div class="invalid-feedback">
                                    Valid End Time required.
                                </div>
                            </div>
                        </div>

                    </div><br>
                    <br>
                    <button type="submit" class="btn btn-warning col-md-4 rounded-pill" name="add_lecture"><b>Add Lecture</b></button>

                </div>
            </div>
        </form>
    </div>
</section>

<section id="delete_lecture">
    <div class="container py-4 ">
        <div class="heading mb-4 border-bottom">
            <h2>Remove Lecture</h2>
        </div>
        <div class="mb-3 text-center">
            <div class="dg">
                <h5 class="text-danger"><b>Danger zone</b></h5>
                <p class="text-danger">Please proceed with <strong>caution</strong> in this section because any action may cause <strong>permanent loss of data</strong></p>
            </div>
            <br>
            <form action="index.php" method="post" class="needs-validation" novalidate>
                <div class="form-group ">
                    <label for="" class="white"><b>Enter Lecture Id:</b></label>
                    <input type="text" name="id" class="form-control mb-3" required>
                    <div class="invalid-feedback">
                        Please Enter Valid Lecture Id.
                    </div>
                </div>
                <button type="submit" class="btn btn-danger col-md-4 rounded-pill" name="delete_lecture">Delete Lecture</button>
            </form>
        </div>
    </div>
</section>