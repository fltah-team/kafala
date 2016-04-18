<?php

	
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
	

	
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
	$father_dead_date = $_GET['fdd'];	
	$father_dead_cause = $_GET['dr'];	
	$father_work = $_GET['lw'];	
	$residence_state = $_GET['state'];	
	$city = $_GET['city'];	
	$District = $_GET['district'];	
	$section = $_GET['section'];	
	$house_no = $_GET['hno'];	
	$phone1 = $_GET['tel1'];	
	$phone2 = $_GET['tel2'];	
 	$sibiling = 0 ;
	$studing_state = $_GET['learning'];	
	$nonstuding_cause = $_GET['teachingr'];	
	$school_name = $_GET['school'];	
	$level = $_GET['level'];	
	$year = $_GET['class'];	
	$quran_parts = $_GET['quran'];	
	$health_state = $_GET['illness'];	
	$ill_cause = $_GET['illt'];	
	$data_entery_name = "user";	
	$data_entery_date  = date("d-m-y");	

	$result = fp_orphan_add($state , $warranty_organization , $first_name , $meddle_name , $last_name , $last_4th_name , $birth_date , $sex , $mother_first_name , $mother_middle_name , $mother_last_name , $mother_4th_name , $mother_Birth_date , $mother_state ,$father_dead_date , $father_dead_cause , $father_work , $residence_state , $city , $District , $section,$house_no , $phone1 , $phone2 ,$studing_state ,$nonstuding_cause, $school_name , $level , $year , $quran_parts , $health_state , $ill_cause , $data_entery_name , $data_entery_date );
	//$_GET['fno']);

	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo "تمت اضافة اليتيم : ".$first_name." ".$meddle_name;
	/*
sponsor=1&status=1&name4=r&name3=&name2=&name1=&gender=1&y=1997&m=9&d=17&mname4=&mname3=&mname2=&mname1=&mstatus=1&mbd=&lw=&dr=&fdd=&district=&city=&state=0&hno=&section=&tel2=&tel1=&teachingr=يدرس&learning=1&school=&quran=1&class=&level=&illt=جيدة&illness=1&udate=&user=&adate=&admin=&

sponsor=1&status=1&name1=j&name2=j&name3=j&name4=kj&bd=1&mname1=1997&mname2=1&mname3=1&mname4=j&mstatus=j&mbd=j&lw=j&dr=1&fdd=j&district=j&city=j&state=j&hno=j&section=j&tel2=0&tel1=j&femaleno=j&maleno=j&fno=j&teachingr=يدرس&school=1&quran=j&class=1&level=j&illt=j
	echo $str ;
	
include('../../utils/db.php');
	include('../../utils/usersAPI.php');
	
	$result = fp_users_add($_GET['name'],$_GET['un'],$_GET['pass'],$_GET['type']);
	fp_db_close();
	if(!$result)
		die ("fail");

	echo "تمت اضافة".$_GET['name'];*/
		
	
	
	
	
	
?>