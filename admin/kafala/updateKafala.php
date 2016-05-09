<?php
	include('../../utils/db.php');
	include('../../utils/usersAPI.php');
        
        if(!isset($_GET['id'])){
            fp_err_upadte_fail ("الكفالة");
        }
	$id = (int)$_GET['id'];
	$result = fp_users_update($id,$_POST['name'],$_POST['un']);
	fp_db_close();

        if(!$result)
            fp_err_upadte_fail ("الكفالة");
        else
            fp_err_upadte_succes("الكفالة");
?>