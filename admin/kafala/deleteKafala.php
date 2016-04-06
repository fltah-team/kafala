<?php
	include('../../utils/db.php');
	include('../../utils/usersAPI.php');
	$id = $_GET['id'];
	$result = fp_users_delete($id); echo $id ;
	fp_db_close();
	if(!$result)
		die ("fail");

	echo "deleted";
?>