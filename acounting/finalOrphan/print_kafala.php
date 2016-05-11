<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
 <style >
        *{
            font-family:Droid Arabic Kufi;
        }
        .table{
        }
        .header{
            border: 1px #000 solid;
            background: #f1eded
        }
        .data{
            border: 1px #000 solid;
        }
    </style>>
</head>

<body>
<div id="title">
    <table width="100%" border="0" align="center">
  <tr>
    <td align="center"><img src="../../images/logo.png" /></td>
    <td align="center"><h3>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</h3></td>
    <td align="center"  ><img src="../../images/logo.png" /></td>
  </tr>
</table>
</div>
<br />
<?php 
        include('../../utils/db.php');
        include('../../utils/siblingAPI.php');
	include('../../utils/finalOrphanAPI.php');
        include('../../utils/sponsorAPI.php');
        include ('../../utils/kafalaAPI.php');
        include ('../../utils/error_handler.php');
	if(!isset($_GET['id']) || $_GET['id']=="" ){
            fp_err_show_record("اليتيم");
        }
        if((int)$_GET['id']==0){
            header("location:showOrphans.php?name=".$_GET['id']);
        }
        else{
	$id = (int)$_GET['id'];
        } 
	$orphan = fp_final_orphan_get_by_id($id);
        if(!$orphan) fp_err_show_record("اليتيم");
        $sibilings = fp_sibiling_get($id);
        $siblings_male = fp_sibiling_get_for_gender($id," and sex = 1 ");
        $siblings_female = fp_sibiling_get_for_gender($id," and sex = 0 ");
        $kafalas = fp_sposored_get_kafala($id);
	$male_count = @count($siblings_male);
        $female_count = @count($siblings_female);
	if(!$orphan) fp_err_show_record("اليتيم");	
	$scount = @count($sibilings);
        include('../../utils/stateAPI.php');
	$states = fp_states_get();
	$scount = count($states);
        $curr_state  = fp_states_get_by_id($orphan->residence_state);
        
        
?>
<table class="table" width="90%" dir="rtl" align="center" border="0">

    <tr align="center"   >
        <td class="header"  width="35%" >اسم المكفول</td>
        <td class="data"  width="35%" ><?php echo $orphan->first_name." ".$orphan->meddle_name." ".$orphan->last_name." ".$orphan->last_4th_name?></td>
  </tr>
     <tr align="center"   >
        <td class="header"  width="35%" >جهة الكفالة</td>
        <td class="data"  width="35%" ><?php echo "جهة الكفالة"?></td>
  </tr>
</table>
<br />

<div id="db_err" style="display: none" class="alert-box error"><span>خطأ: </span>هناك مشكلة في الاتصال بقاعدة البيانات    </div>

<div id="no_kafala" style="display: none" class="alert-box warning"><span>تنبيه: </span>لا يوجد كفالات لعرضها</div>

<div id="kafalas" style="display: none">
    <?php
        $kcount = @count($kafalas);
        
    ?>
    <table width="60%" border="0" align="center" class="table">
    <tr align="center" class="table_header">
    <td width="10%">عدد الشهور</td>
    <td width="20%">التاريخ</td>
    <td width="5%">الادخار</td>
    <td width="5%">المبلغ</td>
    <td width="5%">الرقم</td>
  </tr>
  <?php 
        
                
  	for($i = 0 ; $i < $kcount ; $i++){
                $kafala = $kafalas[$i];
		$sponsorship = fp_kafala_get_by_id($kafala->sponsorship);                
  ?>
    <tr align="center" class="table_data<?php echo $i%2?>">
    <td><?php echo $sponsorship->month_no?></td>
    <td><?php echo $sponsorship->date?></td>
    <td><?php echo $sponsorship->saving?></td>
    <td><?php echo $sponsorship->amount?></td>
    <td><?php echo $sponsorship->id?></td>
  </tr>
  <?php } 
  
	fp_db_close();
        ?>
        
  </table>
</div>

<?php
        if($kafalas == -1 )echo "<script type='text/javascript'>document.getElementById('db_err').style.display = 'block';</script>";
        else if($kafalas == 0) echo "<script type='text/javascript'>document.getElementById('no_kafala').style.display = 'block';</script>";
        else echo "<script type='text/javascript'>document.getElementById('kafalas').style.display = 'block';</script>";
        
    ?>     
     


</body>
</html>
