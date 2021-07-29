<?php include('config/errors.php'); ?>
<br>
<div id="timetable">
    <h2>Time Table</h2>
    <div class="row">
        <div class="col-md-4">
            <button type="button" class="btn px-2 btn-warning text-black" data-mdb-toggle="modal" data-mdb-target="#selectcoourse">
                Select Current Setting
            </button>
        </div>
        <div class="col-md-8 ">
            <h3 class="pt-0"><span>
                    <b>Course: </b><?php if (isset($_SESSION['currentcourse'])) {
                                        echo "<span class=\"prim shadow p-1\">" . $_SESSION['currentcourse'] . "</span>";
                                    } else {
                                        echo " None";
                                    } ?>
                    <b>Yr:</b> <?php if (isset($_SESSION['yearofstudy'])) {
                                    echo "<span class=\"prim p-1\">" . $_SESSION['yearofstudy'] . "</span>";
                                } else {
                                    echo " None";
                                } ?>
                    <b>Sem: </b> <?php if (isset($_SESSION['semester'])) {
                                        echo "<span class=\"prim p-1\">" . $_SESSION['semester'] . "</span>";
                                    } else {
                                        echo " None";
                                    } ?>
                </span>
            </h3>
        </div>
        <hr class="pt-1 mt-3">
        <div class="col-md-12 pt-2">
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
            <?php if (isset($_SESSION['currentcourse'])) {
                echo '            <button type="button" class="btn px-" data-mdb-toggle="modal" data-mdb-target="#monday7">Add Lecture</button>
                ';
            } else {
            } ?>
        </div>

    </div>

    <div class="table-responsive pt-5">
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
                    <th><b>Monday</b></th>
                    <td>
                        <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '07:00:00') {
                                echo $lect['id'] . "::" . $lect['unit'];
                            } else {
                            }
                            ?>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '08:00:00') {
                                echo $lect['id'] . "::" . $lect['unit'];
                            } else {
                            }
                            ?>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '09:00:00') {
                                echo $lect['id'] . "::" . $lect['unit'];
                            } else {
                            }
                            ?>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '10:00:00') {
                                echo $lect['id'] . "::" . $lect['unit'];
                            } else {
                            }
                            ?>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '11:00:00') {
                                echo $lect['id'] . "::" . $lect['unit'];
                            } else {
                            }
                            ?>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '12:00:00') {
                                echo $lect['id'] . "::" . $lect['unit'];
                            } else {
                            }
                            ?>
                        <?php endforeach; ?>
                    </td>
                    <td class="bg-warning text-success lunch"> <br><b>L</b></td>
                    <td>
                        <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '02:00:00') {
                                echo $lect['id'] . "::" . $lect['unit'];
                            } else {
                            }
                            ?>
                        <?php endforeach; ?>

                    </td>
                    <td>
                        <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '03:00:00') {
                                echo $lect['id'] . "::" . $lect['unit'];
                            } else {
                            }
                            ?>
                        <?php endforeach; ?>
                    </td>
                    <td><?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '04:00:00') {
                                echo $lect['id'] . "::" . $lect['unit'];
                            } else {
                            }
                            ?>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '05:00:00') {
                                echo $lect['id'] . "::" . $lect['unit'];
                            } else {
                            }
                            ?>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '06:00:00') {
                                echo $lect['id'] . "::" . $lect['unit'];
                            } else {
                            }
                            ?>
                        <?php endforeach; ?>
                    </td>

                </tr>
                <tr>
                    <th><b>Tuesday</b></th>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '07:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '08:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '09:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '10:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '11:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '12:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td class="bg-warning text-success lunch"><b> <br>U</b></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '02:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '03:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '04:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '05:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '06:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                </tr>
                <tr>
                    <th><b>Wednesday</b></th>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '07:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '08:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '09:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '10:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '11:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '12:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td class="bg-warning text-success lunch"><b> <br>N</b></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '02:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '03:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '04:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '05:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '06:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                </tr>
                <tr>
                    <th><b>Thursday</b></th>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '07:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '08:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '09:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '10:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '11:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '12:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td class="bg-warning text-success lunch"><b> <br>N</b></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '02:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '03:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '04:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '05:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '06:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                </tr>
                <tr>
                    <th><b>Friday</b></th>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '07:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '08:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '09:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '10:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '11:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '12:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td class="bg-warning text-success lunch"><b> <br>C</b></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '02:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '03:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '04:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '05:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '06:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                </tr>
                <tr>
                    <th><b>Saturday</b></th>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '07:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '08:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '09:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '10:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '11:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '12:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td class="bg-warning text-success lunch"><b> <br>H</b></td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '02:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '03:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '04:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '05:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                    <td> <?php foreach ($timetableresult as $lect) : ?>
                            <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '06:00:00') {
                                    echo $lect['id'] . "::" . $lect['unit'];
                                } else {
                                }
                            ?>
                        <?php endforeach; ?> </td>
                </tr>

            </tbody>
        </table>

    </div>
    <?php
    include('modals.php');
    ?>
</div>

<div class="modal fade" id="selectcoourse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Select Course</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="index.php" class="needs-validation" novalidate>
                    <?php //include('config/errors.php'); 
                    ?>
                    <div class="container">
                        <div class="">
                            <div class="row">
                                <div class="col-md-12">
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
                            </div><br>
                            <br>
                            <center>
                                <button type="submit" class="btn btn-warning col-md-6 rounded-pill" name="select_course"><b>Select Course</b></button>
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


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