<?php
	include('../../utils/db.php');
	include('../../utils/usersAPI.php');
	$id = $_GET['id'];
	$result = fp_users_update($id,$_GET['name'],$_GET['un']);
	fp_db_close();
	if(!$result)
		echo ("fail");

	echo "تم تعديل البيانات";
?>