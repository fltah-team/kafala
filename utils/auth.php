<?php
     session_start();
     if(!isset($_SESSION['un']) || !isset($_SESSION['u_type']) || !isset($_SESSION['name']))
         header("location:../");
?>