<?php
 
	
	include('../../utils/db.php');
	include('../../utils/familyAPI.php');

	$family_id = 1 ;
	$state = "stoooooooooote" ;	
	$warranty_organization = 1;
	$father_first_name = "first name";
	$father_middle_name = "s name";
	$father_last_name = " l name";
	$father_4th_name = " 4 name";
	$birth_date = "2000-12-10";
	$sex = "female";
	$social_state = 5 ;
	$father_dead_date ="2000-12-10";
	$father_dead_cause ="accedent";
	$father_work = "work";
	$supporter_first_name = "dd";
	$supporter_meddle_name  = "dd";
	$supporter_last_name = "dd";
	$supporter_4th_name  = "dd";
	$supporter_birth_date  = "2000-12-10";
	$supporter_sex  = "male";
	$supporter_state = 5 ; 
	$supporter_relation   = "dd";
	$supporter_work   = "dd";
	$residence_state =1;
	$city ="khartoum";
	$District ="mamoorah";
	$section =1;
	$house_no = 5;
	$phone1 =022;
	$phone2 =200;
	$data_entery_name = "ddddd";
	$data_entery_date  ="2000-12-10" ;

	
	$result = fp_family_update($family_id , $state , $warranty_organization , $father_first_name , $father_middle_name , $father_last_name , $father_4th_name , $birth_date , $sex ,$social_state ,$father_dead_date , $father_dead_cause , $father_work ,  $supporter_first_name , $supporter_meddle_name , $supporter_last_name , $supporter_4th_name , $supporter_birth_date , $supporter_sex , $supporter_state , $supporter_relation  , $supporter_work  , $residence_state , $city , $District , $section,$house_no , $phone1 , $phone2 , $data_entery_name , $data_entery_date  );
	//$_GET['fno']);
	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo " family record is updated ";

			
	
?>