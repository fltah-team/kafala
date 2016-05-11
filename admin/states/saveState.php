<?php
	include('../../utils/db.php');
	include('../../utils/stateAPI.php');
        include '../../utils/error_handler.php';
        if(!isset($_GET['name']))
            fp_err_add_fail("المدينة");
        
	$result = fp_states_add($_GET['name']);
	fp_db_close();
	if(!$result)
		fp_err_add_fail("الولاية");
        else
                fp_err_add_succes("الولاية");
?>