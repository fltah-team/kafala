<?php
	include("db.php");
	include("usersAPI.php");
	$result = fp_users_delete(6);
	if(!$result) {
		fp_db_close();
		die("fail");
		}
		echo "OK"
	  ?>