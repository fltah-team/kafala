<?php
	include('../../utils/db.php');
	include('../../utils/notifyAPI.php');
    include('../../utils/error_handler.php');
	$id = $_GET['id'];
	$result = fp_notify_delete($id) ;
	fp_db_close();
	if(!$result)
        die("err");  
    echo "OK";
?>