<?php

	
	include('../../utils/db.php');
	include('../../utils/studentAPI.php');
        include('../../utils/error_handler.php');
	

	if(!isset ( $_GET['status']) || !isset ( $_GET['sponsor']) ||!isset (  $_GET['name1']) ||!isset (  $_GET['name2']) || !isset ( $_GET['name3']) ||!isset (  $_GET['name4'])  ||!isset (  $_GET['y']) || !isset ( $_GET['m']) || !isset ( $_GET['d']) || !isset ( $_GET['gender']) || !isset ( $_GET['fy']) ||!isset (  $_GET['fm']) || !isset ( $_GET['fd']) || !isset ( $_GET['dr']) || !isset ( $_GET['lw']) || !isset ( $_GET['state']) ||!isset (  $_GET['city']) || !isset ( $_GET['district']) ||!isset (  $_GET['section'])|| !isset ( $_GET['hno']) ||!isset (  $_GET['tel1']) || !isset ( $_GET['tel2']) || 
                !isset($_GET['school'])|| !isset($_GET['level'])|| !isset($_GET['class']) 
                || !isset($_GET['last_result']) || !isset($_GET['quran_parts']) || !isset($_GET['study_year_no']) || !isset($_GET['study_date_start']) || !isset($_GET['expected_grad']) 
                || !isset ( $_GET['illness']) || !isset ( $_GET['sponsor']) || !isset ( $_GET['sponsor']) )
        {
            fp_err_add_fail("الطالب");
        }
        
        

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
        if(fp_orphan_get_by_phone1($phone1))
            fp_err_add_fail("اليتيم رقم الجوال1 موجود الرجاء تغييره");
	$phone2 = $_GET['tel2'];

        $school_name = $_GET['school'];	
        $path = "dd";
        $major = "ss";
        $level = $_GET['level'];	
        $year = $_GET['class'];	
        $last_result ="";
        $quran_parts =$_GET['quran'];
        $study_year_no = 0 ;
        $study_date_start = "" ;
        $expected_grad = "";
	$health_state = $_GET['illness'];
        if($health_state == 1){
            $ill_cause = "لا يوجد";
        }
        else{
             if (!isset($_GET['illt'])){
            fp_err_add_fail("الطالب"); 
             }
            $ill_cause = $_GET['illt'];
        }
	$data_entery_name = "user";	
	$data_entery_date  = date("d-m-y");	
        
	$result =fp_student_add($state , $warranty_organization ,$saving, $first_name , $meddle_name , $last_name , $last_4th_name , $birth_date , $sex , $father_dead_date , $father_dead_cause , 	$father_work ,$sisters_no , $brothers_no ,$residence_state , $city , $District , $section,$house_no , $phone1 , $phone2 ,$school_name ,$path ,$major ,  $level , $year , $last_result,$quran_parts ,$study_year_no , $study_date_start , $expected_grad  , $health_state , $ill_cause , $data_entery_name , $data_entery_date  );
	//$_GET['fno']);

	fp_db_close();
	
	if(!$result)
            fp_err_add_fail($first_name." ".$meddle_name);
	else
            fp_err_add_succes($first_name." ".$meddle_name,$phone1);
?>