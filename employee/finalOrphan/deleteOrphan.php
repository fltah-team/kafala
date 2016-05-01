<?php

	
	include('../../utils/db.php');
	include('../../utils/finalOrphanAPI.php');
	$id = (int)$_GET['id'] ;
	$result = fp_final_orphan_delete($id) ;
	

	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo " record is deleted ";
	
	?>