<?php

	
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
	include('../../utils/siblingAPI.php');
         include('../../utils/error_handler.php');
       
        if(!isset($_GET['id']) || $_GET['id']== 0 || $_GET['id'] == ''){
            fp_err_delete_fail ("فرد العائلة");
        }
            
            
        $id = $_GET['id'];
	$result = fp_sibiling_delete($id) ;
	fp_db_close();
        
	if(!$result)
            fp_err_delete_fail ("فرد العائلة");
        else 
            fp_err_delete_succes ("فرد العائلة");
	
	?>