<?php

	
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
	
	
        $id = $_GET['id'];
	
	
	$result = fp_sibiling_delete($id) ;
	

	fp_db_close();
	
	if(!$result)
		die ("fail");
        else
	echo " sibiling record is deleted ";
	
	?>