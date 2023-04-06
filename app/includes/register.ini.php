<?php
require_once(__DIR__ . '/functions.ini.php');

    
if (isset($_POST["frm-register-submit"])){
    $register_mail  = $_POST["frm-register-mail"];
    $register_password  = $_POST["frm-register-password"];
    $register_password_confirm = $_POST["frm-register-password-confirm"];

    if (emptyRegisterFields($register_mail, $register_password, $register_password_confirm) == true){
        header('location: ../../register.php?error=emptyFields');
        exit();
    }

    if ($register_password !== $register_password_confirm){
        header('location: ../../register.php?error=passwordNotMatching');
        exit();
    }
    if (register($register_mail, $register_password) == true){
        header('location: ../../index.php?error=Success');
        exit();
    } else {
        header('location: ../../register.php?error=EmailAlreadyInUse');
        exit();
    }
    
}

?>