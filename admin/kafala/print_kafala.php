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

<div class="cont" >
    <table width="80%" border="0" align="center">
        <tr>
            <td align="center"><img src="../../images/logo.png" /></td>
            <td align="center"><h2>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</h2></td>
            <td align="center"  ><img src="../../images/logo.png" /></td>
        </tr>
    </table>
<div >
    <h2 align="center" >بيانات كفالة </h2>
<br />
<?php
	include('../../utils/db.php');
	include('../../utils/kafalaAPI.php');
        include('../../utils/error_handler.php');
        include '../../utils/sponsorAPI.php';
	if(!isset($_GET['id']) || $_GET['id']=="" || (int)$_GET['id']==0){
            fp_err_show_record("الكفالة");
        }
	$id = $_GET['id']; 
	$sponsorship = fp_kafala_get_by_id($id);
	if(!$sponsorship)fp_err_show_record("الكفالة");
    $name = fp_sponsor_get_by_id($sponsorship->sponsor)->name;
	fp_db_close();

?>
    <table width="60%" border="0" align="center">
       
    <td align="right" width="44%"><input class="textFiels" name="total" type="text" id="total" value="<?php echo $name?>" size="10" maxlength="30" /></td>
    <td align="center" width="56%">جهة الكفالة</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="right"><input class="textFiels" name="total" type="text" id="total" value="<?php echo $sponsorship->amount?>" size="10" maxlength="30" /></td>
    <td align="center">المبلغ الكلي</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><input class="textFiels" name="saving" type="text" id="saving" value="<?php echo $sponsorship->saving?>" size="10" maxlength="30" /></td>
    <td align="center">الادخار</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">
        <input class="textFiels" name="total" type="text" id="total" value="<?php echo $sponsorship->date?>" size="10" maxlength="30" />
    </td>
    <td align="center">من</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td align="right">
        <input class="textFiels" name="total" type="text" id="total" value="<?php echo $sponsorship->last_date?>" size="10" maxlength="30" />
    </td>
    <td align="center">الى</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">
        <input class="textFiels" name="saving" type="text" id="saving" value="<?php fp_get_sponsored($sponsorship->sponsored)?>" size="10" maxlength="30" />
    </td>
    <td align="center">المكفولين</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    </table>
</div>
    <script type="text/javascript" >
    window.print();
    </script>
</body>
</html>
