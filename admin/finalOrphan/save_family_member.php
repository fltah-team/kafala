<?php
    include '../auth.php';
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
	include('../../utils/error_handler.php');
    
        
        if(!isset ( $_GET['orphan']) || !isset ( $_GET['name']) || !isset ( $_GET['sex']) || !isset ( $_GET['bd']) || !isset ( $_GET['state']) ){
             fp_err_add_fail("فرد العائلة ");           
        }        
	$result = fp_orphans_add_family_member($_GET['orphan'],$_GET['name'],$_GET['sex'],$_GET['bd'],$_GET['state']);
	fp_db_close();
	
	if(!$result)
            fp_err_add_fail ("فرد العائلة ");
        else 
            fp_err_add_succes ("فرد العائلة ");
?>