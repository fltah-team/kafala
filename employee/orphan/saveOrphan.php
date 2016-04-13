<?php

	
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
	
	$bd = $_GET['y']."-".$_GET['m']."-".$_GET['d'];	
	$mbd = $_GET['my']."-".$_GET['mm']."-".$_GET['md'];	
	
	$result = fp_orphan_add($_GET['status'],$_GET['sponsor'],$_GET['name1'],$_GET['name2'],$_GET['name3'],$_GET['name4'],$bd,$_GET['gender'],$_GET['mname1'],$_GET['mname2'],$_GET['mname3'],$_GET['mname4'],$mbd,$_GET['mstatus'],$_GET['fdd'],$_GET['dr'],$_GET['lw'],$_GET['state'],$_GET['city'],$_GET['district'],$_GET['section'],$_GET['hno'],$_GET['tel1'],$_GET['tel2'],$_GET['learning'],$_GET['teachingr'],$_GET['school'],$_GET['level'],$_GET['class'],$_GET['quran'],$_GET['ill'],$_GET['illt'],"h",date("y-m-d"));
	
	//$_GET['fno']);
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