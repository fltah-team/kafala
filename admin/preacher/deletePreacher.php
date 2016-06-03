<?php

	
	include('../../utils/db.php');
	include('../../utils/sponsorAPI.php');
	include('../../utils/experienceAPI.php');
	include('../../utils/preacherAPI.php');
    include('../../utils/error_handler.php');
    include('../../utils/notifyAPI.php');        
        if(!isset( $_GET['id'])){
            fp_err_delete_fail("الداعية");
        }
	$id = $_GET['id'] ;
    $st = fp_preacher_get_by_phone1($id);
    if(!$st)
        fp_err_delete_fail("الداعية");
	$result = fp_preacher_delete($id) ;
	if(!$result)
            fp_err_delete_fail ('الداعية');
        else{
            fp_experience_delete_by_preacher_id($id);
            fp_err_delete_succes ('الداعية');
        }
fp_db_close();
	?>