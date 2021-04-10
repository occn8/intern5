<?php
require_once('config/configurations.php');
?>

<?php
include('widgets/header.php');
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="prim pt-5">CONTACT INFO</h2>
                <div class="container py-4">
                    <h4>Main Campus (Nkozi)</h4>
                    <h6><i class="bx bx-current-location prim"></i><b> Address</b></h6>
                    <p>Uganda Martyrs University P.O. Box 5498 Kampala - Uganda</p>
                    <h6><i class="bx bx-phone prim"></i><b> Phone</b></h6>
                    <p> +256 382 410611 <b>|</b> +256 382 410611</p>
                    <h6><i class="bx bx-mail-send prim"></i><b> Email</b></h6>
                    <p>pro@umu.ac.ug</p>
                </div>
            </div>
            <div class="col-md-7 py-4 text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.3303827239743!2d32.013176117599805!3d0.0024126218605327676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177d601f690fd553%3A0x71262b3042ac592!2sUganda%20Martyrs%20University%20Nkozi!5e0!3m2!1sen!2sug!4v1617886478567!5m2!1sen!2sug" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="container py-5">
                    <h3 class="prim">Registry</h3>
                    <h6><i class="bx bx-phone prim"></i><b> Phone</b></h6>
                    <p> +256 393215696</p>
                    <h6><i class="bx bx-mail-send prim"></i><b> Email</b></h6>
                    <p>email registrar@umu.ac.ug, admissions@umu.ac.ug</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="container py-5">
                    <h3 class="prim">SPGSR</h3>
                    <h6><i class="bx bx-phone prim"></i><b> Phone</b></h6>
                    <p> +256 393 215 776</p>
                    <h6><i class="bx bx-mail-send prim"></i><b> Email</b></h6>
                    <p>Email spgs@umu.ac.ug</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="container py-5">
                    <h3 class="prim">Lubaga Campus</h3>
                    <h6><i class="bx bx-cloud prim"></i><b> Website</b></h6>
                    <p>Website http://www.umu.ac.ug</p>
                    <h6><i class="bx bx-phone prim"></i><b> Phone</b></h6>
                    <p> +256414-236931</p>
                    <h6><i class="bx bx-mail-send prim"></i><b> Email</b></h6>
                    <p>Email coordinatorrubaga@umu.ac.ug</p>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-6 text-center">
                <h2>GET IN TOUCH</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nemo atque sed consectetur id magni unde dolorem quos eveniet tempore!</p>
            </div>
            <div class="col-md-6">
                <div class="container ">
                    <form class="needs-validation" method="post" action="contacts.php" novalidate>
                        <input class="form-control col-12 my-2" type="text" name="usr_name" placeholder="Name" required>
                        <div class="invalid-feedback">
                            Please provide a valid Name.
                        </div>
                        <input class="form-control col-12 my-2" type="text" name="usr_email" placeholder="Email" required>
                        <div class="invalid-feedback">
                            Please provide a valid Email.
                        </div>

                        <textarea class="form-control col-12 my-2 py-5" name="usr_msg" placeholder="Message" required></textarea>
                        <div class="invalid-feedback">
                            Please write Message.
                        </div>
                        <button type="submit" class="btn btn-warning rounded-pill my-2" name="make_comment"><b>Send Message</b></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<script src="assets/scripts/validate.js"></script>

<?php
include('widgets/footer.php');
include('widgets/footer_end.php');
?>