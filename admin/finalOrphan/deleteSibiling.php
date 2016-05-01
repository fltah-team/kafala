<?php

	
	include('../../utils/db.php');
	include('../../utils/finalOrphanAPI.php');
	
	
        $id = (int)$_GET['id'];
	
	
	$result = fp_sibiling_delete($id) ;
	

	fp_db_close();
	
	if(!$result)
		die ("fail");
        else
	echo " sibiling record is deleted ";
	
	?>