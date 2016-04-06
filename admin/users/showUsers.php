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
<table width="90%" border="2" align="center">
  <tr align="center">
 	<td width="10%">حذف </td>
    <td width="9%">عرض </td>
    <td width="31%">نوع المستخدم</td>
    <td width="16%">اسم المستخدم</td>
    <td width="30%">الاسم كامل</td>
    <td width="4%">الرقم</td>
  </tr>
  <?php 
  	for($i = 0 ; $i < $ucount ; $i++){
		$user = $users[$i];
  ?>
  <tr align="center">
    <td>
    <button name="add" type="button" onclick="ajax(<?php echo $user->id?>)" />حذف</button>
	<?php /* echo "<a href=\"DeleteUser.php?id=$user->id\"/>"*/?></td>
    <td><?php echo "<a href=\"user.php?id=$user->id\">عرض</a>" ?></td>
    <td><?php
	  if($user->type == 4)
      echo 'مستخدم عرض البيانات';
	  else
	  if($user->type == 3)
	  echo 'موظف في قسم الحسابات';
	  else
	  if($user->type == 2)
      echo 'موظف في قسم الأيتام';
	  else
	  if($user->type == 1)
	  echo 'مدير نظام';
	  else
	   echo 'مستخدم غير معروف';
	  ?></td>
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
<script type="text/javascript">

	//var del = document.getElementById("delete");
	
	//ajax("div","deleteuser.php","?id=7",false);
	
	function ajax(ID)
{
    var ajax;
	//var d_node = document.getElementById(elementID);
	elementID = "div";
	filename = "deleteuser.php";
	str = "?id="+ID;
	post = false ;
	conf = confirm("هل تريد مسح <?php echo $user->name?>");
	if(conf){
    if (window.XMLHttpRequest)
    {
        ajax=new XMLHttpRequest();//IE7+, Firefox, Chrome, Opera, Safari
    }
    else if (ActiveXObject("Microsoft.XMLHTTP"))
    {
        ajax=new ActiveXObject("Microsoft.XMLHTTP");//IE6/5
    }
    else if (ActiveXObject("Msxml2.XMLHTTP"))
    {
        ajax=new ActiveXObject("Msxml2.XMLHTTP");//other
    }
    else
    {
        alert("Error: Your browser does not support AJAX.");
        return false;
    }
    ajax.onreadystatechange=function()
    {
        if (ajax.readyState==4&&ajax.status==200)
        {
            alert(ajax.responseText);
			window.location.href = "showUsers.php";
			//document.getElementById(elementID).innerHTML=ajax.responseText;
        }
    }
    if (post==false)
    {
        ajax.open("GET",filename+str,true);
        ajax.send(null);
		
    }
    else
    {
        ajax.open("POST",filename,true);
        ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        ajax.send(str);
    }
    return ajax;
	}
}
	
</script>
</body>
</html>
