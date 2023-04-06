<?php
require_once(__DIR__ . '/functions.ini.php');

    
if (isset($_POST["frm-login-submit"])){
    $login_mail  = $_POST["frm-login-mail"];
    $login_password  = $_POST["frm-login-password"];
    
    if (emptyLoginFields($login_mail, $login_password) == true){
        header('location: ../../index.php?error=emptyFields');
    }

    if (login($login_mail, $login_password)){
        echo $test;
    }

}

?>