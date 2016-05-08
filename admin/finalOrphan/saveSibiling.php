<?php

	
	include('../../utils/db.php');
	include('../../utils/finalOrphanAPI.php');
        include('../../utils/error_handler.php');
        
        if(!isset ( $_GET['o_id']) || !isset ( $_GET['sibling_name']) || !isset ( $_GET['s_gender']) || !isset ( $_GET['s_bd']) || !isset ( $_GET['sibling_status'])  ){
            fp_err_add_fail("فرد العائلة ");
        }
        
	$orphan_id = $_GET['o_id'] ;
	$name  = $_GET['sibling_name'] ; 
	$sex = $_GET['s_gender'] ;;
	$birth_date  =  $_GET['s_bd'] ;
	$state = $_GET['sibling_status'] ;
	
	
	$result = fp_sibiling_add( $orphan_id ,$name , $sex , $birth_date , $state) ;
	
	fp_db_close();
	
	if(!$result)
            fp_err_add_fail ("فرد العائلة ");
        else 
            fp_err_add_succes ("فرد العائلة ");
            
        
	
	?>