<?php
$ch = fp_login("obay","dd4b21e9ef71e1291183a46b913ae6f2");
if($ch)echo"ok";else echo "err";
function fp_login($un,$pass){
    include 'db.php';
    include 'usersAPI.php';
    global $fp_handle;
    $n_un    = @mysql_real_escape_string(strip_tags($un),$fp_handle);
    $n_pass    = @md5(@mysql_real_escape_string(strip_tags($pass),$fp_handle));
    $db_user = fp_users_get_by_username($un);
    echo $n_un;
    if($db_user){
        if($n_un == $db_user->username ){
            echo "withpass";
            session_start();
            $_SESSION['un'] = $db_user->username;
            $_SESSION['u_type'] = $db_user->type ;
            $_SESSION['password'] = $db_user->password ;
            return true;
        }
        else
            return false;
}
}
?>