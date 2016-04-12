<?php
	/*include('../../utils/db.php');
	include('../../utils/kafalaAPI.php');
	$total = $_POST['total'];
	$saving = $_POST['saving'];
	$sponsor = $_POST['sponsor'];
	$months = $_POST['months'];
	$date = $_POST['date'];
	$amount = $total-$saving;
	$result = fp_kafala_add($amount,$saving,$date,$sponsor,$months);
	fp_db_close();
	if(!$result)
		die ("fail");

	echo "تمت اضافة".$_POST['name'];*/
	echo date_format(y/m/d);
?>