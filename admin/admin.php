<?php
    /*include '../utils/auth.php';
    $is_loged = fp_is_loged(1);
    if(!$is_loged)
        header("location:../");
    else echo "loged";*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
<link href="../style/pageStyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- Title -->
<div id="title">
<table width="90%" border="0" align="center">
  <tr>
    <td><img src="../images/logo.png" /></td>
    <td><h1>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</h1></td>
    <td><img src="../images/logo.png" /></td>
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
      <li><a href="main.html">عرض الموظفين</a>
   </ul>

</div>

<!-- main -->
<div class="main">
<br />
<h1 align="center" class="adress"> مدير النظام </h1>
<br />
<table width="60%" border="0" align="center">
  <tr>
    <td width="268" align="center" class="linkBT"><a href="users/addUser.php">اضافة مستخدم</a></td>
    <td width="100" align="center" ></td>
    <td width="219" align="center" class="linkBT"><a href="users/addKafala.php">اضافة كفالة</a></td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td width="268" align="center" class="linkBT"><a href="users/showUsers.php">عرض المستخدمين</a></td>
    <td width="100" align="center" ></td>
    <td width="219" align="center" class="linkBT"><a href="users/addKafala.php">عرض الكفالات</a></td>
    </tr>
  
    </table>
<div id="footer">
  <p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
</body>
</html>
