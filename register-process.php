<?php


require('clean.php');
$error = array();

$firstName = validate_text($_POST['firstName']);

if (empty($firstName))
    $error[] = "you forget to enter your firstname";

$LastName = validate_text($_POST['LastName']);

if (empty($LastName))
    $error[] = "you forget to enter your lastname";



$email = validate_text($_POST['email']);

if (empty($email))
    $error[] = "you forget to enter your email";



$password = validate_text($_POST['password']);

if (empty($password))
    $error[] = "you froget to enter your password";

$cofm_password = validate_text($_POST['confirm_pwd']);
if (empty($cofm_password))
    $error[] = "you must to confirm your password";


if (empty($error))
    echo "validate";
else
    echo "not valid";
