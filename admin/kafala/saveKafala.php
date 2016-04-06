<?php
	include('../../utils/db.php');
	include('../../utils/usersAPI.php');
	
	$result = fp_users_add($_POST['name'],$_POST['un'],$_POST['pass'],$_POST['type']);
	fp_db_close();
	if(!$result)
		die ("fail");

	echo "added";
?>