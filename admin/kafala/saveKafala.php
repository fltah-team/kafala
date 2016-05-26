<?php
        include('../../utils/db.php');
        include('../../utils/kafalaAPI.php');
        include('../../utils/error_handler.php');
        include '../../utils/notifyAPI.php';
        include '../../utils/finalOrphanAPI.php';
        include '../../utils/finalStudentAPI.php';
        include '../../utils/usersAPI.php';
        include '../../utils/sponsorAPI.php';
        //if(!isset($_POST['total']) || !isset($_POST['saving']) || !isset($_POST['sponsor']) || !isset($_POST['last_date']) || !isset($_POST['ponsored']))
            //fp_err_add_fail("الكفالة");
	$total = $_POST['total'];
	$saving = $_POST['saving'];
	$sponsor = $_POST['sponsor'];
    $last_date = $_POST['last_date'];
	$sponsored = $_POST['ponsored'];
	$date = date("Y-m-d");
    switch ($sponsored){
        case 1 :
            $check = fp_final_orphan_get(" WHERE `state`=1 AND `warranty_organization`=".$sponsor);
            break;
        case 2 :
            $check = fp_final_student_get(" WHERE `state`=1 AND `warranty_organization`=".$sponsor);
            break;
    }
    if(!$check)
        fp_err_add_fail("الكفالة هناك احتمال عدم وجود مكفولين تابعين لهذه المنظمة");
	$result = fp_kafala_add($total,$saving,$date,$sponsor,$last_date,$sponsored);
	
    if(!$result)
        fp_err_add_fail("الكفالة");
    else{
        /*$name = fp_select_sponsored_type($n_sponsored);
        $sponsor = fp_sponsor_get_by_id($n_sponsor);
        $text =  'تم اضافة كفالة الى '.$name.' التابعين ل'.$sponsor->name;
        $users = fp_users_get();
        $ucount = @count($users);
        if($ucount > 0){
            for($i = 0 ; $i < $ucount ; $i ++){
                $user = $users[$i];
                fp_notify_add($text, "admin", $user->name, 1);
            }
        }*/
        fp_err_add_succes("الكفالة");
    }
fp_db_close();	
?>