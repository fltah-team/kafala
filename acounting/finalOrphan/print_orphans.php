<?php
    include '../auth.php';
    include('../../utils/db.php');
    include('../../utils/finalOrphanAPI.php');
    include('../../utils/error_handler.php');
        $extra = '';
        session_start();
        if(isset($_SESSION['q']))
        $extra = $_SESSION['q'];
        unset($_SESSION['q']);
        $orphans = fp_final_orphan_get($extra);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style >
        *{
            font-family:Droid Arabic Kufi;
        }
        body{
            background: #cccccc;
        }
        .cont{
            width: 1000px; 
            margin: 0 auto;
            padding: 50px 0 10px 0;
            background-color: white;
        }
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
</head>

<body>
<div class="cont" >
    <table width="80%" border="0" align="center">
        <tr>
            <td align="center"><img src="../../images/logo.png" /></td>
            <td align="center"><h2>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</h2></td>
            <td align="center"  ><img src="../../images/logo.png" /></td>
        </tr>
    </table>
    <h1 align="center" class="adress" dir="rtl">بيانات الأيتام</h1>
<br />
 <?php
    //if($users[0] == NULL ) die($users[1]) ;
        if($orphans == -1 ) {
            echo '
                <div style="text-align:center;color:#fff;">
                <div class="alert-box error"><span>خطأ: </span>هناك مشكلة في الاتصال بقاعدة البيانات    </div>
                 </div>
               </div>';
            die() ;
        }
        else
        if($orphans == 0 ) {
            echo '
                <div style="text-align:center;color:#fff;">
                <div class="alert-box notice"><span>تنبيه: </span>لا يوجد أيتام لعرضهم
                <p>يمكنك اضافة أيتام من <a href="../orphan/addOrphan.php">هنا</a></p>
                </div>
               </div>';
            die() ;
        }
        
	$ocount = @count($orphans);

?>
<table width="90%" border="1" style="border-collapse: collapse  ; border: 2px solid; " align="center" >
    <tr align="center" style="border: 3px solid;">
    <td width="7%">العمر</td>
    <td width="9%">الولاية </td>
    <td width="8%">الجنس </td>
    <td width="29%">جهة الكفالة</td>
    <td width="15%">الحالة</td>
    <td width="28%">الاسم </td>
    <td  width="4%">الرقم</td>
    
  </tr>
  <?php 
  	include('../../utils/stateAPI.php');
	include('../../utils/sponsorAPI.php');

function ageCalculator($dob){
        if(!empty($dob)){
        $birthdate = new DateTime($dob);
        $today   = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        return $age;
    }
	else
        return 0;   
}
  	for($i = 0 ; $i < $ocount ; $i++){
		$orphan = $orphans[$i];
  ?>
    <tr align="center">
    <td width="7%"><?php echo ageCalculator($orphan->birth_date);?></td>
 	<td width="9%"><?php echo fp_states_get_by_id($orphan->residence_state)->name;?></td>
    <td width="8%"><?php if($orphan->sex==1)echo "ذكر"; else echo "أنثى" ; ?> </td>
    <td width="29%"><?php echo fp_sponsor_get_by_id($orphan->warranty_organization)->name;?></td>
    <td width="15%"><?php fp_one_status_get_by_id($orphan->state)?></td>
    <td width="28%"> <?php echo $orphan->first_name." ".$orphan->meddle_name." ".$orphan->last_name." ".$orphan->last_4th_name?></td>
    <td width="4%"><?php echo $orphan->id?></td>
    
  </tr>
  <?php }
  fp_db_close();?>
  </table>
<br />
</div> 
</body>
</html>
