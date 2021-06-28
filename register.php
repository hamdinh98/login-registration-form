<?php
// header.php
include('header.php');
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
    require('register-process.php');
?>


<!-- registration area -->
<section id="register">
    <div class="row m-0">

        <h2>Making life tougher.</h2>
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title">Register</h1>
                <p class="p-1 m-0 font-ubuntu text-white-50">Register and enjoy additional features</p>

                <span class="font-ubuntu text-white-50">I already have an account <a href="login.php">Login</a></span>
            </div>
            <div class="d-flex justify-content-center">
                <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName'];  ?>" name="firstName" id="firstName" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col">
                            <input type="text" value="<?php if (isset($_POST['LastName'])) echo $_POST['LastName'];  ?>" name="LastName" id="LastName" class="form-control" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'];  ?>" required name="email" id="email" class="form-control" placeholder="Email*">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="password" id="password" class="form-control" placeholder="password*">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="Confirm Password*">
                            <small id="confirm_error" class="text-danger"></small>
                        </div>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="agreement" class="form-check-input" required>
                        <label for="agreement" class="form-check-label font-ubuntu text-white-50">I agree <a href="#">term, conditions, and policy </a>(*) </label>
                    </div>

                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
                    </div>

                    <div class="result red-text"><?php echo $resultSubmit; ?></div>


                </form>
            </div>
        </div>
    </div>
</section>
<!-- #registration area -->


<?php
// footer.php
include('footer.php');
?>