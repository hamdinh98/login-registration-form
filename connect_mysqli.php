<?php
try {

    $connect = mysqli_connect('localhost', 'root', '', 'login-registration');
} catch (Exception $e) {
    print "an exception occured message" . $e->getMessage();
} catch (Error $e) {
    print "system is busy try later";
}
