<?php
	include('../../utils/db.php');
	include('../../utils/kafalaAPI.php');
        include('../../utils/error_handler.php');
	$total = $_GET['total'];
	$saving = $_GET['saving'];
	$sponsor = $_GET['sponsor'];
	$months = $_GET['months'];
	$ponsored = $_GET['ponsored'];
        if(!isset($_GET['total']) || !isset($_GET['saving']) || !isset($_GET['sponsor']) || !isset($_GET['months']) || !isset($_GET['ponsored']))
            fp_err_add_fail("الكفالة");
	$date = date("y-m-d");
	$amount = $total-$saving;
	$result = fp_kafala_add($amount,$saving,$date,$sponsor,$months,$ponsored);
	fp_db_close();
	if(!$result)
            fp_err_add_fail("الكفالة");
        else
	fp_err_add_succes("الكفالة");
	
?>