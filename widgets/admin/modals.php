<div class="modal fade" id="monday7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Add lecture to timetable</b></h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="index.php" class="needs-validation" novalidate>
                <?php include('config/errors.php'); ?>
                    <div class="container">
                        <div class="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="unit" class="text-black"><b>Unit</b></label>
                                        <select class="custom-select d-block w-100" name="unit" id="unit" required>
                                            <?php foreach ($courseunitsresult as $unit) : ?>
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
                                        <label for="tutor" class="text-black"><b>Tutor</b></label>
                                        <select class="custom-select d-block w-100" name="tutor" id="tutor" required>
                                            <?php foreach ($coursetutorsresult as $tutor) : ?>
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
                                        <label for="venue" class="text-black"><b>Venue</b></label>
                                        <select class="custom-select d-block w-100" name="venue" id="venue" required>
                                            <?php foreach ($coursevenueresult as $venue) : ?>
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
                                        <label for="semester" class="text-black"><b>Day</b></label>
                                        <select class="custom-select d-block w-100" name="day" id="day" required>
                                            <?php $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                                            foreach ($days as $val) {
                                                echo "<option>$val </option>";
                                            }
                                            ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Valid Day required.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="semester" class="text-black"><b>StartTime</b></label>
                                        <select class="custom-select d-block w-100" name="starttime" id="starttime" required>
                                            <?php $times = array("7:00", "8:00", "9:00", "10:00", "11:00", "12:00", "2:00", "3:00", "4:00", "5:00", "6:00");
                                            foreach ($times as $val) {
                                                echo "<option>$val </option>";
                                            }
                                            ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Valid StartTime required.
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="semester" class="text-black">EndTime</label>
                                        <select class="custom-select d-block w-100" name="endtime" id="endtime" required>
                                            <option>7:00</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Valid EndTime required.
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <input type='hidden' name='day' value='Monday'> -->
                                <!-- <input type='hidden' name='starttime' value='7:00'> -->
                                <input type='hidden' name='endtime' value='0:00'>
                            </div><br>
                            <br>
                            <center>
                                <button type="submit" class="btn btn-warning col-md-4 rounded-pill" name="add_lecture"><b>Add Lecture</b></button>
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>