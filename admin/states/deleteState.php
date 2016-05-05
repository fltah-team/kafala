<?php
	include('../../utils/db.php');
	include('../../utils/stateAPI.php');
	$id = $_GET['id'];
	$result = fp_delete_state($id);
	fp_db_close();
	if(!$result)
	die ("تعذر الحذف");
	else
	echo "تم الحذف";
?>