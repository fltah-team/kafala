<?php
    include 'auth.php';
    $m='اسم المستخدم أو كلمة المرور غير صحيحة';
    if(isset($_POST['login-name']) && isset($_POST['login-pass'])){
        $un = $_POST['login-name'];
        $pass = $_POST['login-pass'];
        include 'db.php';
        include 'usersAPI.php';
        $db_user = fp_users_get_by_username($un);echo serialize($db_user);
        if($db_user){
            if($un == $db_user->username && md5($pass) == $db_user->password ){
            session_start();
            $_SESSION['un'] = $db_user->username;
            $_SESSION['name'] = $db_user->name;
            $_SESSION['u_type'] = $db_user->type ;
            echo $_SESSION['u_type'];
            switch ($_SESSION['u_type']){
                case 1 : header("location:../admin/admin.php");
                    break;
                case 2 : header("location:../admin/admin.php");
                    break;
                case 3 : header("location:../admin/admin.php");
                    break;
                case 4 : header("location:../admin/admin.php");
                    break;
                default : header("location:../index.php?m=".$m);
            }
        }else header("location:../index.php?m=".$m);
    }else header("location:../index.php?m=".$m);
            }else header("location:../index.php?m=".$m);
 
?>
