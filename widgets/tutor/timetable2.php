<div id="timetable2" class="table-responsive pt-5">
    <h2>Time Table [Semester Two(2)]</h2>
    <table id="tt" class="table table-striped">
        <thead>
            <tr>
                <td> </td>
                <td><b>7:00</b></td>
                <td><b>8:00</b></td>
                <td><b>9:00</b></td>
                <td><b>10:00</b></td>
                <td><b>11:00</b></td>
                <td><b>12:00</b></td>
                <td class="bg-warning text-success"><b>1:00</b></td>
                <td><b>2:00</b></td>
                <td><b>3:00</b></td>
                <td><b>4:00</b></td>
                <td><b>5:00</b></td>
                <td><b>6:00</b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><b>Monday</b></th>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Monday' && $lect['starttime'] == '07:00:00') {
                            echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Monday' && $lect['starttime'] == '08:00:00') {
                            echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Monday' && $lect['starttime'] == '09:00:00') {
                            echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Monday' && $lect['starttime'] == '10:00:00') {
                            echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Monday' && $lect['starttime'] == '11:00:00') {
                            echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Monday' && $lect['starttime'] == '12:00:00') {
                            echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td class="bg-warning text-success lunch"> <br><b>L</b></td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Monday' && $lect['starttime'] == '02:00:00') {
                            echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>

                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Monday' && $lect['starttime'] == '03:00:00') {
                            echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td><?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Monday' && $lect['starttime'] == '04:00:00') {
                            echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Monday' && $lect['starttime'] == '05:00:00') {
                            echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>
                <td>
                    <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Monday' && $lect['starttime'] == '06:00:00') {
                            echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                        } else {
                        }
                        ?>
                    <?php endforeach; ?>
                </td>

            </tr>
            <tr>
                <th><b>Tuesday</b></th>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Tuesday' && $lect['starttime'] == '07:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Tuesday' && $lect['starttime'] == '08:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Tuesday' && $lect['starttime'] == '09:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Tuesday' && $lect['starttime'] == '10:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Tuesday' && $lect['starttime'] == '11:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Tuesday' && $lect['starttime'] == '12:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td class="bg-warning text-success lunch"><b> <br>U</b></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Tuesday' && $lect['starttime'] == '02:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Tuesday' && $lect['starttime'] == '03:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Tuesday' && $lect['starttime'] == '04:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Tuesday' && $lect['starttime'] == '05:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Tuesday' && $lect['starttime'] == '06:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
            </tr>
            <tr>
                <th><b>Wednesday</b></th>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Wednesday' && $lect['starttime'] == '07:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Wednesday' && $lect['starttime'] == '08:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Wednesday' && $lect['starttime'] == '09:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Wednesday' && $lect['starttime'] == '10:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Wednesday' && $lect['starttime'] == '11:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Wednesday' && $lect['starttime'] == '12:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td class="bg-warning text-success lunch"><b> <br>N</b></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Wednesday' && $lect['starttime'] == '02:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Wednesday' && $lect['starttime'] == '03:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Wednesday' && $lect['starttime'] == '04:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Wednesday' && $lect['starttime'] == '05:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Wednesday' && $lect['starttime'] == '06:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
            </tr>
            <tr>
                <th><b>Thursday</b></th>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Thursday' && $lect['starttime'] == '07:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Thursday' && $lect['starttime'] == '08:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Thursday' && $lect['starttime'] == '09:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Thursday' && $lect['starttime'] == '10:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Thursday' && $lect['starttime'] == '11:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Thursday' && $lect['starttime'] == '12:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td class="bg-warning text-success lunch"><b> <br>N</b></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Thursday' && $lect['starttime'] == '02:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Thursday' && $lect['starttime'] == '03:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Thursday' && $lect['starttime'] == '04:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Thursday' && $lect['starttime'] == '05:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Thursday' && $lect['starttime'] == '06:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
            </tr>
            <tr>
                <th><b>Friday</b></th>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Friday' && $lect['starttime'] == '07:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Friday' && $lect['starttime'] == '08:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Friday' && $lect['starttime'] == '09:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Friday' && $lect['starttime'] == '10:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Friday' && $lect['starttime'] == '11:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Friday' && $lect['starttime'] == '12:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td class="bg-warning text-success lunch"><b> <br>C</b></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Friday' && $lect['starttime'] == '02:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Friday' && $lect['starttime'] == '03:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Friday' && $lect['starttime'] == '04:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Friday' && $lect['starttime'] == '05:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Friday' && $lect['starttime'] == '06:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
            </tr>
            <tr>
                <th><b>Saturday</b></th>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Saturday' && $lect['starttime'] == '07:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Saturday' && $lect['starttime'] == '08:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Saturday' && $lect['starttime'] == '09:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Saturday' && $lect['starttime'] == '10:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Saturday' && $lect['starttime'] == '11:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Saturday' && $lect['starttime'] == '12:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td class="bg-warning text-success lunch"><b> <br>H</b></td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Saturday' && $lect['starttime'] == '02:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Saturday' && $lect['starttime'] == '03:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Saturday' && $lect['starttime'] == '04:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Saturday' && $lect['starttime'] == '05:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
                <td> <?php foreach ($timetableresult as $lect) : ?>
                        <?php if ($lect['tutor'] == $_SESSION['username'] && $lect['semester'] == 'Two' && $lect['day'] == 'Saturday' && $lect['starttime'] == '06:00:00') {
                                echo  ":Unit::" . $lect['unit'] . "<br>::" . $lect['course'] . "<br> <hr>::Yr:" . $lect['yearofstudy'] . "<br>::Sem:" . $lect['semester'] . "<br>::Rm:" . $lect['venue'];
                            } else {
                            }
                        ?>
                    <?php endforeach; ?> </td>
            </tr>

        </tbody>
    </table>

</div>