<?php
	include('../../utils/db.php');
	include('../../utils/usersAPI.php');
	$users = fp_users_get();
	fp_db_close();
        
	
	
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

<?php
    //if($users[0] == NULL ) die($users[1]) ;
        if($users == -1 ) {
            echo '
                <div style="text-align:center;color:#fff;">
                <div class="alert-box error"><span>خطأ: </span>هناك مشكلة في الاتصال بقاعدة البيانات    </div>
                 </div>
                <div id="footer">
                <p>جميع الحقوق محفوظة 2016 &copy;</p>
               </div>';
            die() ;
        }
        else
        if($users == 0 ) {
            echo '
                <div style="text-align:center;color:#fff;">
                <div class="alert-box notice"><span>تنبيه: </span>لا يوجد مستخدمين لعرضهم
                <p>يمكنك اضافة مستخدمين من <a href="addUser.php">هنا</a></p>
                </div>
                <div id="footer">
                <p>جميع الحقوق محفوظة 2016 &copy;</p>
               </div>';
            die() ;
        }
        
	$ucount = @count($users);
?>

<table width="90%" align="center" class="table">
    <tr align="center" >
 <td width="10%"> </td>
    <td width="9%"></td>    
    <td width="30%"></td>
    <td width="4%"></td>
    <td width="31%"><button name="add" class="bt"  type="button" onclick="window.open('print_users.php')"    > طباعة   <img align="right" src="../../images/style images/print_icon.png" style="padding-left:5px" /></button></td>
    <td width="16%"></td>
    
  </tr>
    <tr align="center" class="table_header">
 <td width="5%">حذف </td>
 
 <td width="5%">عرض </td>
    <td width="30%">نوع المستخدم</td>
    <td width="15%">اسم المستخدم</td>
    <td width="40%">الاسم كامل</td>
    <td width="5%">الرقم</td>
  </tr>
  <?php 
  	for($i = 0 ; $i < $ucount ; $i++){
		$user = $users[$i];
  ?>

    <tr align="center" class="table_data<?php echo $i%2?>"  >
        <td onclick="ajax(<?php echo $user->id?>)" >
        <img width="22px"   align="middle" alt="حذف" src="../../images/style images/delete_icon.png" style="padding-left:5px"  />
    </td>
        <td  onclick="window.location.href='user.php?id='+<?php echo $user->id?>"><img alt="عرض" align="middle" width="22px"  src="../../images/style images/show_icon.png" style="padding-left:5px" /></td>
    <td><?php
  fp_get_user_type($user->type);
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
function show_confirm(id){
    var confirm = "<div  id='show_confirm' class='confirm' ><img src='../../images/style images/success.png'alt='yes' class='yes' onclick='ajax(id)'/><img src='../../images/style images/error.png' alt='no' class='yes' onclick'' /></div>";
    return confirm;
}
	//var del = document.getElementById("delete");
	
	//ajax("div","deleteuser.php","?id=7",false);
	
	function ajax(ID)
{
    var ajax;
	//var d_node = document.getElementById(elementID);
	elementID = "sucsses_notice";
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
