<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg sidebar radi collapse m-2" style="box-shadow: 5px 5px 5px lightgray;">
            <div class="sidebar-sticky pt-1">
                <!-- <h4 class=" mr-0 px-3"><i class="bx bxs-group prim"></i> ochen hillary</h4> -->
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<h4 class=\" mr-0 px-3\"><i class=\"bx bxs-user-circle prim\"></i> umu student</h4>";
                } else {
                    echo "<h4 class=\" mr-0 px-3\"><i class=\"bx bxs-user-circle prim\"></i> " . $_SESSION['username'] . "</h4>
                    <a class=\"nav-link \" data-mdb-toggle=\"modal\" data-mdb-target=\"#profile\"><h6 class=\"text-muted mr-0 px-3\"><i class=\"bx bxs-edit prim\"></i> Edit profile</h6></a>";
                }
                ?>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 pt-1 text-muted">
                    <span class="prim font-weight-bold"> Content links</span>
                </h6>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#Dashboard">
                            <i class="bx bxs-dashboard prim pr-3"></i> My Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">
                            <i class="bx bxs-book-open pr-3"></i> Courses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#units">
                            <i class="bx bxs-book-open pr-3"></i> Units
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#venues">
                            <i class="bx bxs-home pr-3"></i> Venues
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#timetable">
                            <i class="bx bxs-time-five prim pr-3"></i> Time Table
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#gentimetable">
                            <i class="bx bxs-time-five prim pr-3"></i>Gen Time Table
                        </a>
                    </li> -->
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 pt-2 text-muted">
                        <span class="prim font-weight-bold"> Users</span>
                    </h6>
                    <li class="nav-item">
                        <a class="nav-link" href="#tutors">
                            <i class="bx bxs-group pr-3"></i> Tutors
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#students">
                            <i class="bx bxs-group pr-3"></i> Students
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#admins">
                            <i class='bx bx-git-branch pr-3'></i> Admins
                        </a>
                    </li>

                </ul>
                <div class="mt-2">
                    <?php
                    if (!isset($_SESSION['username'])) {
                    } else {
                        echo "
                                <a class=\" clr-bg nav-link\" href=\"index.php?logout='1'\"><i class=\"bx bxs-user-circle prim mr-1 bx-sm\"></i> <b><span class='prim'>Logout</span></b></a>
                               ";
                    }
                    ?></div>
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
                                <a class=\" clr-bg nav-link\" href=\"index.php?logout='1'\"><i class=\"bx bxs-user-circle prim mr-1 bx-sm\"></i> <b><span class='prim'>Logout</span></b></a>
                               ";
                            }
                            ?>

                        </li>
                    </ul>
                </button>
            </div>

            <?php
            include('widgets/admin/dashboard.php');
            ?>

            <?php
            include('widgets/admin/courses.php');
            ?>

            <?php
            include('widgets/admin/units.php');
            ?>

            <?php
            include('widgets/admin/venues.php');
            ?>

            <?php
            include('widgets/admin/timetable.php');
            ?>

            <?php
            // include('widgets/genTimetable.php');
            ?>

            <?php
            include('widgets/admin/tutors.php');
            ?>

            <?php
            include('widgets/admin/students.php');
            ?>

            <?php
            include('widgets/admin/admins.php');
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