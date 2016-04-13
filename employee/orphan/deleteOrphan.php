<?php

	
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
	$id = 6 ;

	$result = fp_orphan_delete($id) ;
	

	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo " record is deleted ";
	
	?>