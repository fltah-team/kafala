<?php

	
	include('../../utils/db.php');
	include('../../utils/studentAPI.php');
	$id = 1 ;

	$result = fp_student_delete($id);
	

	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo " record is deleted ";
	
	?>