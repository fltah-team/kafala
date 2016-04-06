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
<h2 align="center">بيانات مستخدم </h2>
<br />
<form  >
	<table width="60%" border="0" align="center">
    <tr>
    <td id="noti">&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td align="right" width="58%"><input class="textFiels" name="name" type="text" id="name" size="30" maxlength="30" /></td>
    <td align="center" width="42%">الاسم بالكامل</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><input class="textFiels" name="un" type="text" id="un" size="10" maxlength="30" /></td>
    <td align="center">اسم المستخدم</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><select align="center" class="textFiels" name="type" id="type">
      <option value="4">مستخدم عرض البيانات</option>
      <option value="3">موظف في قسم الحسابات</option>
      <option value="2">موظف في قسم الأيتام</option>
      <option value="1">مدير نظام</option>
    </select></td>
    <td align="center">نوع المستخدم</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><input class="textFiels" name="pass1" type="password" id="pass1" size="10" maxlength="30" /></td>
    <td align="center">كلمة المرور</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><input class="textFiels" name="pass2" type="password" id="pass2" size="10" maxlength="30" /></td>
    <td align="center">تكرار كلمة المرور</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><input name="add" onclick="IsEmpty()" type="button"  value="اضافة مستخدم" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    </table>
</form>
</div>
<h3>
  <script type="text/javascript" >
	var i = 0; 
	var data = Array();
	var type = document.getElementById("type");
	data[0] = document.getElementById("name");
	data[1] = document.getElementById("un");
	data[2] = document.getElementById("pass1");
	data[3] = document.getElementById("pass2");
	function IsEmpty(){ 
	var res = 0 ;
	// empty
	for(i=0 ; i <= data.length ; i++){
	if(data[i].value == ""){
	data[i].style.color = "#ff0000" ;
	data[i].setAttribute("placeholder","هذا الحقل فارغ");
		} else res++;
		check(res);
	}
	 
}

function check(res){
	if(res == 4) ajax();
	}

function ajax()
{
    var ajax;
	//var d_node = document.getElementById(elementID);
	elementID = "div";
	filename = "saveuser.php";
	str = "name="+data[0].value+"&un="+data[1].value+"&type="+type.value+"&pass="+data[2].value;
	post = true ;
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
	
  </script>
</h3>
<div id="footer">
  <p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
</body>
</html>
