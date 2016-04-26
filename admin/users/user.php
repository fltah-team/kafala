
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
    <h2 align="center" class="adress">بيانات مستخدم </h2>
<br />
<?php
	include('../../utils/db.php');
	include('../../utils/usersAPI.php');
        include('../../utils/error_handler.php');
	if(!isset($_GET['id']) || $_GET['id']=="" || (int)$_GET['id']==0){
            fp_err_show_record("المستخدم");
        }

	$id = (int)$_GET['id']; 
	$user = fp_users_get_by_id($id);
	fp_db_close();
	if(!$user)fp_err_show_record("المستخدم");
?>
<form  method="post">
	<table width="60%" border="0" align="center">
  <tr>
    <td align="center" width="58%"><input class="textFiels" name="name" type="text" id="name" size="30" maxlength="30" value="<?php echo $user->name?>" /></td>
    <td align="center" width="42%">الاسم بالكامل</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="center"><input class="textFiels" name="un" type="text" disabled="disabled" id="un" size="30" maxlength="30" value="<?php echo $user->username?>" /></td>
    <td align="center">اسم المستخدم</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input name="un" type="text" disabled="disabled" class="textFiels" id="un" value="
      <?php
	  fp_get_user_type($user->type);
	  ?>
    " size="30" maxlength="30" /></td>
    <td align="center">نوع المستخدم</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="right"><input name="add" type="button" onclick="window.location.href ='showUsers.php'" value="قائمة المستخدمين"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    </table>
</form>
</div>

<div id="footer">
<p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
 
</body>
</html>
