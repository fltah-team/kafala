<?php
 
	
	include('../../utils/db.php');
	include('../../utils/studentAPI.php');
	
	$id = 1 ;
	$state = "state of sudan " ;	
	$warranty_organization = 1;
	$first_name = "first name";
	$meddle_name = "s name";
	$last_name = " l name";
	$last_4th_name = " 4 name";
	$birth_date = "2000-12-10";
	$sex = "female";
	$father_dead_date ="2000-12-10";
	$father_dead_cause ="accedent";
	$father_work = "work";
	$sisters_no = 2 ;
	$brothers_no = 5 ;
	$residence_state =1;
	$city ="khartoum";
	$District ="mamoorah";
	$section =1;
	$house_no = 5;
	$phone1 =022;
	$phone2 =200;
	$school_name = " ";
	$uni_name = " " ;
	$level = 1;
	$year = 2;
	$last_result = " " ;
	$quran_parts =3;
	$study_year_no = 1 ;
	$study_date_start = 2000 ;
	$expected_grad = 2000 ;
	$health_state = "health state";
	$ill_cause ="health";
	$data_entery_name = "ddddd";
	$data_entery_date  ="2000-12-10" ;

	
	$result = fp_student_update($id , $state , $warranty_organization , $first_name , $meddle_name , $last_name , $last_4th_name , $birth_date , $sex , $father_dead_date , $father_dead_cause , 	$father_work ,$sisters_no , $brothers_no ,$residence_state , $city , $District , $section,$house_no , $phone1 , $phone2 ,$school_name ,$uni_name , $level , $year , $last_result,$quran_parts ,$study_year_no , $study_date_start , $expected_grad  , $health_state , $ill_cause , $data_entery_name , $data_entery_date  );
	//$_GET['fno']);
	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo " student record is updated ";

		
	
	
	
	
	
?>