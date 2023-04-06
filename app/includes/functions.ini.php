<?php
function emptyLoginFields($login_mail, $login_password){
    if(empty($login_mail) || empty($login_password) == true){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}


function login($login_mail, $login_password){
require_once ('dbh.inc.php');

    //Check if a user already is logged in
    if (isset($_SESSION['user_logged_in'])){
        header('location: ../../index.php?error=UserAlreadyLoggedIn');
        exit();

    } else{
        $stmt = $pdo->prepare('SELECT * FROM user WHERE email = ?');
        $stmt->execute([$login_mail]);
        $user = $stmt->fetch();
        
        // account doesnt exist
        if ($user == false){
            header('location: ../../index.php?error=invalidEmail');
            exit();
        }
        
        if ($user && password_verify($login_password, $user['password'])) {
            
            // set logged_in to true in DB and last login
            $stmt = $pdo->prepare('UPDATE user SET logged_in = true, last_login_at = CURRENT_TIMESTAMP WHERE email = ?');
            $stmt->execute([$login_mail]);
            
            // update user variable
            $stmt = $pdo->prepare('SELECT * FROM user WHERE email = ?');
            $stmt->execute([$login_mail]);
            $user = $stmt->fetch();     
            
            session_start();
            $_SESSION['user_mail'] = $user['email'];
            $_SESSION['user_last_login_at'] = $user['last_login_at'];
            $_SESSION['user_logged_in'] = $user['logged_in'];
        
        } else {
            header('location: ../../index.php?error=WrongPassword');
            exit();
        }
    }

}

  