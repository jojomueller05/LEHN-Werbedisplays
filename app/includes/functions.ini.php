<?php
function emptyLoginFields($login_mail, $login_password){
    if(empty($username) || empty($password) == true){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function login($login_mail, $login_password){
    
}