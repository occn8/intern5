<div id="courseunits" class="container">
    <div class="row">
        <div class="col-12 pt-5">
            <div class="heading mb-4 border-bottom">
                <h2>My Lectures</h2>
            </div>
        </div>
        <?php foreach ($timetableresult as $lect) : ?>
            <div>
                <?php if ($lect['tutor'] == $_SESSION['username']) {
                    echo "<div class=\"col-md-4 mb-3 card-light p-2 radi shadow\">
            <h4><a href=\"#\" class=\"prim\">" . $lect['unit'] . " </a></h4>
            <h6 class=\"text-black\">Day :<a href=\"#\" >" . $lect['day'] . ' ' . " </a> Time :<a href=\"#\" >" . $lect['starttime'] . " </a></h6>
            <span><div class=\"text-black\">Year :<a href=\"#\" >" . $lect['yearofstudy'] .' '. " </a> Sem :<a href=\"#\" >" . $lect['semester'] . " </a></div></span>
                </div>";
                } else {
                }
                ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>