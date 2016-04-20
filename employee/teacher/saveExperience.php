<?php

	
	include('../../utils/db.php');
	include('../../utils/preacherAPI.php');

	$preacherID= 2 ;
        $qualifier_name = "ff"; 
        $organizaton = "ss";
	$date = "2000-12-10";
	
	$result = fp_experience_add( $qualifier_name , $organizaton , $date , $preacherID) ;
	

	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo " experience record is added";
	
	?>