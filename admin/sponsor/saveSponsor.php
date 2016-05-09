<?php
	include('../../utils/db.php');
	include('../../utils/sponsorAPI.php');
        include '../../utils/error_handler.php';
        if(!isset($_GET['name']))
            fp_err_add_fail("جهة الكفالة");
        
	$result = fp_sponsor_add($_GET['name'],0);
	fp_db_close();
	if(!$result)
		fp_err_add_fail("جهة الكفالة");
        else
                fp_err_add_succes("جهة الكفالة");
?>