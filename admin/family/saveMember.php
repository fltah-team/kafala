<?php
	include('../auth.php');
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
    include('../../utils/familyAPI.php');
	$sibling_name = $_GET['sibling_name'];
	$s_bd  = $_GET['s_bd'] ; 
	$sex = (int)$_GET['s_gender'] ;;
	$o_id  =  $_GET['o_id'] ;
	$seral = $_GET['seral'] ;
	$slevel = $_GET['slevel'] ;
    $ill_state = $_GET['ill_state'] ;
	echo $o_id;
	$result = fp_member_add($sibling_name,$sex,$s_bd,$seral,$slevel,$ill_state,$o_id) ;
	
	fp_db_close();
	
	if(!$result)
            echo(" لم تتم الاضافة ");
        else 
            echo("تمت الاضافة بنجاح");
	
	?>