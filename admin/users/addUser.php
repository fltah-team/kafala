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
<form >
	<table width="60%" border="0" align="center">
    <tr>
    <td id="noti">&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td align="right" width="58%"><input class="textFiels" name="un" type="text" id="complete_name" size="30" maxlength="30" /></td>
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
    <td id="passnoti" align="right">&nbsp;</td>
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
      <td align="right"><button id="bt" name="add"  type="button" onclick="IsEmpty()"    >اضافة مستخدم <img align="right" src="../../images/style images/add_icon.png" style="padding-left:5px" /></button></td>
    
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    </table>
</form>
<div style="margin: 0 auto; text-align: center ; width: 60%;" id="reponse">
    <span id="res_stattus"></span>
</div>
</div>
<script type="text/javascript" >;
	var checker = 0; 
	
	var complete_name = document.getElementById("complete_name");
	var un = document.getElementById("un");
	var type = document.getElementById("type");
	var pass1 = document.getElementById("pass1");
	var pass2 = document.getElementById("pass2");
	
	function IsEmpty(){ 
	// empty
	if(complete_name.value == ""){
	complete_name.style.color = "#ff0000" ;
	complete_name.setAttribute("placeholder","هذا الحقل فارغ");
	checker++;
		}
	if(un.value == ""){
	un.style.color = "#ff0000" ;
	un.setAttribute("placeholder","هذا الحقل فارغ");
	checker++;
		}
	if(pass1.value == ""){
	pass1.style.color = "#ff0000" ;
	pass1.setAttribute("placeholder","هذا الحقل فارغ");
	checker++;
		}
	if(pass2.value == ""){
	pass2.style.color = "#ff0000" ;
	pass2.setAttribute("placeholder","هذا الحقل فارغ");
	checker++;
		}
			 
	if(checker == 0 )check_pass(pass1.value,pass2.value);
	else 
            checker = 0; 

	
}
function check_pass(p1,p2){
        if(p1.length < 8|| p2.length < 8)alert("كلمة المرور قصيرة ,, الحد الدنى 8 حروف");
        else if(p1 != p2 ){
            alert("كلمات المرور غير متطابقة .. الرجاء التأكد");
            pass1.value = "";
            pass2.value = "";
        } 
        else ajax();
}
function ajax()
{
    var ajax;
    document.getElementById('bt').style.display = 'none';
	//var d_node = document.getElementById(elementID);
	elementID = "div";
	filename = "saveuser.php";
	str = "name="+complete_name.value+"&un="+un.value+"&type="+type.value+"&pass="+pass1.value;
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
			document.getElementById("reponse").innerHTML = ajax.responseText;
			//window.location.href = "showUsers.php";
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
  
<div id="footer">
  <p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
</body>
</html>
