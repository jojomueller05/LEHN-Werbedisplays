<?php
require_once(__DIR__ . '/functions.ini.php');

    
if (isset($_POST["frm-login-submit"])){
    $login_mail  = $_POST["frm-login-mail"];
    $login_password  = $_POST["frm-login-password"];
    
    if (emptyLoginFields($login_mail, $login_password) == true){
        header('location: ../../index.php?error=emptyFields');
        exit();
    }

    if (UserAlreadyLoggedIn() == true){
        header('location: ../../index.php?error=UserAlreadyLoggedIn');
        exit();
    }

    if (login($login_mail, $login_password) == true){
        echo "<h1>login Sucess</h1>";
        exit();
    } else {
        header('location: ../../index.php?error=WrongPassword');
        exit();
    }

}

?>