<?php
	include('../../utils/db.php');
	include('../../utils/sponsorAPI.php');
	$id = (int)$_GET['id'];
	$result = fp_sponsor_delete($id);
	fp_db_close();
	if(!$result)
	die ("تعذر الحذف");
	else
	echo "تم الحذف";
?>