<?php
    session_start();
     if(isset($_SESSION['un']) || isset($_SESSION['u_type']) || isset($_SESSION['name'])){
        switch ($_SESSION['u_type']){
                case 1 : header("location:admin/admin.php");
                    break;
                case 2 : header("location:employee/employee.php");
                    break;
                case 3 : header("location:admin/admin.php");
                    break;
                case 4 : header("location:admin/admin.php");
                    break;
                default : header("location:index.php?m=".$m);
            }
    }
    
    
?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
<link href="style/pageStyle.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- Title pihasdlfb -->
<div id="title">
<table width="90%" border="0" align="center">
  <tr>
    <td><img src="images/logo.png" /></td>
    <td><h1>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</h1></td>
    <td><img src="images/logo.png" /></td>
  </tr>
</table>
</div>
<?php
    if(isset($_GET['m'])){
        $m =  $_GET['m'];
        if($m != ""){
        echo '
          <div style="text-align:center;color:#fff;">
                <div class="alert-box error"><span>خطأ: </span>'.$m.'
                </div>
                 </div>  
        ';
    }
    }
?>
<div class="login">
		<div class="login-screen">
			<div class="app-title">
                            <h1>تسجيل دخول</h1>
			</div>

			<div class="login-form">
                            <form action="utils/login.php" method="post" >
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="اسم المستخدم" name="login-name" />
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="كلمة المرور" name="login-pass" />
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

                            <!--<a class="btn btn-primary btn-large btn-block" onclick="get_str()">تسجيل دخول</a>-->
                            <input type="submit" value="تسجيل دخول" class="btn btn-primary btn-large btn-block" id="login"/>
				<a class="login-link" href="#">نسيت كلمة المرور ؟</a>
                            </form>
			</div>
		</div>

	</div>

<script type="text/javascript" >
    /*function IsEmpty(){ 
        var text = document.getElementsByTagName('input');
        var empty_checker = 0 ;
        for(var i = 0 ; i< text.length ; i++){
           if(text[i].value == ''){
               text.item(i).style.color = "#ff0000" ;
               text.item(i).setAttribute("placeholder","هذا الحقل فارغ");
               empty_checker++;
           }
        }
        if(empty_checker > 0 )alert("هناك حقول يجب تعبئتها");
        else get_str();
}

function get_str(){
        
	var text = document.getElementsByTagName('input');
        var str = '';
        for(var i = 0 ; i< text.length ; i++){
           str += text[i].getAttribute('id')+'='+text[i].value+'&';
        }
        //window.location.href = "auth/login.php?"+str;
        //alert(str);
        ajax(str);
}
function ajax(str)
{		
    var ajax;
	var data ;
	//var d_node = document.getElementById(elementID);
	elementID = "div";
	filename = "auth/login.php";
	post = false ;
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
            //document.getElementById("res_stattus").innerHTML=ajax.responseText;
        }
    }
    if (post==false)
    {
        ajax.open("GET",filename+"?"+str,true);
        ajax.send(null);
		
    }
    else
    {
        ajax.open("POST",filename,true);
        ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        ajax.send(str);
    }
    return ajax;
	
}*/
</script>
<div id="footer">
<p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</body>
</html>
