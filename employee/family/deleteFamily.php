<?php

	
	include('../../utils/db.php');
	include('../../utils/familyAPI.php');

	$id = 1 ;

	$result = fp_family_delete($id) ;
	

	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo " record is deleted ";
	
	?>