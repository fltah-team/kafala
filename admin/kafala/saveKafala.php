<?php
	include('../../utils/db.php');
	include('../../utils/kafalaAPI.php');
        include('../../utils/error_handler.php');
        if(!isset($_POST['total']) || !isset($_POST['saving']) || !isset($_POST['sponsor']) || !isset($_POST['last_date']) || !isset($_POST['ponsored']))
            fp_err_add_fail("الكفالة");
	$total = $_POST['total'];
	$saving = $_POST['saving'];
	$sponsor = $_POST['sponsor'];
    $last_date = $_POST['last_date'];
	$ponsored = $_POST['ponsored'];
	$date = date("Y-m-d");
	$result = fp_kafala_add($total,$saving,$date,$sponsor,$last_date,$ponsored);
	fp_db_close();
	if(!$result)
            fp_err_add_fail("الكفالة");
        else
	fp_err_add_succes("الكفالة");
	
?>