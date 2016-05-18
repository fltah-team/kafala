<?php

	
	include('../../utils/db.php');
	include('../../utils/studentAPI.php');
        include('../../utils/error_handler.php');
	

	if(!isset ( $_GET['status']) || !isset ( $_GET['sponsor']) ||!isset (  $_GET['name1']) ||!isset (  $_GET['name2']) || !isset ( $_GET['name3']) ||!isset (  $_GET['name4'])  ||!isset (  $_GET['y']) || !isset ( $_GET['m']) || !isset ( $_GET['d']) || !isset ( $_GET['gender']) || !isset ( $_GET['fy']) ||!isset (  $_GET['fm']) || !isset ( $_GET['fd']) || !isset ( $_GET['dr']) || !isset ( $_GET['lw']) || !isset ( $_GET['state']) ||!isset (  $_GET['city']) || !isset ( $_GET['district']) ||!isset (  $_GET['section'])|| !isset ( $_GET['hno']) ||!isset (  $_GET['tel1']) || !isset ( $_GET['tel2']) || 
                !isset($_GET['school'])|| !isset($_GET['level'])|| !isset($_GET['class']) 
                || !isset($_GET['last_result']) || !isset($_GET['quran_parts']) || !isset($_GET['study_year_no']) || !isset($_GET['study_date_start']) || !isset($_GET['expected_grad']) 
                || !isset ( $_GET['illness']) || !isset ( $_GET['sponsor']) || !isset ( $_GET['sponsor']) )
        {
            //fp_err_add_fail("الطالب");
        }
	$id = $_GET['id'];
	$state = $_GET['status'];	
	$warranty_organization =  $_GET['sponsor'];
    $saving = $_GET['saving']; ;
	$first_name = $_GET['name1'];	
	$meddle_name = $_GET['name2'];	
	$last_name = $_GET['name3'];	
	$last_4th_name = $_GET['name4'];	
	$birth_date = $_GET['y']."-".$_GET['m']."-".$_GET['d'];	
	$sex = $_GET['gender'];	
	$father_dead_date = $_GET['fy']."-".$_GET['fm']."-".$_GET['fd'];	
	$father_dead_cause = $_GET['dr'];	
	$father_work = $_GET['lw'];
    $sisters_no = $_GET['sisters_no'];	
    $brothers_no = $_GET['brothers_no'];	
	$residence_state = $_GET['state'];	
	$city = $_GET['city'];	
	$District = $_GET['district'];	
	$section = $_GET['section'];	
	$house_no = $_GET['hno'];	
	$phone1 = $_GET['tel1'];
    if(fp_student_get_by_phone1($phone1));
        //fp_err_add_fail("الطالب رقم الجوال1 موجود الرجاء تغييره");
        $phone2 = $_GET['tel2'];

        $school_name = $_GET['school'];	
        $path = $_GET['path'];
        $major =$_GET['major'];	
        $level = $_GET['level'];	
        $year = $_GET['class'];	
        $last_result =$_GET['last_result'];	
        $quran_parts =$_GET['quran'];
        $study_year_no = $_GET['study_year_no'];
        $study_date_start = $_GET['ssy']."-".$_GET['ssm']."-".$_GET['ssd'];
        $expected_grad = $_GET['gy']."-".$_GET['gm']."-".$_GET['gd'];
        $health_state = $_GET['illness'];
        if($health_state == 1){
            $ill_cause = "لا يوجد";
        }
        else{
            $ill_cause = $_GET['illt'];
        }
        //session_start();
	$data_entery_name = "user";//$_SESSION['name'];
	$data_entery_date  = date("y-m-d");	
                            
	$result =fp_student_add($id,$state , $warranty_organization ,$saving, $first_name , $meddle_name , $last_name , $last_4th_name , $birth_date , $sex , $father_dead_date , $father_dead_cause , 	$father_work,$sisters_no , $brothers_no ,$residence_state , $city , $District , $section,$house_no , $phone1 , $phone2 ,$school_name ,  $level , $year,$path ,$major  , $last_result,$quran_parts ,$study_year_no , $study_date_start , $expected_grad  , $health_state , $ill_cause , $data_entery_name , $data_entery_date  );
	//$_GET['fno']);

	fp_db_close();
	
	if(!$result)
            echo "err";//fp_err_add_fail($first_name." ".$meddle_name);
	else
            echo "OK";//fp_err_add_succes($first_name." ".$meddle_name,$phone1);
?>