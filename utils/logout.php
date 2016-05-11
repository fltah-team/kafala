<?php
    session_start();
    if(isset($_SESSION['un']) && isset($_SESSION['u_type'])&& isset($_SESSION['name'])){
    unset($_SESSION['un']);
    unset($_SESSION['name']);
    unset($_SESSION['u_type']);
    }
    header("location:../");
?>
