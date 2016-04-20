<?php
	include('../../utils/db.php');
	include('../../utils/kafalaAPI.php');
	
	$id = $_GET['id']; 
	$sponsor = fp_kafala_get_by_id($id);
	fp_db_close();
	
	if(!$sponsor) die ("prolem");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
<link href="../../style/pageStyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- Title -->
<div id="title">
<table width="90%" border="0" align="center">
  <tr>
    <td><img src="../../images/logo.png" /></td>
    <td><h1>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</h1></td>
    <td><img src="../../images/logo.png" /></td>
  </tr>
</table>
</div>

<!-- menu -->
<div class="menu">
	<ul>
      
      <li><a href="../employee/orphan/cars.html">تسجيل خروج</a>
      <li><a href="../employee/orphan/customers.html">الدعاة</a>
      <li><a href="../employee/orphan/employees.html">الطلاب</a>
      <li><a href="../employee/orphan/reports.html">الأسر</a>
      <li><a href="../employee/orphan/main.html">الأيتام</a>
   </ul>
</div>

<!-- main -->
<div class="main">

<div class="login">
<h2 align="center">بيانات كفالة </h2>
<br />
    <table width="60%" border="0" align="center">
       
    <td align="right" width="44%"><input class="textFiels" name="total" type="text" id="total" value="<?php echo $sponsor->sponsor?>" size="10" maxlength="30" /></td>
    <td align="center" width="56%">جهة الكفالة</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="right"><input class="textFiels" name="total" type="text" id="total" value="<?php echo $sponsor->amount?>" size="10" maxlength="30" /></td>
    <td align="center">المبلغ الكلي</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><input class="textFiels" name="saving" type="text" id="saving" value="<?php echo $sponsor->saving?>" size="10" maxlength="30" /></td>
    <td align="center">الادخار</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><select class="textFiels" id="months">
  	  <?php
	  for($i=1 ; $i <= 12 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
	  </select></td>
    <td align="center">عدد الشهور</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">
        <input class="textFiels" name="saving" type="text" id="saving" value="<?php fp_get_sponsored($sponsor->sponsored)?>" size="10" maxlength="30" />
    </td>
    <td align="center">المكفولين</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><input name="add" type="button" onclick="IsEmpty()" value="اضافة كفالة" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    </table>
</div>

<div id="footer">
<p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
</body>
</html>
