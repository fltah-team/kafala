<?php

	
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
	include('../../utils/experienceAPI.php');
         include('../../utils/error_handler.php');
       
        if(!isset($_GET['id']) || $_GET['id']== 0 || $_GET['id'] == ''){
            fp_err_delete_fail ("فرد العائلة");
        }
            
            
        $id = (int)$_GET['id'];
	$result = fp_experience_delete($id) ;
	fp_db_close();
        
	if(!$result)
            echo(" لم تتم عملية الحذف ");
        else 
            echo("تمت عملية الحذف  بنجاح");
	?>