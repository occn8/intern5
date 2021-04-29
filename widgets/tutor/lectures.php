<div class="row" id="tutorials">
    <div class="col-12 pt-5">
        <div class="heading mb-4 border-bottom">
            <h2>My Lectures</h2>
        </div>
    </div>
    <?php foreach ($timetableresult as $lect) : ?>
        <div class="col-lg-4">
            <?php if ($lect['tutor'] == $_SESSION['username']) {
                echo "<div class=\"box-side mb-3 card-light p-2 radi shadow\">
            <h4><a href=\"#\" class=\"prim\">" . $lect['unit'] . " </a></h4>
            <h6 class=\"text-black\">Day :<a href=\"#\" >" . $lect['day'] . " </a></h6>
            <h6 class=\"text-black\">Time :<a href=\"#\" >" . $lect['starttime'] . " </a></h6>

                </div>";
            } else {
            }
            ?>
        </div>
    <?php endforeach; ?>
</div>