<?php

	
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');

	$orphan_id = $_GET['o_id'] ;
	$name  = $_GET['sibling_name'] ; 
	$sex = $_GET['s_gender'] ;;
	$birth_date  =  $_GET['s_bd'] ;
	$state = $_GET['sibling_status'] ;
	
	
	$result = fp_sibiling_add( $orphan_id ,$name , $sex , $birth_date , $state) ;
	

	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo " sibiling record is added";
	
	?>