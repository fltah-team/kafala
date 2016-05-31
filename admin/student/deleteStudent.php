<?php
    include '../auth.php';
	include('../../utils/db.php');
	include('../../utils/sponsorAPI.php');
	include('../../utils/studentAPI.php');
    include('../../utils/error_handler.php');
    include('../../utils/notifyAPI.php');        
        if(!isset( $_GET['id'])){
            fp_err_delete_fail("الطالب");
        }
	$id = $_GET['id'] ;
    $st = fp_student_get_by_phone1($id);
    if(!$st)
        fp_err_delete_fail("الطالب");
	$result = fp_student_delete($id) ;
	if(!$result)
            fp_err_delete_fail ('الطالب');
        else{
            
            fp_err_delete_succes ('الطالب');
        }
fp_db_close();
	?>