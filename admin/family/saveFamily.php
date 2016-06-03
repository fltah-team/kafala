<?php
	include('../../utils/db.php');
    include('../../utils/sponsorAPI.php');
    include('../../utils/notifyAPI.php');
	include('../../utils/familyAPI.php');
    include('../../utils/error_handler.php');

	$state = $_GET['status'];	
	$warranty_organization =  $_GET['sponsor'];
    $saving = 0 ;
	$father_first_name = $_GET['name1'];	
	$father_middle_name = $_GET['name2'];	
	$father_last_name = $_GET['name3'];	
	$father_4th_name = $_GET['name4'];	
	$birth_date = $_GET['y']."-".$_GET['m']."-".$_GET['d'];	
    $social_state = $_GET['state'];
	$sex = $_GET['gender'];	
	$father_dead_date = $_GET['fy']."-".$_GET['fm']."-".$_GET['fd'];	
	$father_dead_cause = $_GET['dr'];	
	$father_work = $_GET['lw'];	
    $supporter_first_name = $_GET['sn1'];	
	$supporter_meddle_name = $_GET['sn2'];	
	$supporter_last_name = $_GET['sn3'];	
	$supporter_4th_name = $_GET['sn4'];	
    /*name4=&name3=&name2=&name1=&state=&male_gender=1&female_gender=0&lw=&dr=&sn4=&sn3=&sn=&sn=&sstate=&
            smale_gender=1&sfemale_gender=0&sw=&sr=&district=&city=&hno=&section=&tel2=&tel1=&sponsor=1
            &status=1&y=1950&m=1&d=1&fy=1995&fm=1&fd=1&y=1950&m=1&d=1&state=1&gender=0sgender=0
         $supporter_relation  , $supporter_work  , $residence_state , $city , $District , $section,$house_no , $phone1 ,
         $phone2 , $data_entery_name , $data_entery_date );*/
	$supporter_birth_date = $_GET['sy']."-".$_GET['sm']."-".$_GET['sd'];	
	$supporter_sex = $_GET['sgender'];	
	$supporter_state = $_GET['sstate'];
	$supporter_relation = $_GET['sr'];	
	$supporter_work = $_GET['sw'];	
	$residence_state = $_GET['state'];	
	$city = $_GET['city'];	
	$District = $_GET['district'];	
	$section = $_GET['section'];	
	$house_no = $_GET['hno'];	
	$phone1 = $_GET['tel1'];
    if(fp_family_get_by_phone1($phone1))
        fp_err_add_fail("الاسرة رقم الجوال1 موجود الرجاء تغييره");
        $phone2 = $_GET['tel2'];

        //session_start();
	$data_entery_name = "user";//$_SESSION['name'];
	$data_entery_date  = date("y-m-d");
                            
	$result =fp_family_add($state , $warranty_organization , $saving , $father_first_name , $father_middle_name , $father_last_name , $father_4th_name , $birth_date , $sex ,$social_state ,$father_dead_date , $father_dead_cause , $father_work ,  $supporter_first_name , $supporter_meddle_name , $supporter_last_name , $supporter_4th_name , $supporter_birth_date , $supporter_sex , $supporter_state , $supporter_relation  , $supporter_work  , $residence_state , $city , $District , $section,$house_no , $phone1 , $phone2 , $data_entery_name , $data_entery_date );
//$_GET['fno']);

	
	
	if(!$result)
            echo "err";// fp_err_add_fail("الأسرة");
    else{
            fp_err_add_succes("الأسرة");
    }
    fp_db_close();
?>
