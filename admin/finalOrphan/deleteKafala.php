<?php
    include '../auth.php';
	include('../../utils/db.php');
	include('../../utils/kafalaAPI.php');
    include('../../utils/error_handler.php');
    include '../../utils/notifyAPI.php';
    include '../../utils/usersAPI.php';
    include '../../utils/sponsorAPI.php';
    if(!isset($_GET['id'])){
            fp_err_delete_fail ("الكفالة");
        }
	$id = (int)$_GET['id'];
	$result = fp_kafala_delete($id); 
	fp_db_close();
	if(!$result)
            fp_err_delete_fail ("الكفالة");
        else
            fp_err_delete_succes("الكفالة");
?>