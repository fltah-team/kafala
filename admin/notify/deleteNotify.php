<?php
	include('../../utils/db.php');
	include('../../utils/notifyAPI.php');
        include('../../utils/error_handler.php');
        

	$id = 3 ;
	$result = fp_notify_delete($id) ;
	fp_db_close();
	if(!$result)
             die("err");   
?>