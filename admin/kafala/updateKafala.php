<?php
	include('../../utils/db.php');
	include('../../utils/usersAPI.php');
	$id = $_GET['id'];
	$result = fp_users_update($id,$_POST['name'],$_POST['un']);
	fp_db_close();
	if(!$result)
		die ("fail");

	echo "updated";
?>