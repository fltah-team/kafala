<?php
function fp_login($un,$pass){
    include 'db.php';
    include 'usersAPI.php';
    $n_un    = @mysql_real_escape_string(strip_tags($un));
    $n_pass    = @mysql_real_escape_string(strip_tags($pass));
    $db_user = fp_users_get_by_username($n_un);
    if($db_user){
        if($n_un == $db_user->username && md5($n_pass) == $db_user->password ){
            session_start();
            $_SESSION['un'] = $db_user->username;
            $_SESSION['u_type'] = $db_user->type ;
            return true;
        }
        else
            return false;
}
}
function fp_is_loged($t){
     if(isset($_SESSION['un']) && isset($_SESSION['u_type'])){
         if($t == $_SESSION['u_type']) return true ;
         else if($t == '*') return true ; 
     }
     return false ;
}
function fp_logout(){
    session_destroy();
    header("location:../");
}
?>