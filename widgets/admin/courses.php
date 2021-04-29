<div id="courses" class="container">
<div class="heading mb-4 border-bottom pt-2">
        <h2>All Courses</h2>
    </div>

    <div class="container py-4 overfl" id="">
        <table id="t98" class="table table-striped ">
            <tr>
                <th class="had">
                    <h5>Course_Id</h5>
                </th>
                <th class="had">
                    <h5>Course Name</h5>
                </th>
                <th class="had">
                    <h5>faculty</h5>
                </th>
                <th class="had">
                    <h5>Modified</h5>
                </th>
            </tr>
            <?php foreach ($courseresult as $course) : ?>
                <tr>
                    <td class="had"><?php echo $course['id']; ?></td>
                    <td class="had"><?php echo $course['name']; ?></td>
                    <td class="had"><?php echo $course['faculty']; ?></td>
                    <td class="had"><?php echo $course['modified']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
    </div>
</div>

<section id="insert_course" class="py-5">
    <div class="heading mb-4 border-bottom">
        <h2>Add Course</h2>
    </div>
    <div class="mb-3 text-center">

        <form method="post" action="index.php" class="needs-validation" novalidate>
            <?php include('config/errors.php'); ?>
            <div class="container">

                <div class="form-group ">
                    <label for="" class="text-black"><b>Course Name</b></label>
                    <input type="textfield" class="form-control" id="" name="name" placeholder="Name" value="" required>
                    <div class="invalid-feedback">
                    Enter Valid Course Name.
                    </div>
                </div>

                <div class="form-group ">
                    <label for="" class="text-black"><b>Course faculty</b> </label>
                    <input type="textfield" class="form-control" id="" name="faculty" placeholder="Faculty" value="" required>
                    <div class="invalid-feedback ">
                    Enter Valid faculty.
                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-warning col-md-4 rounded-pill" name="add_course"><b>Add Course</b></button>

            </div>
        </form>
    </div>
</section>

<section id="delete_course">
    <div class="container py-4 ">
        <div class="heading mb-4 border-bottom">
            <h2>Remove Course</h2>
        </div>
        <div class="mb-3 text-center">
            <div class="dg">
                <h5 class="text-danger"><b>Danger zone</b></h5>
                <p class="text-danger">Please proceed with <strong>caution</strong> in this section because any action may cause <strong>permanent loss of data</strong></p>
            </div>
            <br>
            <form action="index.php" method="post" class="needs-validation" novalidate>
                <div class="form-group ">
                    <label for="" class="white"><b>Enter Course Name:</b></label>
                    <input type="text" name="name" class="form-control mb-3" required>
                    <div class="invalid-feedback">
                    Enter Valid Course name.
                    </div>
                </div>
                <button type="submit" class="btn btn-danger col-md-4 rounded-pill" name="delete_course">Delete Course</button>
            </form>
        </div>
    </div>
</section>