<?php

	
	include('../../utils/db.php');
	include('../../utils/studentAPI.php');
        include('../../utils/error_handler.php');
        
        if(!isset( $_GET['id'])){
            fp_err_delete_fail("الطالب");
        }
	$id = $_GET['id'] ;
	$result = fp_student_delete($id) ;
	

	fp_db_close();
	
	if(!$result)
            fp_err_delete_fail ('الطالب');
        else 
            fp_err_delete_succes ('الطالب');
	
	?>