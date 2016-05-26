<?php
    include '../auth.php';
	include('../../utils/db.php');
	include('../../utils/finalOrphanAPI.php');
        include('../../utils/error_handler.php');
        
        if(!isset ( $_GET['id']) || !isset ( $_GET['status']) || !isset ( $_GET['sponsor']) ||!isset (  $_GET['name1']) ||!isset (  $_GET['name2']) || !isset ( $_GET['name3']) ||!isset (  $_GET['name4'])  ||!isset (  $_GET['y']) || !isset ( $_GET['m']) || !isset ( $_GET['d']) || !isset ( $_GET['gender']) ||!isset (  $_GET['mname1']) || !isset ( $_GET['mname2']) || !isset ( $_GET['mname3'])  || !isset ( $_GET['mname4']) || !isset ( $_GET['my']) || !isset ( $_GET['mm']) ||!isset (  $_GET['md']) ||!isset (  $_GET['mstatus']) || !isset ( $_GET['fy']) ||!isset (  $_GET['fm']) || !isset ( $_GET['fd']) || !isset ( $_GET['dr']) || !isset ( $_GET['lw']) || !isset ( $_GET['state']) ||!isset (  $_GET['city']) || !isset ( $_GET['district']) ||!isset (  $_GET['section'])|| !isset ( $_GET['hno']) ||!isset (  $_GET['tel1']) || !isset ( $_GET['tel2']) || !isset ( $_GET['learning']) 
                || !isset ( $_GET['quran']) || !isset ( $_GET['illness'])  )
        {
            fp_err_upadte_fail_record("اليتيم");
        }
        
	$id = (int)$_GET['id'];
	$state = $_GET['status'];	
	$warranty_organization =  $_GET['sponsor'];
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
            if (!isset($_GET['school'])|| !isset($_GET['level'])|| !isset($_GET['class']))
            {
              fp_err_upadte_fail_record("اليتيم");
            }else{
                $nonstuding_cause = "لا يوجد";
                $school_name = $_GET['school'];	
                $level = $_GET['level'];	
                $year = $_GET['class'];	
            }
                
        }  
        else{
           if (!isset($_GET['teachingr']))
            {
                 fp_err_upadte_fail_record("اليتيم");
            }else{
                $nonstuding_cause = $_GET['teachingr'];	
                $school_name = "لا يوجد" ;	
                $level = "لا يوجد";	
                $year = "لا يوجد";
            }
        }
	
	$quran_parts = $_GET['quran'];	
	$health_state = $_GET['illness'];
        if($health_state == 1){
            $ill_cause = "لا يوجد";
        }
        else{
             if (!isset($_GET['illt'])){
                fp_err_upadte_fail_record("اليتيم");
             }
            $ill_cause = $_GET['illt'];
        }	
	$data_entery_name = "user";	
	$data_entery_date  = date("d-m-y");	

	
	$result = fp_final_orphan_update($id , $state , $warranty_organization ,null ,null ,  $first_name , $meddle_name , $last_name , $last_4th_name , $birth_date , $sex , $mother_first_name , $mother_middle_name , $mother_last_name , $mother_4th_name , $mother_Birth_date , $mother_state ,$father_dead_date , $father_dead_cause , $father_work , $residence_state , $city , $District , $section,$house_no , $phone1 , $phone2  , $studing_state ,$nonstuding_cause, $school_name , $level , $year , $quran_parts , $health_state , $ill_cause , $data_entery_name , $data_entery_date  );
	//$_GET['fno']);
	fp_db_close();
	
	if(!$result)
            fp_err_upadte_fail("اليتيم");
        else 
            fp_err_update_succes("اليتيم");
	
	?>