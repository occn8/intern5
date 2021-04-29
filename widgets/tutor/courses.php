<div id="courses" class="container">
    <div class="row">
        <div class="col-12 pt-5">
            <div class="heading mb-4 border-bottom">
                <h2>My Units</h2>
            </div>
        </div>
        <?php foreach ($timetableresult as $lect) : ?>
            <div class="col-lg-4">
                <?php if ($lect['tutor'] == $_SESSION['username']) {
                    echo "<div class=\"box-side mb-3 card-light p-2 radi shadow\">
            <h4><a href=\"#\" class=\"prim\">" . $lect['unit'] . " </a></h4>

                </div>";
                } else {
                }
                ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>