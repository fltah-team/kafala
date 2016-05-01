<?php

	include('../../utils/db.php');
	include('../../utils/finalOrphanAPI.php');
        include('../../utils/error_handler.php');
	


	$state = $_GET['status'];	
	$warranty_organization =  $_GET['sponsor'];
        $saving = 0 ;
	$first_name = $_GET['name1'];	
	$meddle_name = $_GET['name2'];	
	$last_name = $_GET['name3'];	
	$last_4th_name = $_GET['name4'];	
	$birth_date = $_GET['y']."-".$_GET['m']."-".$_GET['d'];	
	$sex = $_GET['gender'];	
	$mother_first_name = $_GET['mname1'];	
	$mother_middle_name = $_GET['mname2'];	
	$mother_last_name = $_GET['mname3'];	
	$mother_4th_name = $_GET['mname4'];	
	$mother_Birth_date = $_GET['my']."-".$_GET['mm']."-".$_GET['md'];		
	$mother_state = $_GET['mstatus'];	
	$father_dead_date = $_GET['fy']."-".$_GET['fm']."-".$_GET['fd'];	
	$father_dead_cause = $_GET['dr'];	
	$father_work = $_GET['lw'];	
	$residence_state = $_GET['state'];	
	$city = $_GET['city'];	
	$District = $_GET['district'];	
	$section = $_GET['section'];	
	$house_no = $_GET['hno'];	
	$phone1 = $_GET['tel1'];	
	$phone2 = $_GET['tel2'];
	$studing_state = $_GET['learning'];	
        if($studing_state == 1){
            $nonstuding_cause = "لا يوجد";
            $school_name = $_GET['school'];	
            $level = $_GET['level'];	
            $year = $_GET['class'];	
        }  
        else{
            $nonstuding_cause = $_GET['teachingr'];	
            $school_name = "لا يوجد" ;	
            $level = "لا يوجد";	
            $year = "لا يوجد";	
        }
	
	$quran_parts = $_GET['quran'];	
	$health_state = $_GET['illness'];
        if($health_state == 1)
            $ill_cause = "لا يوجد";
            else
            $ill_cause = $_GET['illt'];	
	$data_entery_name = "user";	
	$data_entery_date  = date("d-m-y");	
        
	$result = fp_final_orphan_add($state , $warranty_organization ,$saving , $first_name , $meddle_name , $last_name , $last_4th_name , $birth_date , $sex , $mother_first_name , $mother_middle_name , $mother_last_name , $mother_4th_name , $mother_Birth_date , $mother_state ,$father_dead_date , $father_dead_cause , $father_work , $residence_state , $city , $District , $section,$house_no , $phone1 , $phone2 ,$studing_state ,$nonstuding_cause, $school_name , $level , $year , $quran_parts , $health_state , $ill_cause , $data_entery_name , $data_entery_date );
	//$_GET['fno']);

	fp_db_close();
	
	if(!$result)
            fp_err_add_fail($first_name." ".$meddle_name);
	else
            fp_err_add_succes($first_name." ".$meddle_name,$result);
?>