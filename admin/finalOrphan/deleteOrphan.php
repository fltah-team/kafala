<?php
    include '../auth.php';
	include('../../utils/siblingAPI.php');
	include('../../utils/db.php');
	include('../../utils/finalOrphanAPI.php');
    include('../../utils/error_handler.php');

        
	$id = (int)$_GET['id'] ;
	$result = fp_final_orphan_delete($id) ;
	
        if(!isset($_GET['id'])){
            fp_err_delete_fail("اليتيم");
        }

	fp_db_close();
	
	if(!$result){
            fp_err_delete_fail("اليتيم");
        }	
         else {
            // FOR DELEE SIBLINGS  fp_sibiling_delete_for_orphan($id)
            fp_err_delete_succes("اليتيم");
        }

	
	?>