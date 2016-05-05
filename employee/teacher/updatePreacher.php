<?php
 
	
	include('../../utils/db.php');
	include('../../utils/preacherAPI.php');
	$id = 1 ;
	$state = "state rrrrrrrrrrr" ;
        $type = "aaa" ;
	$warranty_organization = 1;
        $saving = 1 ;
	$first_name = "first name";
	$meddle_name = "s name";
	$last_name = " l name";
	$last_4th_name = " 4 name";
	$birth_date = "2000-12-10";
	$sex = "female";
	$male_members_no = 1 ;
        $female_members_no = 2 ;
	$residence_state =1;
	$city ="khartoum";
	$District ="mamoorah";
	$section =1;
	$house_no = 5;
	$phone1 =022;
	$phone2 =200;
        $qualify_name = "sss";
        $qualify_date =  "2000-12-10" ;
        $qualify_rating = "very good ";
        $quran_parts = 4 ;
        $Issuer = 44 ;
        $current_work = "sss";
        $Joining_Date = "2000-12-10" ;       
	$health_state = "health state";
	$ill_cause ="health";
	$data_entery_name = "ddddd";
	$data_entery_date  ="2000-12-10" ;

	
	$result = fp_preacher_update($id , $type ,$state ,  $warranty_organization ,$saving ,null, $first_name , $meddle_name , $last_name , $last_4th_name , $birth_date , $sex , $male_members_no , $female_members_no , $residence_state , $city , $District , $section,$house_no , $phone1 , $phone2 , $qualify_name , $qualify_date , $qualify_rating , $quran_parts , $Issuer , $current_work , $Joining_Date , $health_state , $ill_cause , $data_entery_name , $data_entery_date);
	//$_GET['fno']);
	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo " preacher  record is updated ";

		
	
	
	
	
	
?>