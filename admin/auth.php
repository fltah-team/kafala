<?php
     session_start();
     if(!isset($_SESSION['un']) || !isset($_SESSION['u_type']) || !isset($_SESSION['name']) || $_SESSION['u_type'] == 1)
         header("location:../");
?>