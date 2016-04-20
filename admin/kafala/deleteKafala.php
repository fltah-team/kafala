<?php
	include('../../utils/db.php');
	include('../../utils/kafalaAPI.php');
	$id = $_GET['id'];
	$result = fp_kafala_delete($id); 
	fp_db_close();
	if(!$result)
		die ("تعذر الحذف");

	echo "تمت عملية الحذف";
?>