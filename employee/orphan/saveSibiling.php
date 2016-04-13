<?php

	
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
	
	$orphan_id = 2 ;
	$name  = "ss" ;
	$sex = "male";
	$birth_date  =  "2000-12-10";
	$state = "";
	
	
	$result = fp_sibiling_add( $orphan_id ,$name , $sex , $birth_date , $state) ;
	

	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo " sibiling record is added";
	
	?>