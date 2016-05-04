<?php

	
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
        include('../../utils/error_handler.php');
	$id = $_GET['id'] ;
	$result = fp_orphan_delete($id) ;
	

	fp_db_close();
	
	if(!$result)
            fp_err_delete_fail ('اليتيم');
        else 
            fp_err_delete_succes ('اليتيم');
	
	?>