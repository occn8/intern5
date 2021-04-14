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
                    <a class=\"nav-link\" href=\"profile.php\"><h6 class=\"text-muted mr-0 px-3\"><i class=\"bx bxs-edit prim\"></i> Edit profile</h6></a>";
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
                        <a class="nav-link" href="#tutorials">
                            <i class="bx bxs-book-open color-primary pr-3"></i> Lectures
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">
                            <i class="bx bx-library color-primary pr-3"></i> Courses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#timetable">
                            <i class="bx bxs-time-five color-primary pr-3"></i> Time Table
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bxs-report color-primary pr-3"></i> Library
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="bx bxs-door-open color-primary pr-3"></i> student portal
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
                                <a class=\"btn clr-bg nav-link\" href=\"index.php?logout='1'\"><i class=\"bx bxs-user-circle color-primary mr-1 bx-sm\"></i> <b><span class='color-primary'>Logout</span></b></a>
                               ";
                            }
                            ?>

                        </li>
                    </ul>
                </button>
            </div>

            <?php
            include('widgets/student/dashboard.php');
            ?>

            <?php
            include('widgets/student/lectures.php');
            ?>

            <?php
            include('widgets/student/courses.php');
            ?>

            <?php
            include('widgets/student/timetable.php');
            ?>
            <?php
            include('widgets/footer.php');
            ?>
        </main>
    </div>
</div>