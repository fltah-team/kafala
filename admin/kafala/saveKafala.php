<?php
	include('../../utils/db.php');
	include('../../utils/kafalaAPI.php');
	$total = $_GET['total'];
	$saving = $_GET['saving'];
	$sponsor = $_GET['sponsor'];
	$months = $_GET['months'];
	$ponsored = $_GET['ponsored'];
	$date = date("y-m-d");
	$amount = $total-$saving;
	$result = fp_kafala_add($amount,$saving,$date,$sponsor,$months,$ponsored);
	fp_db_close();
	if(!$result)
		die ('<div id="success_notice"  class="alert-box error">'."<span>خطأ :   </span>"."لم تتم عملية اضافة الكفالة"."</div>");

	echo ('<div id="success_notice"  class="alert-box success"><span>نجاح :   </span>تمت اضافة الكفالة بنجاح</div>');
	
?>