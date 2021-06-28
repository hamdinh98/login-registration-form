<?php
// header.php
include('headerLogin.php');
?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
    require('login-process.php');
?>

<!-- registration area -->
<section id="register">
    <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-white">USER LOGIN</h1>
            </div>
            <div class="d-flex justify-content-center">
                <form action="Login.php" method="post" enctype="multipart/form-data" id="reg-form">
                    <div class="form-row my-4">
                        <div class="col">
                            <label class="email-label text-white" for=""> Email </label>
                            <input type="email" value="" required name="emailLogin" id="emailLogin" class="form-control" placeholder="Email*">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <label class="password-label text-white" for="">Password</label>
                            <input type="password" required name="passwordLogin" id="passwordLogin" class="form-control" placeholder="password*">
                        </div>
                    </div>


                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="agreement" class="form-check-input" required>
                        <label for="agreement" class="form-check-label font-ubuntu text-white-50">I agree <a href="#">term, conditions, and policy </a>(*) </label>
                    </div>

                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill text-white px-5">LOGIN</button>
                    </div>

                    <div class="register text-white">I don't have an account <a href="register.php">Register</a></div>

                    <div class="result red-text"><?php echo $resultLogin; ?></div>


                </form>
            </div>
        </div>
    </div>
</section>
<!-- #registration area -->


<?php
// footer.php
include('footerLogin.php');
?>