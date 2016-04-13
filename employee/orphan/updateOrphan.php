<?php

	
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
	$id = 2 ;
	$state = "statetttttttttttt" ;	
	$warranty_organization = 1;
	$first_name = "ameenah";
	$meddle_name = "s name";
	$last_name = " l name";
	$last_4th_name = " 4 name";
	$birth_date = "2000-12-10";
	$sex = "female";
	$mother_first_name = "m f name";
	$mother_middle_name ="m m name";
	$mother_last_name = " m l name";
	$mother_4th_name = " m 4 name";
	$mother_Birth_date = "2000-12-10";
	$mother_state = "state";
	$father_dead_date ="2000-12-10";
	$father_dead_cause ="accedent";
	$father_work = "work";
	$residence_state =1;
	$city ="khartoum";
	$District ="mamoorah";
	$section =1;
	$house_no = 5;
	$phone1 =022;
	$phone2 =200;
 	$sibiling = 0;
	$studing_state = "stud";
	$nonstuding_cause = "work";
	$school_name = "ff";
	$level = 1;
	$year = 2;
	$quran_parts =3;
	$health_state = "health state";
	$ill_cause ="health";
	$data_entery_name = "ddddd";
	$data_entery_date  ="2000-12-10" ;

	
	$result = fp_orphan_update($id , $state , $warranty_organization , $first_name , $meddle_name , $last_name , $last_4th_name , $birth_date , $sex , $mother_first_name , $mother_middle_name , $mother_last_name , $mother_4th_name , $mother_Birth_date , $mother_state ,$father_dead_date , $father_dead_cause , $father_work , $residence_state , $city , $District , $section,$house_no , $phone1 , $phone2  , $sibiling , $studing_state ,$nonstuding_cause, $school_name , $level , $year , $quran_parts , $health_state , $ill_cause , $data_entery_name , $data_entery_date  );
	//$_GET['fno']);
	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo " record is updated ";
	
	?>