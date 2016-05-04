<?php

    include '../utils/db.php';
    include '../utils/usersAPI.php';
    $un = $_GET['login-name'];
    $pass = $_GET['login-pass'];
    $db_user = fp_users_get_by_username($un);
    if($db_user){
        if($un == $db_user->username && md5($pass) == $db_user->password){
            session_start();
            $_SESSION['un'] = $db_user->username;
            $_SESSION['flag'] = 1 ;
        }
        else
            echo "bad ";
    }
    else 
        echo "no user";
function check_login($flag){
    if($_SESSION['flag'] == 1)
        return 1;
    else
        return 0 ;
}
?>
