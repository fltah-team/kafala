<?php
	include('../../utils/db.php');
	include('../../utils/usersAPI.php');
	$id = (int)$_GET['id'];
	$result = fp_users_delete($id);
	fp_db_close();
	if(!$result)
		die ("fail");
	else
	echo "تم الحذف";
?>