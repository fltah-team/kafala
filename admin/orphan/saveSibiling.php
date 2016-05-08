<?php

	
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
        include('../../utils/siblingAPI.php');
        if(!isset($_GET['o_id']) || (int)$_GET['o_id']== 0 || $_GET['o_id'] == '' ||
                !isset($_GET['sibling_name'])|| $_GET['sibling_name'] == '' ||
                !isset($_GET['s_gender']) || $_GET['s_gender'] == '' ||
                !isset($_GET['sibling_status']) || (int)$_GET['sibling_status']== 0 || $_GET['sibling_status'] == '' ||
                !isset($_GET['s_bd']) || $_GET['s_bd'] == '')
            die ("تعذر اضافة الفرد");
	$orphan_id = $_GET['o_id'] ;
	$name  = $_GET['sibling_name'] ; 
	$sex = (int)$_GET['s_gender'] ;;
	$birth_date  =  $_GET['s_bd'] ;
	$state = $_GET['sibling_status'] ;
	
	
	$result = fp_sibiling_add( $orphan_id ,$name , $sex , $birth_date , $state) ;
	
	fp_db_close();
	
	if(!$result)
            fp_err_add_fail ("فرد العائلة ");
        else 
            fp_err_add_succes ("فرد العائلة ");
	
	?>