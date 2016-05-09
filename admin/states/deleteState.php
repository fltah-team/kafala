<?php
	include('../../utils/db.php');
	include('../../utils/stateAPI.php');
	$id = (int)$_GET['id'];
	$result = fp_states_delete($id);
	fp_db_close();
	if(!$result)
	die ("تعذر الحذف");
	else
	echo "تم الحذف";
?>