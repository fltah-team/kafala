<?php
	include('../../utils/db.php');
	include('../../utils/stateAPI.php');
        include '../../utils/error_handler.php';
        if(!isset($_POST['name']))
            fp_err_add_fail("المدينة");
        
	$result = fp_state_add($_POST['name']);
	fp_db_close();
	if(!$result)
		fp_err_add_fail("المدينة");
        else
            fp_err_add_succes("المدينة");
?>