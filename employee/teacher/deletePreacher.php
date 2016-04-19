<?php

	
	include('../../utils/db.php');
	include('../../utils/preacherAPI.php');
	$id = 1 ;

	$result = fp_preacher_delete($id);
	

	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo " record is deleted ";
	
	?>