<?php
	include('../../utils/db.php');
	include('../../utils/usersAPI.php');
	$users = fp_users_get();
	fp_db_close();
	if(!$users) die ("prolem");
	$ucount = @count($users);
	if($ucount == 0 ) die("NO users");
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
<h1 align="center" class="adress"> بيانات المستخدمين </h1>
<br />
<table width="60%" border="2" align="center">
  <tr align="center">
 	<td width="14%">حذف </td>
    <td width="14%">عرض </td>
    <td width="21%">نوع المستخدم</td>
    <td width="24%">اسم المستخدم</td>
    <td width="32%">الاسم كامل</td>
    <td width="9%">الرقم</td>
  </tr>
  <?php 
  	for($i = 0 ; $i < $ucount ; $i++){
		$user = $users[$i];
  ?>
  <tr align="center">
    <td><?php echo "<a href=\"DeleteUser.php?id=$user->id\"/>"?>حذف</td>
    <td><?php echo "<a href=\"user.php?id=$user->id\"/>"?>عرض</td>
    <td><?php echo $user->type?></td>
    <td><?php echo $user->username?></td>
    <td><?php echo $user->name?></td>
    <td><?php echo $user->id?></td>
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
