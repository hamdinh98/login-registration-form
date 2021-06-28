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


if (empty($error)) {
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    require('connect_mysqli.php');
    $query = "INSERT INTO user(first_name,last_name,email,password) VALUES('$firstName','$LastName','$email','$hash_password')";
    $sql = "SELECT first_name,last_name FROM user";
    $getData = mysqli_query($connect, $sql);
    $data = mysqli_fetch_all($getData, MYSQLI_ASSOC);
    //print_r($data);

    // check either the first_name and last_name exist in database or not 
    $exist = false;
    foreach ($data as $row) {
        if ($row['first_name'] == $firstName && $row['last_name'] == $LastName) {
            $resultSubmit = '<div class="alert alert-warning">
                <strong>Warning!</strong> your first name and last name already exist !.
              </div>';
            $exist = true;
            break;
        }
    }
    if (!$exist) {
        mysqli_query($connect, $query);
        $resultSubmit = '<div class="alert alert-success">
        <strong>Success!</strong> successfully registered you must to login to access to the main page
      </div>';
    }
}
