<?php

	
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
	
	
	$id = 3 ;
	
	
	$result = fp_sibiling_delete($id) ;
	

	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo " sibiling record is deleted ";
	
	?>