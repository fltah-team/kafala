<?php
    include 'auth.php';
    $m='اسم المستخدم أو كلمة المرور غير صحيحة';
    if(isset($_POST['login-name']) && isset($_POST['login-pass'])){
        $log = fp_login($_POST['login-name'],$_POST['login-pass']);
        if($log){
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
    } 
?>
