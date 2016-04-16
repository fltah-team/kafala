<?php

	
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
	
	
	$state = $_POST['status'];	
	$warranty_organization =  $_POST['sponsor'];	
	$first_name = $_POST['name1'];	
	$meddle_name = $_POST['name2'];	
	$last_name = $_POST['name3'];	
	$last_4th_name = $_POST['name4'];	
	$birth_date = $_POST['y']."-".$_POST['m']."-".$_POST['d'];	
	$sex = $_POST['gender'];	
	$mother_first_name = $_POST['mname1'];	
	$mother_middle_name = $_POST['mname2'];	
	$mother_last_name = $_POST['mname3'];	
	$mother_4th_name = $_POST['mname4'];	
	$mother_Birth_date = $_POST['my']."-".$_POST['mm']."-".$_POST['md'];		
	$mother_state = $_POST['mstatus'];	
	$father_dead_date = $_POST['fdd'];	
	$father_dead_cause = $_POST['dr'];	
	$father_work = $_POST['lw'];	
	$residence_state = $_POST['state'];	
	$city = $_POST['city'];	
	$District = $_POST['district'];	
	$section = $_POST['section'];	
	$house_no = $_POST['hno'];	
	$phone1 = $_POST['tel1'];	
	$phone2 = $_POST['tel2'];	
 	$sibiling = 0 ;
	$studing_state = $_POST['learning'];	
	$nonstuding_cause = "";// $_POST['teachingr'];	
	$school_name = $_POST['school'];	
	$level = $_POST['level'];	
	$year = $_POST['class'];	
	$quran_parts = $_POST['quran'];	
	$health_state = $_POST['illness'];	
	$ill_cause = $_POST['illt'];	
	$data_entery_name = "user";	
	$data_entery_date  = date("d-m-y");	

	
	$result = fp_orphan_add($state , $warranty_organization , $first_name , $meddle_name , $last_name , $last_4th_name , $birth_date , $sex , $mother_first_name , $mother_middle_name , $mother_last_name , $mother_4th_name , $mother_Birth_date , $mother_state ,$father_dead_date , $father_dead_cause , $father_work , $residence_state , $city , $District , $section,$house_no , $phone1 , $phone2 , $sibiling , $studing_state ,$nonstuding_cause, $school_name , $level , $year , $quran_parts , $health_state , $ill_cause , $data_entery_name , $data_entery_date );
	//$_POST['fno']);
	fp_db_close();
	
	if(!$result)
		die ("fail");

	echo "تمت اضافة";
	/*
sponsor=1&status=1&name4=r&name3=&name2=&name1=&gender=1&y=1997&m=9&d=17&mname4=&mname3=&mname2=&mname1=&mstatus=1&mbd=&lw=&dr=&fdd=&district=&city=&state=0&hno=&section=&tel2=&tel1=&teachingr=يدرس&learning=1&school=&quran=1&class=&level=&illt=جيدة&illness=1&udate=&user=&adate=&admin=&

sponsor=1&status=1&name1=j&name2=j&name3=j&name4=kj&bd=1&mname1=1997&mname2=1&mname3=1&mname4=j&mstatus=j&mbd=j&lw=j&dr=1&fdd=j&district=j&city=j&state=j&hno=j&section=j&tel2=0&tel1=j&femaleno=j&maleno=j&fno=j&teachingr=يدرس&school=1&quran=j&class=1&level=j&illt=j
	echo $str ;
	
include('../../utils/db.php');
	include('../../utils/usersAPI.php');
	
	$result = fp_users_add($_POST['name'],$_POST['un'],$_POST['pass'],$_POST['type']);
	fp_db_close();
	if(!$result)
		die ("fail");

	echo "تمت اضافة".$_POST['name'];*/
		
	
	
	
	
	
?>