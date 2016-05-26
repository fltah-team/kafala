<?php //include '../auth.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
<link href="../../style/pageStyle.css" rel="stylesheet" type="text/css" />
    <style >
        *{
            font-family:Droid Arabic Kufi;
        }
        body{
            
            background-color: #999999;
        }
        .cont{
            width: 1000px;
            background-color: white; 
            margin: 0 auto;
            padding: 50px 0 10px 0;
        }
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
</head>

<body>
<?php 
        include('../../utils/db.php');
        include('../../utils/finalOrphanAPI.php');
        include('../../utils/sponsorAPI.php');
        include ('../../utils/kafalaAPI.php');
        include ('../../utils/error_handler.php');
	if(!isset($_GET['id']) || $_GET['id']=="" ){
            fp_err_show_record("اليتيم");
        }
	$id = (int)$_GET['id'];
    $sp = (int)$_GET['sp'];
	$orphan = fp_final_orphan_get_by_id($id);
        if(!$orphan) fp_err_show_record("اليتيم");
        $kafala = fp_kafala_get_by_id($sp);
        
?>
<div class="cont" >
    <table width="80%" border="0" align="center">
        <tr>
            <td align="center"><img src="../../images/logo.png" /></td>
            <td align="center"><h2>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</h2></td>
            <td align="center"  ><img src="../../images/logo.png" /></td>
        </tr>
    </table>
    <br />
    <h2 align="center">ايصال استلام كفالة</h2>
    <br />
    <table align="center" dir="rtl" width="70%"> 
        <tr >
            <td align="center">اسم المكفول</td>
            <td align="center"><input size="20" class="textFiels" value="<?php echo $orphan->first_name." ".$orphan->meddle_name." ".$orphan->last_name." ".$orphan->last_4th_name?>" /></td>
            <td align="center">جهة الكفالة</td>
            <td align="center"><input size="20" class="textFiels" value="<?php echo fp_sponsor_get_by_id($orphan->warranty_organization)->name?>" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr >
            <td align="center">فترة الكفالة</td>
            <td align="center"><input size="20" class="textFiels" value="<?php echo "من: ".$kafala->date."  الى: ".$kafala->date?>" /></td>
            <td align="center">المبلغ المستلم</td>
            <td align="center"><input size="20" class="textFiels" value="<?php echo $kafala->amount?>" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr >
            <td align="center">التاريخ</td>
            <td align="center"><input size="20" class="textFiels" value="<?php echo date("Y-m-d")?>"  /></td>
            <td align="center">الزمن</td>
            <td align="center"><input size="20" class="textFiels" value="<?php echo date("H:i:s")?>"  /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr >
            <td align="center">توقيع المشرف</td>
            <td align="center"><input size="20" class="textFiels"  /></td>
            <td align="center">توقيع رئيس قسم الايتام</td>
            <td align="center"><input size="20" class="textFiels"  /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr >
            <td align="center">توقيع المحاسب</td>
            <td align="center"><input size="20" class="textFiels"  /></td>
            <td align="center">توقيع رئيس قسم الحسابات</td>
            <td align="center"><input size="20" class="textFiels"  /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
    </table>
    <br />
</div>
    <script type="text/javascript" >
    //window.print();
    </script>
</body>
</html>
