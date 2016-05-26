<?php

	
	include('../../utils/db.php');
    include('../../utils/sponsorAPI.php');
    include('../../utils/notifyAPI.php');
	include('../../utils/preacherAPI.php');
    include('../../utils/error_handler.php');

	/*if(!isset ( $_GET['status']) || !isset ( $_GET['sponsor']) ||!isset (  $_GET['name1']) ||!isset (  $_GET['name2']) || !isset ( $_GET['name3']) ||!isset (  $_GET['name4'])  ||!isset (  $_GET['y']) || !isset ( $_GET['m']) || !isset ( $_GET['d']) || !isset ( $_GET['gender']) || !isset ( $_GET['fy']) ||!isset (  $_GET['fm']) || !isset ( $_GET['fd']) || !isset ( $_GET['dr']) || !isset ( $_GET['lw']) || !isset ( $_GET['state']) ||!isset (  $_GET['city']) || !isset ( $_GET['district']) ||!isset (  $_GET['section'])|| !isset ( $_GET['hno']) ||!isset (  $_GET['tel1']) || !isset ( $_GET['tel2']) || 
                !isset($_GET['school'])|| !isset($_GET['level'])|| !isset($_GET['class']) 
                || !isset($_GET['last_result']) || !isset($_GET['quran_parts']) || !isset($_GET['study_year_no']) || !isset($_GET['study_date_start']) || !isset($_GET['expected_grad']) 
                || !isset ( $_GET['illness']) || !isset ( $_GET['sponsor']) )
        {
            //  -------  fp_err_add_fail("الطالب");
        }*/
        
        

	$state = $_GET['status'];	
    $type = $_GET['typ'];	
	$warranty_organization =  $_GET['sponsor'];
    $saving = 0 ;
	$first_name = $_GET['name1'];	
	$meddle_name = $_GET['name2'];	
	$last_name = $_GET['name3'];	
	$last_4th_name = $_GET['name4'];	
	$birth_date = $_GET['y']."-".$_GET['m']."-".$_GET['d'];	
	$sex = $_GET['gender'];
    $female_members_no = $_GET['sisters_no'];
    $male_members_no = $_GET['brothers_no'];	
	$residence_state = $_GET['state'];	
	$city = $_GET['city'];	
	$District = $_GET['district'];	
	$section = $_GET['section'];	
	$house_no = $_GET['hno'];	
	$phone1 = $_GET['tel1'];
    if(fp_preacher_get_by_phone1($phone1))
      fp_err_add_fail("الطالب رقم الجوال1 موجود الرجاء تغييره");
        $phone2 = $_GET['tel2'];
        $qualify_name = $_GET['cert'];
        $qualify_date = $_GET['cy']."-".$_GET['cm']."-".$_GET['cd'];	
        $qualify_rating = $_GET['digree'];	
        $Issuer = $_GET['cert_org'];	
        $current_work = $_GET['w_org'];	
        $Joining_Date =$_GET['cy']."-".$_GET['cm']."-".$_GET['cd'];
        $quran_parts =$_GET['quran'];
        
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
	$result =  fp_preacher_add(0,$type, $state ,  $warranty_organization ,$saving ,  $first_name , $meddle_name , $last_name , $last_4th_name ,$birth_date , $sex , $male_members_no , $female_members_no , $residence_state , $city , $District , $section,$house_no , $phone1 , $phone2 , $qualify_name , $qualify_date , $qualify_rating , $quran_parts , $Issuer , $current_work , $Joining_Date , $health_state , $ill_cause , $data_entery_name , $data_entery_date );
	//$_GET['fno']);

	
	
	if(!$result)
            fp_err_add_fail($first_name." ".$meddle_name);
    else{
            fp_err_add_succes($first_name." ".$meddle_name,$phone1);
    }
    fp_db_close();
?>
