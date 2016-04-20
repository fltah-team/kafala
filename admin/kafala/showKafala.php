<?php
	include('../../utils/db.php');
	include('../../utils/kafalaAPI.php');
	$sponsorships = fp_kafala_get();
	fp_db_close();
	if(!$sponsorships) die ("prolem");
	$scount = @count($sponsorships);
	if($scount == 0 ) die("NO users");
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
      
      <li><a href="cars.html">تسجيل خروج</a>
      <li><a href="customers.html">الدعاة</a>
      <li><a href="employees.html">الطلاب</a>
      <li><a href="reports.html">الأسر</a>
      <li><a href="main.html">الأيتام</a>
      <li><a href="main.html">عرض المستخدمين</a>
   </ul>

</div>

<!-- main -->
<div class="main">
<h1 align="center" class="adress"> عرض الكفالات </h1>
<br />
<table width="60%" border="2" align="center">
  <tr align="center">
    <td width="14%">عرض </td>
    <td width="21%">عدد الشهور</td>
    <td width="21%">التاريخ</td>
    <td width="21%">الادخار</td>
    <td width="24%">المبلغ</td>
    <td width="24%">المكفولين</td>
    <td width="32%">جهة الكفالة</td>
    <td width="9%">الرقم</td>
  </tr>
  <?php 
  	for($i = 0 ; $i < $scount ; $i++){
		$sponsorship = $sponsorships[$i];
  ?>
  <tr align="center">
    <td><?php echo "<a href=\"kafala.php?id=$sponsorship->id\"/>"?>عرض</td>
    <td><?php echo $sponsorship->month_no?></td>
    <td><?php echo $sponsorship->date?></td>
    <td><?php echo $sponsorship->saving?></td>
    <td><?php echo $sponsorship->amount?></td>
    <td><?php fp_get_sponsored($sponsorship->sponsored)?></td>
    <td><?php echo $sponsorship->sponsor?></td>
    <td><?php echo $sponsorship->id?></td>
  </tr>
  <?php } ?>
  </table>

<br />
<div id="footer">
  <p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
</body>
</html>
