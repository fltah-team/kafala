<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
<link href="../../style/pageStyle.css" rel="stylesheet" type="text/css" />
</head>

    <body >
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
    <h2 align="center" class="adress">اضافة كفالة جديدة</h2>

<br />
<form action="saveuser.php" method="post">
	<table width="60%" border="0" align="center">
            
        <?php
    
	include('../../utils/db.php');
	include('../../utils/sponsorAPI.php');
	$sponsors = fp_sponsor_get();
	$scount = count($sponsors);
	
	?>
    <td align="right" width="44%"><select class="textFiels" name="sponsor" id="sponsor">
    <?php for($i = 0 ; $i < $scount ; $i++){
		$sponsor = $sponsors[$i] ; ?>
      <option value="<?php echo $sponsor->id?>"><?php echo $sponsor->name?></option>
	<?php } ?>
    </select></td>
    <td align="center" width="56%">جهة الكفالة</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td align="right"><input class="textFiels" name="total" type="text" id="total" size="10" maxlength="30" /></td>
    <td align="center">المبلغ الكلي</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><input class="textFiels" name="saving" type="text" id="saving" size="10" maxlength="30" /></td>
    <td align="center">الادخار</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><select class="textFiels" id="months">
  	  <?php
	  for($i=1 ; $i <= 12 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
	  </select></td>
    <td align="center">عدد الشهور</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><select  class="textFiels" id="sponsored">
  	  <option value="1">الأيتام</option>
      <option value="2">الطلاب</option>
      <option value="3">الدعاة/المقرئين/المعلمين</option>
      <option value="4">الأسر</option>
    </select></td>
    <td align="center">المكفولين</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="right"><button name="add"  id="bt"  type="button" onclick="IsEmpty()"    >اضافة كفالة <img align="right" src="../../images/style images/add_icon.png" style="padding-left:5px" /></button></td>

    <td>&nbsp;</td>
  </tr>



  <tr>
      <td>&nbsp;</td>
      <td ></td>
    
  </tr>
    </table>
</form>
<dir id="space"></dir>
</div>
<script type="text/javascript" >;
 
	var checker = 0; 
	var sponsor = document.getElementById("sponsor");
	var total = document.getElementById("total");
	var saving = document.getElementById("saving");
	var months = document.getElementById("months");
	var sponsored = document.getElementById("sponsored");
	
	function IsEmpty(){ 
	// empty
	if(total.value == ""){
	total.style.color = "#ff0000" ;
	total.setAttribute("placeholder","هذا الحقل فارغ");
	checker++;
		}
        
	if(saving.value == ""){
	saving.style.color = "#ff0000" ;
	saving.setAttribute("placeholder","هذا الحقل فارغ");
	checker++;
		}	 
	if(checker == 0)ajax();
	else 
	checker = 0; 
}

function ajax()
{
    var ajax;
	//var d_node = document.getElementById(elementID);
	elementID = "div";
	filename = "saveKafala.php"; 
	str = "sponsor="+sponsor.value+"&total="+total.value+"&saving="+saving.value+"&months="+months.value+"&ponsored="+sponsored.value;
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
            //alert(ajax.responseText);
            document.getElementById("space").innerHTML = ajax.responseText;
            document.getElementById("bt").setAttribute("disabled","disabled");
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
