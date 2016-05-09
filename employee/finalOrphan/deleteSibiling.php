<?php

	
	include('../../utils/db.php');
	include('../../utils/finalOrphanAPI.php');
	
	
        $id = (int)$_GET['id'];
	
	if(!isset($_GET['id'])){
            fp_err_delete_fail("فرد العائلة");
        }
	$result = fp_sibiling_delete($id) ;
	

	fp_db_close();
	
	if(!$result){
            fp_err_delete_fail("فرد العائلة");
        }	
         else {
            fp_err_delete_succes("فرد العائلة")  ;
        }
	
	?>