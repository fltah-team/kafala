<?php

	
	include('../../utils/db.php');
	include('../../utils/preacherAPI.php');
	
	
	$id = 2 ;
	
	$result = fp_experience_delete($id) ;
	

	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo " experience record is deleted ";
	
	?>