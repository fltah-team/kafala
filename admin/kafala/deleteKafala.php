<?php
	include('../../utils/db.php');
	include('../../utils/kafalaAPI.php');
        include('../../utils/error_handler.php');
	$id = $_GET['id'];
	$result = fp_kafala_delete($id); 
	fp_db_close();
	if(!$result)
            fp_err_delete_fail ("الكفالة");
        else
            fp_err_delete_succes("الكفالة");
?>