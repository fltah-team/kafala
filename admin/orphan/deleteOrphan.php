<?php
	include('../auth.php');
	include('../../utils/db.php');
	include('../../utils/siblingAPI.php');
	include('../../utils/orphanAPI.php');
    include('../../utils/error_handler.php');
    include('../../utils/notifyAPI.php'); 
        if(!isset( $_GET['id'])){
            fp_err_delete_fail("اليتيم");
        }
	$id = $_GET['id'] ;
	$result = fp_orphan_delete($id) ;	
	if(!$result){
            fp_db_close();
            fp_err_delete_fail ('اليتيم');
            }
        else{
            fp_sibiling_delete_for_orphan($id);
            fp_db_close();
            fp_err_delete_succes ('اليتيم');
        }
	?>