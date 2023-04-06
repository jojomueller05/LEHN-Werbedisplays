<?php
function emptyLoginFields($login_mail, $login_password){
    if(empty($login_mail) || empty($login_password) == true){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function emptyRegisterFields($register_mail, $register_password, $register_password_confirm){
    if(empty($register_mail) || empty($register_password || empty($register_password_confirm)) == true){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function UserAlreadyLoggedIn(){
    //Check if a user already is logged in
    if (isset($_SESSION['user_logged_in'])){
        return true;
    } else {
        return false;
    }
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
            
            return true;
        } else {
            return false;
        }
    }

}

function register($register_mail, $register_password){
    
    //load pdo connection
    require_once ('dbh.inc.php');

    // Hash password
    $hashed_password = password_hash($register_password, PASSWORD_DEFAULT);

    // Check if email already exists
    $stmt = $pdo->prepare('SELECT COUNT(*) FROM user WHERE email = ?');
    $stmt->execute([$register_mail]);
    $email_exists = $stmt->fetchColumn();

    // Register user if email doesn't exist
    if ($email_exists == 0) {
        $stmt = $pdo->prepare('INSERT INTO user (email, password, created_at) VALUES (?, ?, NOW())');
        $stmt->execute([$register_mail, $hashed_password]);
        return $pdo->lastInsertId();
    } else {
        // Return an error message or redirect the user to a page indicating that the email already exists
        return false;
    }


}
  