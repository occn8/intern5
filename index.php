<?php
require_once('config/configurations.php');
?>

<?php
include('widgets/header.php');
?>


<?php if (isset($_SESSION['id'])) : ?>
    <!-- for different users -->
    <?php if ($_SESSION['id'] == "admin") : ?>
        <?php
        include('userviews/admin.php');
        ?>
    <?php elseif ($_SESSION['id'] == "tutor") : ?>
        <?php
        include('userviews/tutor.php');
        ?>
    <?php else : ?>
        <?php
        include('userviews/student.php');
        ?>
    <?php endif ?>
<?php else : ?>
    <?php
    include('userviews/noid.php');
    ?>
<?php endif ?>

<script src="assets/scripts/validate.js"></script>

<?php
include('widgets/footer_end.php');
?>