<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg sidebar radi collapse m-3" style="box-shadow: 5px 5px 5px lightgray;">
            <div class="sidebar-sticky pt-1">
                <!-- <h4 class=" mr-0 px-3"><i class="bx bxs-group prim"></i> ochen hillary</h4> -->
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<h4 class=\" mr-0 px-3\"><i class=\"bx bxs-user-circle prim\"></i> umu student</h4>";
                } else {
                    echo "<h4 class=\" mr-0 px-3\"><i class=\"bx bxs-user-circle prim\"></i> " . $_SESSION['username'] . "</h4>
                    <a class=\"nav-link\" data-mdb-toggle=\"modal\" data-mdb-target=\"#profile\"><h6 class=\"text-muted mr-0 px-3\"><i class=\"bx bxs-edit prim\"></i> Edit profile</h6></a>";
                }
                ?>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 pt-3 text-muted">
                    <span class="prim font-weight-bold"> home links</span>
                </h6>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#Dashboard">
                            <i class="bx bxs-dashboard color-primary pr-3"></i> My Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#timetable">
                            <i class="bx bxs-time-five color-primary pr-3"></i> Time Table
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tutorials">
                            <i class="bx bxs-book-open color-primary pr-3"></i> My Units
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">
                            <i class="bx bxs-group color-primary pr-3"></i> My Lectures
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 pt-3 text-muted">
                    <span class="prim font-weight-bold"> help | support | info</span>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="contacts.php">
                            <i class="bx bx-support color-primary pr-3"></i> Support
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">
                            <i class="bx bx-info-circle color-primary pr-3"></i> About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacts.php">
                            <i class="bx bx-help-circle color-primary pr-3"></i> Contact Us
                        </a>
                    </li>
                </ul>
                <div class="mt-5">
                    <?php
                    if (!isset($_SESSION['username'])) {
                    } else {
                        echo "<a class=\" clr-bg prim nav-link\" href=\"index.php?logout='1'\"><i class=\"bx bxs-user-circle prim mr-1 bx-sm\"></i> <b><span class='prim'>Logout</span></b></a>
                               ";
                    }
                    ?>
                </div>

            </div>
        </nav>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-5">

            <div id="none" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-3 mb-3 border-bottom">
                <input class="form-control form-control-dark w-50 align-self-start ml-1" type="text" placeholder="Search" aria-label="Search">

                <button type="button" class="align-self-end btn py-0 btn-sm btn-outline-warning">
                    <ul class="navbar-nav px-3 ">
                        <li class="nav-item text-nowrap">
                            <?php
                            if (!isset($_SESSION['username'])) {
                                echo "<a class=\"nav-link black font-weight-bold\" href=\"sign_in.php\">Register/Login</a>
                                <li class=\"nav-item ml-md-3\">";
                            } else {
                                echo "
                                <a class=\" clr-bg nav-link\" href=\"index.php?logout='1'\"><i class=\"bx bxs-user-circle prim mr-1 bx-sm\"></i> <b><span class='color-primary'>Logout</span></b></a>
                               ";
                            }
                            ?>

                        </li>
                    </ul>
                </button>
            </div>

            <?php
            include('widgets/tutor/dashboard.php');
            ?>
            <div class="row pt-5">
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

                <div class="modal fade" id="selectcoourse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Select Course</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="index.php" class="needs-validation" novalidate>
                    <?php include('config/errors.php'); ?>
                    <div class="container">
                        <div class="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="course" class="white"><b>Course</b></label>
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
                                <div class="col-md-6">
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
            </div>
            <?php
            include('widgets/timetable.php');
            ?>

            <?php
            include('widgets/tutor/lectures.php');
            ?>

            <?php
            include('widgets/tutor/courses.php');
            ?>

            <?php
            include('widgets/footer.php');
            ?>
        </main>
    </div>
</div>
<?php
include('profile.php');
?>