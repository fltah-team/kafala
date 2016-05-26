<?php

	include('../../utils/notifyAPI.php');
	include('../../utils/db.php');
	include('../../utils/finalStudentAPI.php');
    include('../../utils/error_handler.php');
    include('../../utils/sponsorAPI.php');
 
    if(!isset( $_GET['id'])){
            fp_err_delete_fail("الطالب");
        }
	$id = $_GET['id'] ;
    $st = fp_final_student_get_by_id($id);
    if(!$st)
        fp_err_delete_fail("الطالب");
	$result = fp_final_student_delete($id) ;
	if(!$result)
            fp_err_delete_fail ('الطالب');
        else{
            
            fp_err_delete_succes ('الطالب');
        }
     fp_db_close();       
	
	?>