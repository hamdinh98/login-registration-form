

<?php

require('connect_mysqli.php');
$errorLogin = ['email' => '', 'password' => ''];
$emailLogin = $_POST['emailLogin'];
$passwordLogin = $_POST['passwordLogin'];

if (!empty($emailLogin) && !empty($passwordLogin)) {
    $sql = 'SELECT email, password FROM user';
    $query = mysqli_query($connect, $sql);
    $rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
    $found = false;
    foreach ($rows as $user) {
        if ($user['email'] == $emailLogin && password_verify($passwordLogin, $user['password'])) {
            $found = true;
        }
    }

    $found ? header('location:main-page.php') : $resultLogin = '<div class="alert alert-warning">
    <strong>Warning!</strong> please check your information
  </div>';
}

?>