<?php
	include('../../utils/db.php');
	include('../../utils/kafalaAPI.php');
	$total = $_POST['total'];
	$saving = $_POST['saving'];
	$sponsor = $_POST['sponsor'];
	$months = $_POST['months'];
	$ponsored = $_POST['ponsored'];
	$date = date("y-m-d");
	$amount = $total-$saving;
	$result = fp_kafala_add($amount,$saving,$date,$sponsor,$months,$ponsored);
	fp_db_close();
	if(!$result)
		die ("fail");

	echo "تمت اضافة";
	
?>