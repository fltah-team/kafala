<?php

	
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
    include('../../utils/error_handler.php');
    include('../../utils/notifyAPI.php'); 
        if(!isset( $_GET['id'])){
            fp_err_delete_fail("اليتيم");
        }
	$id = $_GET['id'] ;
	$result = fp_orphan_delete($id,0) ;
	

	fp_db_close();
	
	if(!$result)
            fp_err_delete_fail ('اليتيم');
        else 
            fp_err_delete_succes ('اليتيم');
	
	?>