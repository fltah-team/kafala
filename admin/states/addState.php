<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
<link href="../../style/pageStyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- Title -->
<table align="center" width="80%" >
    <tr >
        <td>
            <img width="100%"  src="../../images/banner.JPG" style="margin: 5px;border: 2px #990033 solid; border-radius: 10px ;" />            
        </td>
    </tr>
</table>
<!-- menu -->
<div class="menu">
	<?php include '../menu.php';?>
</div>
<!-- main -->
<div class="main">

<div class="login">
    <h2 align="center" class="adress">اضافة ولاية </h2>
<br />
<form >
	<table width="60%" border="0" align="center">
    <tr>
    <td id="noti">&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td align="right" width="58%"><input class="textFiels" name="un" type="text" id="complete_name" size="30" maxlength="30" /></td>
    <td align="center" width="42%">الاسم الولاية</td>
    </tr>
      
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="right"><button id="bt" class="add_bt" name="add"  type="button" onclick="IsEmpty()">اضافة الولاية <img align="right" src="../../images/style images/add_icon.png" style="padding-left:5px" /></button></td>
    
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
	var complete_name = document.getElementById("complete_name");
	function IsEmpty(){ 
	// empty
	if(complete_name.value == ""){
	complete_name.style.color = "#ff0000" ;
	complete_name.setAttribute("placeholder","هذا الحقل فارغ");
		}
        else
            //window.location.href = "savestate.php"
            ajax();
        }
function ajax()
{
    var ajax;
    document.getElementById('bt').style.display = 'none';
	//var d_node = document.getElementById(elementID);
	elementID = "div";
	filename = "saveState.php";
	str = "name="+complete_name.value;
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
			document.getElementById("reponse").innerHTML = ajax.responseText;
			//window.location.href = "showUsers.php";
			//document.getElementById(elementID).innerHTML=ajax.responseText;
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
	
}

  </script>
  
<div id="footer">
  <p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
</body>
</html>