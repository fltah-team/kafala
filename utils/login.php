<?php
    if(isset($_POST['login-name']) && isset($_POST['login-pass'])){
        include './utils/db.php';
        include './utils/auth.php';
        $log = fp_login($_POST['login-name'],$_POST['login-pass']);
        if($log)echo "OK";else echo "err";
    }
?>
