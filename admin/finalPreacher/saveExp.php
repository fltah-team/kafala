<?php
    
	include('../../utils/db.php');
    include('../../utils/experienceAPI.php');
        /*if(!isset($_GET['o_id']) || (int)$_GET['o_id']== 0 || $_GET['o_id'] == '' ||
                !isset($_GET['sibling_name'])|| $_GET['sibling_name'] == '' ||
                !isset($_GET['s_gender']) || $_GET['s_gender'] == '' ||
                !isset($_GET['sibling_status']) || (int)$_GET['sibling_status']== 0 || $_GET['sibling_status'] == '' ||
                !isset($_GET['s_bd']) || $_GET['s_bd'] == '')
            die ("تعذر اضافة الفرد");*/
    
	$preacherID = $_GET['id'] ;
	$qualifier_name  = $_GET['qualifier_name'] ; 
	$org = $_GET['org'] ;
	$date  = $_GET['date'];
	
	$result = fp_experience_add( $preacherID ,$qualifier_name , $org , $date) ;
	
	fp_db_close();
	
	if(!$result)
            echo("فشلت عملية الاضافة");
        else 
            echo("تمت الاضافة بنجاح");
	?>