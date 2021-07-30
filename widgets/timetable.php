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
                <th><b>Monday</b></th>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '07:00:00') {
                            echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '08:00:00') {
                            echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '09:00:00') {
                            echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '10:00:00') {
                            echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '11:00:00') {
                            echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '12:00:00') {
                            echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td class="bg-warning text-success lunch"> <br><b>L</b></td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '02:00:00') {
                            echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>

                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '03:00:00') {
                            echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td><?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '04:00:00') {
                            echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '05:00:00') {
                            echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Monday' && $lect['starttime'] == '06:00:00') {
                            echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
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
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '08:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '09:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '10:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '11:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '12:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td class="bg-warning text-success lunch"><b> <br>U</b></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '02:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '03:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '04:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '05:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Tuesday' && $lect['starttime'] == '06:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
            </tr>
            <tr>
                <th><b>Wednesday</b></th>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '07:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '08:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '09:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '10:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '11:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '12:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td class="bg-warning text-success lunch"><b> <br>N</b></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '02:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '03:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '04:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '05:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Wednesday' && $lect['starttime'] == '06:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
            </tr>
            <tr>
                <th><b>Thursday</b></th>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '07:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '08:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '09:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '10:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '11:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '12:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td class="bg-warning text-success lunch"><b> <br>N</b></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '02:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '03:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '04:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '05:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Thursday' && $lect['starttime'] == '06:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
            </tr>
            <tr>
                <th><b>Friday</b></th>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '07:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '08:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '09:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '10:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '11:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '12:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td class="bg-warning text-success lunch"><b> <br>C</b></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '02:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '03:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '04:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '05:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Friday' && $lect['starttime'] == '06:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
            </tr>
            <tr>
                <th><b>Saturday</b></th>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '07:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '08:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '09:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '10:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '11:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '12:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td class="bg-warning text-success lunch"><b> <br>H</b></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '02:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '03:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '04:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '05:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['course'] == $_SESSION['currentcourse'] && $lect['yearofstudy'] == $_SESSION['yearofstudy'] && $lect['semester'] == $_SESSION['semester'] && $lect['day'] == 'Saturday' && $lect['starttime'] == '06:00:00') {
                                echo  "::" . $lect['unit'] . "<br>::" .$lect['tutor'] . "<br>::" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
            </tr>

        </tbody>
    </table>

</div>